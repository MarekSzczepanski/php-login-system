<?php

require_once('header.php');

if (empty($_POST['name'])) {
    echo "Choose your name";
}
elseif (empty($_POST['email'])) {
    echo "Choose your e-mail";
}
elseif (empty($_POST['password'])) {
    echo "Choose your password";
}
else {
    require_once('db.php');
}

require_once('footer.php');