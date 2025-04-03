<?php

require "../../config/MySQLConnector.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: var(--dark);
        }

        .course-banner {
            height: 300px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../../assets/images/Companyimages/courses/courseCover.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .course-info {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        }

        .course-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .course-description {
            font-size: 1.1rem;
            max-width: 100%;
            margin-bottom: 10px;
        }

        .registration-form {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .form-header {
            border-bottom: 2px solid var(--primary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            color: var(--primary);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.25);
        }

        .btn-register {
            background-color: var(--primary);
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
        }

        .icon-label {
            color: var(--primary);
            margin-right: 10px;
            width: 20px;
        }

        .highlight-text {
            color: var(--accent);
            font-weight: 700;
        }

        .course-features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .success-message {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 767px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .course-banner {
                height: 300px;
            }

            .course-title {
                font-size: 1.8rem;
            }

            .course-description {
                font-size: 1rem;
            }

            .course-features {
                flex-direction: column;
                gap: 10px;
            }

            .registration-form {
                padding: 20px 15px;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }

            .btn-register {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }

        /* Small screens */
        @media (max-width: 576px) {
            .course-banner {
                height: 400px;

            }

            .course-info {
                padding: 15px;
            }

            .course-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container my-4 my-md-5">
        <!-- Course Image and Details Section -->
        <div class="course-banner">
            <div class="course-info">
                <h1 class="course-title">DAVINCI Resolve Master Course</h1>
                <p class="course-description">Learn Professional Color Grading, Editing, and Audio Processing.</p>
                <div class="course-features">
                    <div class="feature-item">
                        <i class="fas fa-clock icon-label"></i>
                        <span>4 Weeks</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-user-graduate icon-label"></i>
                        <span>Beginner to Advanced</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-certificate icon-label"></i>
                        <span>Certificate Included</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Form Section -->
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="registration-form">
                    <div class="form-header">
                        <h2><i class="fas fa-edit me-2"></i>Course Registration</h2>
                        <p>Join our <span class="highlight-text">DAVINCI Resolve Master Course</span> course today and take your skills to the next level!</p>
                    </div>

                    <?php
                    // Initialize variables
                    $name = $email = $address = $age = $mobile = "";
                    $nameErr = $emailErr = $addressErr = $ageErr = $mobileErr = "";
                    $showSuccess = false;

                    // Form submission processing
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Validate Name
                        if (empty($_POST["name"])) {
                            $nameErr = "Name is required";
                        } else {
                            $name = test_input($_POST["name"]);
                            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                                $nameErr = "Only letters and white space allowed";
                            }
                        }

                        // Validate Email
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                        } else {
                            $email = test_input($_POST["email"]);
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                            }
                        }

                        // Validate Address
                        if (empty($_POST["address"])) {
                            $addressErr = "Address is required";
                        } else {
                            $address = test_input($_POST["address"]);
                        }

                        // Validate Age
                        if (empty($_POST["age"])) {
                            $ageErr = "Age is required";
                        } else {
                            $age = test_input($_POST["age"]);
                            if (!is_numeric($age) || $age < 16 || $age > 100) {
                                $ageErr = "Valid age between 16 and 100 is required";
                            }
                        }

                        // Validate Mobile
                        if (empty($_POST["mobile"])) {
                            $mobileErr = "Mobile number is required";
                        } else {
                            $mobile = test_input($_POST["mobile"]);
                            if (!preg_match("/^[0-9]{10}$/", $mobile)) {
                                $mobileErr = "Valid 10 digit mobile number is required";
                            }
                        }

                        // If no errors, process the form
                        if (empty($nameErr) && empty($emailErr) && empty($addressErr) && empty($ageErr) && empty($mobileErr)) {
                            // Here you would typically save the data to a database
                            // For this example, we'll just show a success message
                            $showSuccess = true;

                            $db = new MySQLConnector();
                            $d = new DateTime();
                            $tz = new DateTimeZone("Asia/Colombo");
                            $d->setTimezone($tz);
                            $date = $d->format("Y-m-d H:i:s");
                            $register = $db->iud("INSERT INTO `courseregister`(`name`,`email`,`mobile`,`date`,`address`,`age`)VALUES(?,?,?,?,?,?)", "sssssi", [$name, $email, $mobile, $date, $address, $age]);
                            // Reset form fields

                            if ($register['affected_rows'] > 0) {
                    ?>
                                <script>
                                    alert("Register Success");
                                    window.location="../";
                                </script>
                            <?php


                            } else {
                            ?>
                                <script>
                                    alert("Error !! try again");
                                </script>
                    <?php
                            }
                        }
                    }

                    // Function to sanitize input data
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>

                    <!-- Success message -->
                    <div class="success-message" style="<?php echo $showSuccess ? 'display: block;' : ''; ?>">
                        <i class="fas fa-check-circle me-2"></i>Registration successful! We'll contact you soon with more details.
                    </div>

                    <!-- Registration Form -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">
                                    <i class="fas fa-user icon-label"></i>Full Name
                                </label>
                                <input type="text" class="form-control <?php echo !empty($nameErr) ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Name" value="<?php echo $name; ?>" required>
                                <div class="invalid-feedback"><?php echo $nameErr; ?></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope icon-label"></i>Email Address
                                </label>
                                <input type="email" class="form-control <?php echo !empty($emailErr) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="email" value="<?php echo $email; ?>" required>
                                <div class="invalid-feedback"><?php echo $emailErr; ?></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">
                                <i class="fas fa-home icon-label"></i>Address
                            </label>
                            <textarea class="form-control <?php echo !empty($addressErr) ? 'is-invalid' : ''; ?>" id="address" name="address" rows="2" placeholder="Your complete address" required><?php echo $address; ?></textarea>
                            <div class="invalid-feedback"><?php echo $addressErr; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label">
                                    <i class="fas fa-birthday-cake icon-label"></i>Age
                                </label>
                                <input type="number" class="form-control <?php echo !empty($ageErr) ? 'is-invalid' : ''; ?>" id="age" name="age" placeholder="25" min="16" max="100" value="<?php echo $age; ?>" required>
                                <div class="invalid-feedback"><?php echo $ageErr; ?></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobile" class="form-label">
                                    <i class="fas fa-mobile-alt icon-label"></i>Mobile Number
                                </label>
                                <input type="text" class="form-control <?php echo !empty($mobileErr) ? 'is-invalid' : ''; ?>" id="mobile" name="mobile" placeholder="mobile" value="<?php echo $mobile; ?>" required>
                                <div class="invalid-feedback"><?php echo $mobileErr; ?></div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-register">
                                <i class="fas fa-paper-plane me-2"></i>Register Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>