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

    $username = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);

    $sql = "INSERT INTO users (username, email, pass) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement prepare failed";
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo $username;
}

require_once('footer.php');