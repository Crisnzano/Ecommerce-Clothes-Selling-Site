<!DOCTYPE html>
<html>
<head>
	<title>Log in Page</title>
	<link rel="stylesheet" type="text/css" href="login1.css">
	<link rel="stylesheet" href="css3\font-awesome.min.css">
</head>
<body>
		<form action="process_login.php" method="post">
			<h2>Login To Continue </h2>
			<?php if (isset($_GET ['error'])) {
				?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php }?>
			
			<label>User Email</label>
				<input type ="text" name="email" placeholder="Enter Your Email"/><br>
			<label>User Password</label>
					<input type="password" name="password" placeholder="Enter Your Password"/><br>
				<button type="submit" name="submit" value="login" class="btn-login"/>Login</button> 
			</form>
	</body>
	</html>