<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/admin_posts.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content row" id="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-7">Управление постами</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "/admin/posts/create_post.php";?>" class=" btn">Создать</a>
                        </div>
                    </div>

                    <div class="posts col  mt-4">
                        
                        <div class="row title-table pb-2">
                            <div class="col-1"><span>ID</span></div>
                            <div class="col-4"><span>Название</span></div>
                            <div class="col-3"><span>Автор</span></div>
                            <div class="col-4"><span>Управление</span></div>
                        </div>
                        <?php foreach ($postsAdm as $key => $post): ?>
                            <div class="row post admin_post mt-4">
                                <div class="id col-1"><span><?=$key + 1; ?></span></div>
                                <div class="title col-4"><span><?=mb_substr($post['title'], 0, 20, 'UTF-8'). '...'  ?></span></div>
                                <div class="author col-3"><span><?=$post['username']; ?></span></div>
                                <div class="manag col-4 row">
                                    <div class="red mb-3">
                                        <a href="<?= BASE_URL . "/admin/posts/edit_post.php?id=" . $post['id'];?>">Редактировать</a>
                                    </div>
                                    <div class="del mb-3">
                                        <a href="<?= BASE_URL . "/admin/posts/edit_post.php?delete_id=" . $post['id'];?>">Удалить</a>
                                    </div>
                                    <div class="status mb-3">
                                        <?php if ($post['status']): ?>
                                            <a href="<?= BASE_URL . "/admin/posts/edit_post.php?publish=0&pub_id=" . $post['id'];?>">В черновик</a>
                                        <?php else: ?>
                                            <a href="<?= BASE_URL . "/admin/posts/edit_post.php?publish=1&pub_id=" . $post['id'];?>">Опубликовать</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            <!-- MAIN_CONTENT END -->

            <!-- SIDEBAR_CONTENT START -->
                <?php include "../../app/include/sidebar-admin.php"; ?>
            <!-- SIDEBAR_CONTENT END -->

        </div>
    </div>
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "../../app/include/footer.php";
    // -------- Fotter -------- //
?>