<?php
    // контроллер
    session_start();

    $commentsForAdm = selectAdminComments('comments', 'users');

    $page = $_GET['post'];
    $username = '';
    $comment = '';
    $errMsg = [];
    $comments = [];

    // Удаление комментария
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        delete('comments', $id);
        header('location: ' . BASE_URL . 'admin/comments/index.php');
    }

    // АПДЕЙТ КОММЕНТАРИЯ
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
        $oneComment = selectOneComments('comments', 'users', $_GET['id']);
        $id =  $oneComment['id'];
        $username =  $oneComment['username'];
        $text1 = $oneComment['comment'];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_comment'])){
        $id =  $_POST['id'];
        $text = trim($_POST['comment']);

        if($text === ''){
            array_push($errMsg, "Комментарий не имеет содержимого текста");
        }elseif (mb_strlen($text, 'UTF8') < 1){
            array_push($errMsg, "Количество символов внутри комментария меньше 50");
        }else{
            $com = [
                'comment' => $text,
            ];

            $comment = update('comments', $id, $com);
            header('location: ' . BASE_URL . 'admin/comments/index.php');
        }
    }else{
        $text = trim($_POST['content']);
    }
?>