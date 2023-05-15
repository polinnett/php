<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id_users" => $user['id_users'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        $userId = $user['id_users'];
        $check_sms = mysqli_query($connect, "SELECT * FROM `sms`"); 
        if (mysqli_num_rows($check_sms) > 0) {

            $sms = mysqli_fetch_assoc($check_sms);
    
            $_SESSION['sms'] = [
                "id_sms" => $sms['id_sms'],
                "id_users" => $sms['id_users'],
                "text" => $sms['text']
            ];

        $_SESSION['id_users'] = $user['id_users'];

        header('Location: ../profile.php');
        }

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<!-- <pre>
    <?php
        // print_r($check_user);
        // print_r($user);
    ?>
</pre> -->
