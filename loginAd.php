<?php
	include("connection.php");
	
	if(isset($_POST['username'])) {
		$sql = "SELECT * FROM admin WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$num = $query -> num_rows;
		
		if($num == 1) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['name'] = $row['name'];
			
			if(!empty($row['email'])){
				header("Location: homeAD.php");
			}else{
				echo "<script>alert('You have entered a wrong email or password!');
					window.location='loginAd.php';</script>";
			}
		}
	}
?>


<html>
	<link rel="stylesheet" type="text/css" href="style.css">
    <body>
	<?php include("nav.php"); ?>
        <div align="center">
		<img src="logo.png" alt="cookiss logo" style="width:200px;height:200px;">
			<p><h1>Hi, Admin!</h1></p>
			<p><h3>To login, enter username and your password</h3></p>
            <fieldset style="width:100px" align="left">
                <legend style="font-family:	Monaco">Log in</legend>
               
                <form method="post" action="login.php">
                    <table align="center">
                        <tr><td>Username: </td><td><input type="text" name="username" required></td></tr>
                        <tr><td>Password: </td><td><input type="password" name="password" required></td></tr>
                        <tr><td colspan="2" align="right"><input type="submit"></td></tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </body>
</html>