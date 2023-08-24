<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(isset($_POST['login'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);
        $cpass = mysqli_real_escape_string($conn,$_POST['conformpassword']);
        $select = " SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $select);
        if(mysqli_num_rows($result) > 0){
            echo '<script>alert("User Already Exist")</script>';
        }else{
            if($pass != $cpass){
                echo '<script>alert("Password does not match")</script>';
            }else{
                $insert = "INSERT INTO users(name, email, password) VALUES('$name','$email','$pass')";
                mysqli_query($conn, $insert);
                echo '<script>alert("Registration Successful")</script>';
            }
        }
    };
?>