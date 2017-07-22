<?php
session_start();

if($_SESSION['logged'] == false) {
	session_destroy();

	header("location: login.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Admin | Coderill</title>

		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<!-- aside start -->
		<aside>
			<figure>
				<img src="img/profile/<?php echo $_SESSION['username']; ?>.png" alt="profile pic not found!">
				<figcaption>&nbsp;</figcaption>
			</figure>

			<nav>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="test.php">Test Page</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</aside>
		<!-- aside end -->
