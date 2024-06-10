<?php
$conn = mysqli_connect('localhost','root','user_db');
@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['name']);
    $pass =md5($_POST['password']);
    $cpass =md5($_POST['cpassword']);
    $user_type = ($_POST['user_type']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    
    $result = mysqli_query($conn, $select);

    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exit!';
    }

};
?>