<?php
session_start();
if (!$_SESSION['usuarioEmail']){
    header("Location: login.php");
    exit();
}