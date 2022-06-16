<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/topics.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content row" id="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-7 _title">Управление категориями</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/topics/create.php";?>" class=" btn">Создать</a>
                        </div>
                    </div>

                    <div class="posts col  mt-4">
                        
                        <div class="row title-table pb-2">
                            <div class="col-1"><span>ID</span></div>
                            <div class="col-4"><span>Название</span></div>
                            <div class="col-4"><span>Управление</span></div>
                        </div>
                        <?php foreach ($topics as $key => $topic): ?>
                            <div class="row admin_topics mt-4">
                                <div class="id col-1"><span><?=$key + 1; ?></span></div>
                                <div class="title col-4"><span><?=$topic['name']; ?></span></div>
                                <div class="manag col-4 row">
                                    <div class="red mb-3">
                                        <a href="<?= BASE_URL . "admin/topics/edit.php?id=" . $topic['id'];?>">Редактировать</a>
                                    </div>
                                    <div class="del mb-3">
                                        <a href="<?= BASE_URL . "admin/topics/edit.php?del_id=" . $topic['id'];?>">Удалить</a>
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