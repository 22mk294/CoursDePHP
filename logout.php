<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION = [];

    session_destroy();

    header('Location: login.php');
} else {

    header('Location: index.php');
    exit();
}
