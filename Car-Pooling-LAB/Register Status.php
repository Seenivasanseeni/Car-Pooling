<?php 
	try{
		$UserName=$_POST["UserName"];
		$Password=$_POST["Password"];
		$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
		$sta=$conn->prepare("Select * from Users where UserName like \"$UserName\"");
		$sta->execute();
		while ($row = $sta->fetch()) {
			throw new Exception("Account Exists", 1);
		}

		#insert the account details
		$sta=$conn->prepare("insert into Users values('$UserName','$Password')");
		$sta->execute();
		echo "<br>Account Successfully Registered";
		echo "<br>Click here to <a href='LoginPage.php'>Login</a>.";
	}
	catch(Exception $e){
		print("Account Already exists");
		echo "<br><a href='Register.php'>Try Again</a>";
	}
?>
