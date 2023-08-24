<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    session_start();
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass=mysqli_real_escape_string($conn,$_POST['password']);
        $select = "SELECT * FROM users WHERE email = '$email' && password='$pass'";
        $result = mysqli_query($conn, $select);
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            $_SESSION['admin_name'] = $row['name'];
            header('location:loginsuccessful.php');
        }
        else{
            echo '<script>alert("Invalid User Name or Password")</script>';
        }
    };
?>