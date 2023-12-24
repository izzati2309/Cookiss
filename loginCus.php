<?php
	include("connection.php");
	if (empty($_POST['submit'])){
?>


<html>
	<link rel="stylesheet" type="text/css" href="style.css">
    <body>
	<?php include("nav.php"); ?>
        <div align="center">
		<img src="logo.png" alt="cookiss logo" style="width:200px;height:200px;">
			<p><h1>Welcome to Cookiss!</h1></p>
			<p><h3>To continue shopping, enter email and your password</h3></p>
            <fieldset style="width:100px" align="left">
                <legend style="font-family:	Monaco">Log in</legend>
               
                <form method="post" action="loginCus.php">
                    <table align="center">
                        <tr><td>Email: </td><td><input type="text" name="email" required></td></tr>
                        <tr><td>Password: </td><td><input type="password" name="password" required></td></tr>
                        <tr><td colspan="2" align="right"><input type="submit" name="submit"></td></tr>
                    </table>
					<p align="center" style="font-size: 16px;font-family:Monaco">Click <a href="register.php">here</a> if you're not registered</p>
                </form>
            </fieldset>
        </div>
    </body>
</html>

<?php } else {
	$user= $_POST['email'];
	$pass= $_POST['password'];
	//query
	$SQL = "select * from customer where
	email = '$user' AND password = '$pass'";
	//run
	$run = mysqli_query($conn, $SQL);
	$row = mysqli_fetch_array($run);

	if(!empty($row['email'])){
		header("Location: index.php?id=".$user."");
	}else{
		echo "<script>alert('You have entered a wrong email or password!');
				window.location='loginCus.php';</script>";
	}

} ?>