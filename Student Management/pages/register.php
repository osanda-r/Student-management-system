<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel_no = $_POST['tel_no'];
    $course = $_POST['course'];

    $query = "INSERT INTO students (nic, name, address, tel_no, course) 
              VALUES ('$nic', '$name', '$address', '$tel_no', '$course')";

    if ($conn->query($query) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<h2>Student Registration</h2>
<form method="POST">
    NIC: <input type="text" name="nic" required><br>
    Name: <input type="text" name="name" required><br>
    Address: <input type="text" name="address" required><br>
    Telephone No: <input type="text" name="tel_no" required><br>
    Course: <input type="text" name="course" required><br>
    <button type="submit">Register</button>
</form>

</body>
</html>
