<?php
session_start();


$list_user = [
    [
        'username' => 'fatih',
        'password' => '12345'
    ],
    [
        'username' => 'admin',
        'password' => 'admin'
    ]
];


$user = [
    'username' => isset($_POST['username']) ? $_POST['username'] : '',
    'password' => isset($_POST['password']) ? $_POST['password'] : '',
];

$not_found = true;

foreach ($list_user as $key => $registered_user) {
   
    if ($registered_user['username'] == $user['username'] && $registered_user['password'] == $user['password']) {
        $_SESSION['login'] = true;
        $_SESSION['username'] =  $user['username'];
        $_SESSION['message']  = 'Berhasil login ke dalam sistem.';
        $not_found = false;
        header("Location: index.php");
        break;
    }
}

if ($not_found) {
    $_SESSION['error'] = 'Username atau password salah';
    header("Location: login.php");
}
