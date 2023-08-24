<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    session_start();
    if(!isset($_SESSION['admin_name'])){
        header('location:index.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>admin page</title>
        <link rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <div class="userloginmsg">
            <div>
            <h1 class="hi">Hi <span class="username"><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p class="matter">Welcome to the Page</p>
            </div>
        </div>
    </body>
</html>
    
