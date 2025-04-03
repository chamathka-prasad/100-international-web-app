<?php
class MySQLConnectionPool {
    private $host = 'localhost';
    // private $user = 'ceylons9_robort';
    // private $password = 'qpqIt4ghlOZV';
    // private $dbname = 'ceylons9_robort';


    private $user = 'root';
    private $password = '12345678';
    private $dbname = '100db';

    private $pool = [];
    private $maxConnections = 10;

    // Get a connection from the pool
    public function getConnection() {
        if (count($this->pool) > 0) {
            // Reuse an existing connection
            return array_pop($this->pool);
        } else {
            // Create a new connection if pool is empty
            return $this->createConnection();
        }
    }

    // Return a connection to the pool
    public function releaseConnection($conn) {
        if (count($this->pool) < $this->maxConnections) {
            $this->pool[] = $conn;
        } else {
            $conn->close();
        }
    }

    // Create a new connection
    private function createConnection() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

class MySQLConnector {
    private $pool;

    public function __construct() {
        $this->pool = new MySQLConnectionPool();
    }

    public function iud($query, $types = null, $params = null) {
        $conn = $this->pool->getConnection();
        $stmt = $conn->prepare($query);

        if ($types && $params) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $affected_rows = $stmt->affected_rows;

        // Get the last inserted ID
        $last_id = $conn->insert_id;

        $stmt->close();
        $this->pool->releaseConnection($conn);

        return ['affected_rows' => $affected_rows, 'last_id' => $last_id];
    }

    public function search($query, $types = null, $params = null) {
        $conn = $this->pool->getConnection();
        $stmt = $conn->prepare($query);

        if ($types && $params) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        $this->pool->releaseConnection($conn);

        return $data;
    }

    // Begin a transaction
    public function beginTransaction() {
        $conn = $this->pool->getConnection();
        $conn->begin_transaction();
        $this->pool->releaseConnection($conn);
    }

    // Commit a transaction
    public function commit() {
        $conn = $this->pool->getConnection();
        $conn->commit();
        $this->pool->releaseConnection($conn);
    }

    // Rollback a transaction
    public function rollBack() {
        $conn = $this->pool->getConnection();
        $conn->rollback();
        $this->pool->releaseConnection($conn);
    }
}
?>