<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home_style.css">

</head>

<body>
     <div class="topnav">
        <a href="#About">Universal Institute of Technology</a>
        <a class="active" href="#home">Home</a>
        <a href="spotlight.php">Spotlight</a>
        <a href="#contact">Contact</a>
        <a  href="logout.php">Logout</a>
     </div> 
     <a href="#marks"> View Marks </a>
     

    

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>