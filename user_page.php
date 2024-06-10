<?php

@include 'config.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>QuizApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="quiz.css" rel="stylesheet">
</head>

<div class="login-page">
    <!DOCTYPE html>
<html>
<head>

<div class="container">
    <div class="content">
        <h3>hi, <span>admin</span></h3>
        <h1> welcome <span><?php echo $_SESSION['user_name'] ?></span><h1>
        <p> this is admin page </p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php"class="btn">register</a>
        <a href="logout_php" class="btn">logout</a>
    </div>
</div>

    
    <div id="quizContainer" class="container">
</body>
</html>