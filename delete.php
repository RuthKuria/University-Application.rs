<?php
include "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `crude` WHERE id = $id"; // Use backticks around table name
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php?msg=Record deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn); // Add a semicolon at the end
}
?>
