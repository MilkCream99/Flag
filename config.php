<?php
session_start();


$valid_username = "admin";
$valid_password = "password";

if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 0;
}
?>