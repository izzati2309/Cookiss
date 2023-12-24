<?php include("connection.php");
	$user= $_GET['id'];
	$SQL = "select * from customer where email = '$user' ";
	
	//Run
	$run = mysqli_query($conn, $SQL);
	$row = mysqli_fetch_array($run);
?>

<html>
	<head>
	    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="totalVal.js"></script>
		<script type="text/javascript" src="select.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
		<body>
		<?php include("nav.php"); ?>
		<div align = "center" style="margin-top:18%">
			<h1>HOMEPAGE<h1>
			<h3>Welcome admin user, <?php echo $row['name']; ?></h3>
		</div>
			</form>
		</body>
</html>