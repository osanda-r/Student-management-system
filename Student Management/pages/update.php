<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel_no = $_POST['tel_no'];
    $course = $_POST['course'];

    $query = "UPDATE students SET name='$name', address='$address', tel_no='$tel_no', course='$course' WHERE nic='$nic'";

    if ($conn->query($query)) {
        echo "Student details updated!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<h2>Update Student</h2>
<form method="POST">
    NIC: <input type="text" name="nic" required><br>
    New Name: <input type="text" name="name" required><br>
    New Address: <input type="text" name="address" required><br>
    New Tel No: <input type="text" name="tel_no" required><br>
    New Course: <input type="text" name="course" required><br>
    <button type="submit">Update</button>
</form>

</body>
</html>