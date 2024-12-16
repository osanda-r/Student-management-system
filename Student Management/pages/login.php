<?php
session_start();
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body style="background-image: url('../images/back1.png'); 
             background-size: cover; 
             background-position: center; 
             background-repeat: no-repeat; 
             height: 100vh; 
             margin: 0;">

<div class="container">

    <h1>Student Management System</h1>
    <img src="../images/logo1.png" alt="Student" width="100" height="100">
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>

</div>
</body>
</html>
