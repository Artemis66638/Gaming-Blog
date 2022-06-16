<?php
    include_once SITE_ROOT . "/app/database/db.php";

    $errMsg = '';
    $id = '';
    $name = '';

    $topics = selectAll('topics');


    // Код для формы создания категории
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){
        $name = trim($_POST['name']);

        if($name === ''){
            $errMsg = "Поле заголовка категории не заполнена!";
        }elseif (mb_strlen($name, 'UTF8') < 2){
            $errMsg = "Категория должна быть более 2-х символов";
        }else{
            $existence = selectOne('topics', ['name' => $name]);
            if($existence['name'] === $name){
                $errMsg = "Такая категория уже есть в базе";
            }else{
                $topic = [
                    'name' => $name,
                ];
                $id = insert('topics', $topic);
                $topic = selectOne('topics', ['id' => $id] );
                header('location: ' . BASE_URL . 'admin/topics/index.php');
            }
        }
    }else{
        $name = '';
    }


    // Апдейт категории
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
        $id = $_GET['id'];
        $topic = selectOne('topics', ['id' => $id]);
        $id = $topic['id'];
        $name = $topic['name'];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
        $name = trim($_POST['name']);

        if($name === ''){
            $errMsg = "Поле заголовка категории не заполнена!";
        }elseif (mb_strlen($name, 'UTF8') < 2){
            $errMsg = "Категория должна быть более 2-х символов";
        }else{
            $topic = [
                'name' => $name,
            ];
            $id = $_POST['id'];
            $topic_id = update('topics', $id, $topic);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }

    // Удаление категории
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
        $id = $_GET['del_id'];
        delete('topics', $id);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
?>