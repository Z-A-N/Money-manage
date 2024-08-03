<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Clear both sets of data
    $_SESSION['data'] = [];
    $_SESSION['data2'] = [];
    $_SESSION['saldo'] = 0;
    header('Location: index.php');
    exit();
}
?>
