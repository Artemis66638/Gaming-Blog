<?php  
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/users_commentaries.php";

?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content row" id="content_user">

            <!-- USER_PROFILE START -->
                <?php include "../../app/include/user-profile.php" ?>
            <!-- USER_PROFILE END -->

            <!-- MOBI;E-SIDEBAR_USER START -->
                <?php include "../../app/include/mobile-sidebar-user.php"; ?>
            <!-- MOBI;E-SIDEBAR_USER START -->

            <!-- MAIN_CONTENT START -->
                <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                    <div class="title">
                        <h2>Мои комментарии</h2>
                    </div>
                    
                    <div class="posts col mt-3">
                        
                        <div class="row title-table pb-2">
                            <div class="col-1"><span>ID</span></div>
                            <div class="col-4"><span>Текст</span></div>
                            <div class="col-3"><span>Автор</span></div>
                            <div class="col-4"><span>Управление</span></div>
                        </div>

                        <?php foreach ($commentsForUser as $key => $comment): ?>
                            <div class="row user_comments mt-4">
                                <div class="id col-1"><span><?=$comment['id']; ?></span></div>
                                <div class="title col-4"><span><?=mb_substr($comment['comment'], 0, 50, 'UTF-8'). '...'  ?></span></div>
                                <div class="author col-3"><span><?=$comment['username']; ?></span></div>
                                <div class="manag col-4 row">
                                    <div class="red mb-3">
                                        <a href="<?= BASE_URL . "user_profile/comments/edit.php?id=" . $comment['id'];?>">Редактировать</a>
                                    </div>
                                    <div class="del mb-3">
                                        <a href="<?= BASE_URL . "user_profile/comments/edit.php?delete_id=" . $comment['id'];?>">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <!-- MAIN_CONTENT END -->

            <!-- SIDEBAR_CONTENT START -->
                <?php include "../../app/include/sidebar-user.php"; ?>
            <!-- SIDEBAR_CONTENT END -->
            
        </div>
    </div>
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "../../app/include/footer.php";
    // -------- Fotter -------- //
?>