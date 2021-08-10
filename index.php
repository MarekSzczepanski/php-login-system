<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
</head>
<body>
    <form method="post" action="/register.php" name="register">
        <input type="text" name="name" placeholder="Your name" />
        <input type="email" name="email" placeholder="Your e-mail" />
        <input type="password" name="password" placeholder="Your password" />
        <input type="submit" name="submit" value="Submit"/>
    </form>
    <?php
        echo "echo test";
    ?>
</body>
</html>