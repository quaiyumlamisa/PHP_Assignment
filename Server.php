<?php
session_start();


$username = "";

$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'user');


if (isset($_POST['reg_user']))
 {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  
  if (empty($username)) { array_push($errors, "Username is required"); }
  
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2)
   {
	     array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM userdata WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

   
  }

 
  if (count($errors) == 0) {
  	$password = md5($password1);
  	$query = "INSERT INTO userdata (username, password) 
  			  VALUES('$username',  '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>