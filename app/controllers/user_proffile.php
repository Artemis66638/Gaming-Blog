<?php
    include_once SITE_ROOT . "/app/database/db.php";

    $errMsg = [];

    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
        $user = selectOne('users', ['id' => $_GET['edit_id']]);

        $id =  $user['id'];
        $admin =  $user['admin'];
        $username = $user['username'];
        $email = $user['email'];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){
        $user = selectOne('users', ['id' => $_GET['edit_id']]);

        $id =  $user['id'];
        $mail = trim($_POST['mail']);
        $login = trim($_POST['login']);
        $passF = trim($_POST['pass-first']);
        $passS = trim($_POST['pass-second']);
        $psssN = trim($_POST['pass-new']);
        $admin = isset($_POST['admin']) ? 1 : 0;

        if($login === ''){
            array_push($errMsg, "Не все поля заполнены!");
        }elseif (mb_strlen($login, 'UTF8') < 2){
            array_push($errMsg, "Логин должен быть более 2-х символов");
        }elseif ($passF !== $passS) {
            array_push($errMsg, "Пароли в обеих полях должны соответствовать!");
        }else{
            $pass = password_hash($psssN, PASSWORD_DEFAULT);
            if (isset($_SESSION['admin'])) $admin = 1;
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $mail,
                'password' => $pass
            ];
            $user = update('users', $_SESSION['id'], $user);
            header('location: ' . BASE_URL . 'user_profile/posts/index.php');
        }
    }else{
        $id =  $user['id'];
        $admin =  $user['admin'];
        $username = $user['username'];
        $email = $user['email'];
    }
?>