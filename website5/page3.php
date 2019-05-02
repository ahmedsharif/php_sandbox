<?php
    $user = ['name' => 'brad', 'email' => 'ahmed@gmail.com', 'age'=>35];

    // serialize data
    $user = serialize($user);

    setcookie('user', $user, time() + 86400);

    $user = unserialize($_COOKIE['user']);

    echo $user['name'];
?>