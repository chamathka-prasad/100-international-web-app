<?php

if ($_GET["code"] != null && $_GET["code"] == 935522) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Details</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            /* Removes space between borders */
            margin: 20px 0;
            font-size: 0.9em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            background-color: #fff;
        }

        .user-table thead tr {
            background-color: #009879;
            /* A nice header color */
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .user-table th,
        .user-table td {
            padding: 12px 15px;
            /* Padding inside cells */
            border: 1px solid #dddddd;
            /* Light grey border */
            text-align: left;
        }

        /* Zebra striping for better readability */
        .user-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        /* Hover effect for rows */
        .user-table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
            /* Indicate rows might be clickable */
        }

        /* Optional: Style for long addresses */
        .user-table td:nth-child(4) {
            /* Targeting the Address column */
            max-width: 250px;
            /* Limit width */
            overflow: hidden;
            /* Hide overflow */
            text-overflow: ellipsis;
            /* Add ... for overflow */
            white-space: nowrap;
            /* Prevent wrapping */
            /* You could add a tooltip on hover to show the full address with JS */
        }
    </style>

    <body>

        <h1>Register Details</h1>

        <table class="user-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Registered Date</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require "../config/MySQLConnector.php";
                $db = new MySQLConnector();

                $details = $db->search("SELECT * FROM `courseregister` ORDER BY `date` DESC");

                for ($i = 0; $i < count($details); $i++) {
                ?>

                    <tr>
                        <td><?php echo $i + 1 ?></td>
                        <td><?php echo $details[0]["name"] ?></td>
                        <td><?php echo $details[0]["email"] ?></td>
                        <td><?php echo $details[0]["mobile"] ?></td>
                        <td><?php echo $details[0]["address"] ?></td>
                        <td><?php echo $details[0]["age"] ?></td>
                        <td><?php echo $details[0]["date"] ?></td>
                    </tr>
                <?php
                }

                ?>

            </tbody>
        </table>

    </body>

    </html>
<?php
} else {


?>
    <script>
        window.location = "../";
    </script>
<?php

}

?>