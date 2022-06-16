<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //


    include SITE_ROOT . "/app/controllers/users.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content row" id="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-8 title_con_user">Управление пользователями</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/users/create.php";?>" class=" btn">Создать</a>
                        </div>
                    </div>


                    <div class="posts col mt-4">
                        
                        <div class="row title-table pb-2">
                            <div class="col-1"><span>ID</span></div>
                            <div class="col-3"><span>Логин</span></div>
                            <div class="col-3"><span>Email</span></div>
                            <div class="col-2"><span>Роль</span></div>
                            <div class="col-3"><span>Управление</span></div>
                        </div>

                        <?php foreach ($users as $key => $user): ?>
                            <div class="row admin_user mt-4">
                                <div class="id col-1"><span><?=$user['id'];?></span></div>
                                <div class="username col-3"><span><?=$user['username'];?></span></div>
                                <div class="email col-3"><span><?= mb_substr($user['email'], 0, 10, 'UTF-8'). '...'?></span></div>
                                <?php if ($user['admin'] == 1): ?>
                                    <div class="status col-2"><span>admin</span></div>
                                <?php else: ?>
                                    <div class="status col-2"><span>user</span></div>
                                <? endif; ?>
                                <div class="manag col-3 row">
                                    <div class="red mb-3">
                                        <a href="<?= BASE_URL . "admin/users/edit.php?edit_id=" . $user['id']; ?>">Редактировать</a>
                                    </div>
                                    <div class="del mb-3">
                                        <a href="<?= BASE_URL . "admin/users/index.php?delete_id=" . $user['id']; ?>">Удалить</a>
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