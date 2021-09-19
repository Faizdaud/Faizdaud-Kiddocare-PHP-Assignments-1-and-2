<?php 

session_start();

if (isset($_SESSION["username"])) {

    echo '<script>';
    echo 'console.log('. $_SESSION["username"] .')';
    echo '</script>';


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script charset="utf-8" ></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
   
        <form action="logout.php">
        <h2>LOGIN Sucess!</h2>
        <h3>Hi, <?php echo $_SESSION["username"]; ?> </h3>

        <!-- <a href="login.php">Logout</a> -->
        <button type="submit">Logout</button>
        <?php session_unset();
         session_destroy(); ?>
    </form>
</body>
</html

<?php
} else {
    header('Location: login.php');
    exit();
    
}


?>