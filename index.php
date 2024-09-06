<?php
    include_once 'config/settings-configuration.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO ACTIVITY 1</title>
    <<link rel="stylesheet" href="src/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="column">
            <h1> SIGN IN </h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="btn-signin"> SIGN IN </button>
            </form>
        </div>

        <div class="column">
            <h1> REGISTRATION </h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="text" name="username" placeholder="Enter Username" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit" name="btn-signup"> SIGN UP </button>
            </form>
        </div>
    </div>
</body>
</html>
