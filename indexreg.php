<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/stylelog.css">
</head>
<body>
     <form action="register.php" method="post">
     	<h2>Register</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        
         <label>name </label>
     	<input type="text" name="fname" placeholder="Name"><br>

     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
        
        <label>Phone number</label>
     	<input type="text" name="phone" placeholder="Phone Number"><br>
       
     	<button type="submit">Register</button>
		<a href="index.php"> Back!</a>
     </form>
</body>
</html>