<?php
    // контроллер
    session_start();
    include_once SITE_ROOT . "/app/database/db.php";

    $commentsForUser = selectAllUserComments('comments', 'users', $_SESSION['id']);

    $page = $_GET['post'];
    $username = '';
    $comment = '';
    $errMsg = [];
    $comments = [];


    // Код для формы создания комментария
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])){

        $id_user = $_SESSION['id'];
        $comment = trim($_POST['comment']);


        if($comment === ''){
            array_push($errMsg, "Не все поля заполнены!");
        }elseif (mb_strlen($comment, 'UTF8') < 0){
            array_push($errMsg, "Комментарий должен быть длинее 0 символов");
        }else{

            $comment = [
                'page' => $page,
                'id_user' => $id_user,
                'comment' => $comment
            ];

            $comment = insert('comments', $comment);

            header('location: ' . BASE_URL . 'single_page.php?post=' . $page);

        }
    }else{
        $email = '';
        $comment = '';
    }
    
    $comments = selectAllDesc('comments', 'users', ['page' => $page] );


    // Удаление комментария
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        delete('comments', $id);
        header('location: ' . BASE_URL . 'user_profile/comments/index.php');
    }

    // АПДЕЙТ комментар
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
        $oneComment = selectOneComments('comments', 'users', $_GET['id']);
        $id =  $oneComment['id'];
        $username =  $oneComment['username'];
        $text1 = $oneComment['comment'];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_comment'])){
        $id =  $_POST['id'];
        $text = trim($_POST['content']);

        if($text === ''){
            array_push($errMsg, "Комментарий не имеет содержимого текста");
        }elseif (mb_strlen($text, 'UTF8') < 50){
            array_push($errMsg, "Количество символов внутри комментария меньше 50");
        }else{
            $com = [
                'comment' => $text,
            ];

            $comment = update('comments', $id, $com);
            header('location: ' . BASE_URL . 'user_profile/comments/index.php');
        }
    }else{
        $text = trim($_POST['content']);
    }
?>