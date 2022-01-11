<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="spotlight_style.css">

</head>

<body>
     <div class="topnav">
        <a href="#About">Universal Institute of Technology</a>
        <a href="home.php">Home</a>
        <a class ="active" href="#news">Spotlight</a>
        <a href="#contact">Contact</a>
        <a  href="logout.php">Logout</a>
     </div> 
     <ul>
        <li> Wintersem 2021-2022 Registeration</li>
        <li> Documents Required </li>
        <li> Hostel Re opening Circular </li>
     </ul>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>