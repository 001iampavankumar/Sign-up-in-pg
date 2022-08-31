<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color:brown;
		border: none;
	}

	#box{

		background-color: orange;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: purple;"><h1><strong>Sign Up Details</strong></h1></div>
			<label for="">Name</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label for="">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>
			<p>
				Already have an account ?
			</p>
			<a href="login.php">Login</a><br><br>
		</form>
	</div>
	<footer>
		<p>
			<strong>Author :</strong>K Pavan Kumar Reddy</p>
		<p><strong>Email Id:</strong>pavankumarreddy99633@gmail.com
		</p>
	</footer>


</body>
</html>
