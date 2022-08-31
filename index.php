<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
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

		background-color:tomato;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>



	<br>

	<h1>Hello!---<?php echo $user_data['user_name']; ?>----Welcome to Your Profile</h1>
	<br>

		<div id="box">

			<form  class="" action="pavankumarreddy99633@gmail.com" method="post" enctype="text/plain">
				<div style="font-size: 20px;margin: 10px;color:Black ;"><h2>Query Box</h2></div>
				<label for=""> Your Name</label>
				<input id="text" type="text" name="Name"><br><br>
				<!--<label for="">Password</label>
				<input id="text" type="password" name="password"><br><br>-->
				<label for="">Email Id</label><br>
				<input id="email" name="text" value=""><br><br>
				<label for="">Share Your Experience</label>
				<textarea name="Thoughts" rows="3" cols="30"></textarea>
				<!--<input id="button" type="submit" value="Signup"><br><br>
				<p>
					Already have an account ?
				</p>--><br><br>
				<input type="submit" name="" value="Contact Me">
				<h3><a href="logout.php">Logout</a></h3>
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
