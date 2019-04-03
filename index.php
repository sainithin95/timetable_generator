<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <?php echo $_SESSION['subjects']; ?></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
	<div class="header">
		<form action="subject.php" method="post">

			<div class="input-group">
				<label>subject name :</label>
				<input type="text" name="subject" >
			</div>

			<div class="input-group">
				<button type="submit" class="btn" name="add_subject">add</button>
			</div>

		</form>
	</div>
	<div class="header">
		<table border="1px">
			<tr>
				<td>djhsj</td>
			</tr>
			<tr>
				<td>hsjh</td>
			</tr>
		</table>
	</div>

</body>
</html>
