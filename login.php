<?php
include("conn.php");
$msg = null;

if(isset($_POST['form'])) {
	$uname = $_POST['uname'];
	$upass = $_POST['upass'];

	if($uname == "" && $upass == "") {
		$msg = '<div class="error"><p>Empty Text Box</p></div>';
	} else {
		$selectdata = mysql_query("select username, password, status from admin where username='$uname' && password='$upass'");
		$getdata = mysql_fetch_assoc($selectdata);

		if(count($getdata) > 1) {
			session_start();

			$_SESSION['data'] = $getdata;
			$_SESSION['username'] = $getdata['username'];
			$_SESSION['password'] = $getdata['password'];
			$_SESSION['logged'] = true;

			header('Location: dashboard.php');
		} else {
			$msg = '<div class="error"><p>Wrong Username or password</p></div>';
		}
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Login | System</title>

		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div><?php echo $msg; ?></div>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="hidden" name="form" value="somedata">

			<p>
				<label for="uname">Username:</label><br>
				<input type="text" name="uname" id="uname" required>
			</p>

			<p>
				<label for="upass">Password:</label><br>
				<input type="password" name="upass" id="upass" required>
			</p>

			<p>
				<input type="submit" name="login" value="Login">
			</p>
		</form>

		<article class="">
			<h4>Default Access</h4>
			<p>Username: <strong>superadmin</strong></p>
			<p>Password: <strong>superadmin</strong></p>
		</article>

	</body>
</html>
