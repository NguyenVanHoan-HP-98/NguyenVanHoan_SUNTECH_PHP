<?php
    session_start();
    unset($_SESSION['user-login']);
    header('location: http://localhost/NguyenVanHoan_SUNTECH_PHP/Lesson6_Project1/login.php');


?>