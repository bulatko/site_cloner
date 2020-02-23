<?php

require 'utils.php';

if($_POST['type'] == "login") {
    $loc = 'collaboration.php';
    sign_in();
}
else if($_POST['type'] == 'reg'){
    $email = $_POST['email'];
    sendConfimCode($email);
    $loc = 'confirm.php';
    sign_in();
}
else {
    $loc = 'index.php';
}

header("Location: $loc");

