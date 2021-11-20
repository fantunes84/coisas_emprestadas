<?php
session_start();
if (!$_SESSION['usuario_email']){
    header("Location: login.php");
    exit();
}