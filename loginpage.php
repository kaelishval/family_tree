<!DOCTYPE html>
<html>
<head>
	<title>LOGIN"</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/logo.png" />
	<style>
	img {
    padding-top: 10px;
	height: 300px;
	/* text-align: 90px; */
	padding-left: 130px;
}
</style>
</head>
<body>
     <form action="login.php" method="post">
	<img src="assets/logo.png" alt="seed_logo" class="hidden-xs hidden-sm">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
