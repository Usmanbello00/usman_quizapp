/*<?php
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

    }else{

		if($pass != $cpass){
			$error[] ='password not matched!';
		}else{
			$insert = "INSERT INTO user_form(name, email, password,	user_type) VALUES('$name', '$email', '$pass', '$user_type')";
			mysqli_query($conn, $insert);
			header('location:login_form.php');
		}
	}

};
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
	<title>Signup Page</title>
    <h3>Create an Account</h3>
    <a href="index2.html">login-page</a>
</head>
<body>
	<form id="signup-form" method="post">
		<h2>Sign up</h2>
		<?php
		if(isset($error)){
			foreach($error as $error){
				echo '<span class="error=msg">'.$error.'</span>';
			}
		}
		?>

		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required>

		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" value="Sign up">
		<p>already have an account? <a href="login_form.html">login now</a></p>
	</form>
   
</body>
</html>
  