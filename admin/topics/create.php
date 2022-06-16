<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/topics.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content pb-1 rounded-2" style="height: 100%;">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-8 title_crete_topic">Создать категорию</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/topics/index.php";?>" class=" btn">Назад</a>
                        </div>
                    </div>


                    <div class="row add-post">
                        <div class="col-12 col-md-12 err">
                            <p><?=$errMsg?></p>
                        </div>

                        <form action="create.php" method="post" enctype="multipart/form-data">
                            <label for="name" class="form-label">Заголовок категории</label>
                            <input type="text" name="name" class="text-input rounded-2" id="name-topics" placeholder="Заголовок категории" require>

                            <div class="block_btn pt-2 mt-3">
                                <button name="topic-create" type="submit" class="btn p-3">
                                    <i class="fa-solid fa-plus"></i> Создать категорию
                                </button>
                                <div class="btn p-3" id="btn_clear">
                                    <i class="fa-solid fa-trash"></i> Очистить
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!-- MAIN_CONTENT END -->
        </div>
    </div>
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "../../app/include/footer.php";
    // -------- Fotter -------- //
?>