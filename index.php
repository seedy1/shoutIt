<?php include 'database.php' ?>
<?php 
	//code for select
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($conn, $query)
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>say it </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT RN</h1>
		</header>

		<div id="shouts">
			<ul>

			<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
					<li class="shout"> <span> <?php echo $row['time']; ?> - </span> <strong><?php echo $row['user']; ?></strong> :<?php echo $row['message'] ?> </li>
			<?php endwhile; ?>
			</ul>
		</div>

		<div id="input">
		<!-- <?php if (isset($_GET['err'])) :?>
			<div class="error"><?php echo $_GET['err']; ?></div>
		<?php endif ?> -->
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="enter your name">
				<input type="text" name="message" placeholder="enter message here">
					<br>
					<input type="submit" name="submit" value="send message" class="btn">
			</form>
		</div>

	</div>
</body>
</html>
