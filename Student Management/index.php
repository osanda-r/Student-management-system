<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: pages/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Dashboard</title>
  
    <link rel="stylesheet" href="stylemain.css">

</head>
<body style="background-image: url('images/back1.png'); 
             background-size: cover; 
             background-position: center; 
             background-repeat: no-repeat; 
             height: 100vh; 
             margin: 0;">

    <div class="container">
        <h1>Welcome to Student Management System</h1>
        <h2>User: <?php echo htmlspecialchars($_SESSION['user']); ?></h2>
        <nav>
            <ul>
                <li><a href="pages/register.php">Register Student</a></li>
                <li><a href="pages/search.php">Search Student</a></li>
                <li><a href="pages/update.php">Update Student</a></li>
                <li><a href="pages/delete.php">Delete Student</a></li>
                <li><a href="pages/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
