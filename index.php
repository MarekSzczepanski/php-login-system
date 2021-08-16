<?php require_once('header.php'); ?>
    <form method="post" action="/php-login-system/register.php">
        <input type="text" name="name" placeholder="Your name" />
        <input type="email" name="email" placeholder="Your e-mail" />
        <input type="password" name="password" placeholder="Your password" />
        <input type="submit" name="register" value="Submit"/>
    </form>
<?php
    require_once('footer.php');
?>
