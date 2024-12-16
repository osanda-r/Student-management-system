<?php
include("../config/db.php");

if (isset($_GET['nic'])) {
    $nic = $_GET['nic'];
    $query = "SELECT * FROM students WHERE nic='$nic'";
    $result = $conn->query($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<h2>Search Student</h2>
<form method="GET">
    NIC: <input type="text" name="nic" required>
    <button type="submit">Search</button>
</form>

<?php
if (isset($result) && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>Name: " . $row['name'] . "</p>";
    echo "<p>Address: " . $row['address'] . "</p>";
    echo "<p>Tel No: " . $row['tel_no'] . "</p>";
    echo "<p>Course: " . $row['course'] . "</p>";
} elseif (isset($_GET['nic'])) {
    echo "<p>No student found with NIC: $nic</p>";
}
?>

</body>
</html>
