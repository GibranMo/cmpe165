<?php
include('connect.php');
session_start();

$e_error = false;
$empty_error = false;
$password_error = false;
$similar_error = false;
$password_length = false;
$emailerror = false;

if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2']))
{
	$empty_error = true;
}
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$containsLetter  = preg_match('/[a-zA-Z]/',    $password);
$containsDigit   = preg_match('/\d/',          $password);
$container = $containsDigit && $containsLetter;
if(strlen($password) < 8)
{
	$password_length = true;
}
else if(strcmp($password, $password2) !== 0)
{
	$similar_error = true;
}
else if(!$container)
{
	$password_error = true;
}
$query = "select email from users where email = '$email' ";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{
	if($row['email'] == $email)
	{$e_error = true;}
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
	$emailerror = true;
}

?>
<!DOCTYPE HTML> 
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles/SearchBox.css">
		<link rel="stylesheet" type="text/css" href="styles/Navbar.css">
		<link rel="stylesheet" type="text/css" href="styles/registerbox.css">

		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>


	</head>

	<body> 
<div id="hmenu"> 
	
	<?php include("menu.php");?>
	<?if($empty_error):?>
	<p>Do not leave any fields blank. Please try to register again.</p>
	<?elseif($password_length):?>
	<p>You must have a password longer than 8 characters. Please try to register again.</p>
	<?elseif($emailerror):?>
	<p>Please enter a correct email address</p>
	<?elseif($similar_error):?>
	<p>You must enter the same password in both fields. Please try to register again.</p>
	<?elseif($password_error):?>
	<p>Your password must only contain numbers and letters and must have at least one of each.
	Please try to register again.</p>
	<?elseif($e_error):?>
	<p>That email is already taken. Please try again with a different one.</p>>
	<?else:?>
	<?php 
	$q = "INSERT INTO users(userName,password, email) values ('$username', '$password', '$email')";
	$res = mysqli_query($conn, $q);
	if (!$res)
        {
		die('Invalid query: ' . mysqli_error($conn));
	}
	echo "<p>Successfully added your new account</p>";	
	
	
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['pwrd'] = $_POST['password2'];
	
	
	header('Location: index.php');
	?>
	<?endif?>


     
</div>
</body>
</html>