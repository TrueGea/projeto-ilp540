<?php
    if (!isset($_SESSION)) session_start();

    if (!isset($_SESSION['index'])) {

        session_destroy();

        header("Location: login.php"); exit;
    }

?>