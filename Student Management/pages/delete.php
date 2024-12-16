<?php
include("../config/db.php");

if (isset($_POST['nic'])) {
    $nic = $_POST['nic'];
    $query = "DELETE FROM students WHERE nic='$nic'";
    if ($conn->query($query)) {
        echo "Student record deleted.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<h2>Delete Student</h2>
<form method="POST">
    NIC: <input type="text" name="nic" required>
    <button type="submit">Delete</button>
</form>
</body>
</html>
