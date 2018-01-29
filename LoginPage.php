<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		*{
			text-align: center;
		}
	</style>
</head>

<body>
<form method="POST" action="authenticate.php">
	<p>UserName<input type="text" name="UserName" required=""></p>
	<p>Password<input type="password" name="Password" required=""></p>
	<p><input type="Submit" name="Submit" value="Login"></p>
	<p><a href="Register.php">
		<input type="Button" value="Register">
	</a></p>
</form>

</body>
</html>