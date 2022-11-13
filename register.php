<?php 
session_start(); 
include "conn.php";

if (isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['password'])  && isset($_POST['phone']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $fname = validate($_POST['fname']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$phone = validate($_POST['phone']);

	if (empty($uname)) {
		header("Location: indexreg.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexreg.php?error=Password is required");
	    exit();
	}else if(empty($fname)){
        header("Location: indexreg.php?error=Name is required");
	    exit();
	}else if(empty($phone)){
        header("Location: indexreg.php?error=Phone is required");
	    exit();
	}else{
		
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass' AND name='$fname' AND phone='$phone'";

		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			header(
                "Location: indexreg.php?error=It's already exists" );
				exit();

		}else{ 

				$sql = "INSERT INTO users (fname ,username,password,phone)  VALUES ('$fname','$uname','$pass','$phone') ";
				$result = mysqli_query($conn, $sql);
				if ($result===1) {
					header("Location:home.php");
					exit();
				}

			}
			
		
	}
	
}else{
	header("Location: indexreg.php");
	exit();
}