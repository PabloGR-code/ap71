<?php

    session_start();

    $_SESSION['color'] = $_POST['color'];

    header('Location: index.php')
    exit();