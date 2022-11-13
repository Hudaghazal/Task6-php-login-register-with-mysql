<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME</title>
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container " >
     <div class="d-flex justify-content-between  h-hed">
    <h1 class=" h-txt">Hello <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php" class="text-decoration-none h-lnk">Logout</a>
     </div>
    <div id="c-body" class="hcard">

    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
     <script src="./assets/js/index.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>