<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="wlc_style.css">

</head>

<body>
        <img src="ic.png" class="center">
        <h1> Universal Institute of Technology </h1>
        <h2> UTOP PORTAL </h2>
        
        <a href="auth.php">Login</a>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

</body>

</html>
