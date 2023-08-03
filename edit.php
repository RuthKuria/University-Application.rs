<?php 
include "connect.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Use backticks around table and column names in the SQL query
    $sql = "UPDATE `crude` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data updated successfully");
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
    <title>PHP CRUDE Application</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    PHP Complete CRUDE Application
</nav>
<div class="container">
    <div class="text-center mb-4">
        <h3>Edit User Information</h3>
        <p class="text-muted">Click update after changing any information</p>
    </div>
    <?php
    $sql = "SELECT * FROM `crude` WHERE id = $id LIMIT 1"; // Corrected SQL query
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 50vw; min-width:300px;">
            <div class="row mb-3"> 
                <div class="col">
                    <label class="form-lebel">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                </div>
                <div class="col">
                    <label class="form-lebel">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                </div>

            </div>
            <div class="mb-3">
                    <label class="form-lebel">Email:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="form-group mb-3">
                <label>Gender:</label>
                <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender']=='male')?"checked":""; ?>>
                <label for="male" class="form-input-lebel">Male</label>
                <label></label>

                <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')?"checked":""; ?>>
                <label for="female" class="form-input-lebel">Female</label>
            </div>
            <div>
                <button type="submit" class="btn-btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
