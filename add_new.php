<?php 
include "connect.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Use backticks around table and column names in the SQL query
    $sql = "INSERT INTO `crude` (`id`, `first_name`, `last_name`, `email`, `gender`) 
            VALUES (NULL, '$first_name', '$last_name', '$email', '$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
        exit; // It's good practice to add an exit after redirecting
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!-- The rest of your HTML code remains the same -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>
    <style>
        /* Add custom CSS styles here */

        /* Center the navigation bar text */
        .navbar {
            text-align: center;
            background-color: #17a2b8;
            color: #fff;
            padding: 10px 0;
            font-size: 24px;
        }

        /* Add some margin to the form */
        .container {
            margin-top: 30px;
        }

        /* Add some space between the form elements */
        .form-group {
            margin-bottom: 15px;
        }

        /* Center the buttons */
        .text-center {
            text-align: center;
        }

        /* Style the form */
        form {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style the buttons */
        button[type="submit"],
        a.btn {
            margin-top: 10px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light fs-3 mb-5">
    PHP Complete CRUD Application
</nav>
<div class="container">
    <div class="text-center mb-4">
    	<h2> Strathmore University</h2>

        <h3> Apply by Here</h3>
        <p class="text-muted">Complete the form below to add your application</p>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 50vw; min-width:300px;">
            <div class="row mb-3"> 
                <div class="col">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Ruth">
                </div>
                <div class="col">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Kuria">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="name@example">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>



				
			



