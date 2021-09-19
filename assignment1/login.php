
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script charset="utf-8" ></script>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <form action="authenticate.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo ($_GET['error']); ?> </p>
        <?php } ?>
        <label>User Name</label>
        <input type= "text" name="username" placeholder= "User Name">

        <label>Password</label>
        <input type= "password" name="password" placeholder= "Password">

        <button type="submit">Login</button>
    </form>
</body>
</html>