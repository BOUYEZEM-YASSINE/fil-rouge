<?php
    session_start();
    $_SESSION['golden_user'] = '';
    header("Location:home.php");
?>