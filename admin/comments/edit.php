<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/admin_commentaries.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content pb-1 rounded-2">
                    <div class="title row justify-content-between" id="title_button">
                        <h2 class="col-md-8 title_edit_comments">Редактировать комментрайи</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/comments/index.php";?>" class=" btn">Назад</a>
                        </div>
                    </div>


                    <div class="row add-post">
                        <div class="align-self-center err">
                            <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
                        </div>

                        <form action="edit.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$id; ?>">
                            <label for="author" class="form-label">Автор</label>
                            <input type="text"  value="<?=$username?>" name="author" class="text-input rounded-2 mb-4" id="author" disabled value="adasda">

                            <label for="name-topics" class="form-label">Коментарий</label>
                            <textarea name="comment" class="text-input rounded-2" id="exampleFormControlTextarea1" placeholder="Комментарий" rows="4" require><?=$text1?></textarea>
                            
                            <div class="block_btn pt-2 mt-3">
                                <button name="edit_comment" type="submit" class="btn p-3">
                                    <i class="fa-solid fa-pen-to-square"></i> Сохранить
                                </button>
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