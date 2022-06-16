<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/admin_posts.php";
?>
<style>
    .textFocus:empty:not(:focus)::before {
        content: attr(data-placeholder);
        opacity: .3;
    }
</style>
<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content pb-1 rounded-2">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-4 title_create">Создать пост</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/posts/index.php";?>" class=" btn">Назад</a>
                        </div>
                    </div>


                    <div class="row add-post contnet_post">
                        <div class="align-self-center err">
                            <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
                        </div>

                        <form action="create_post.php" method="post" enctype="multipart/form-data">
                            <label for="title" class="form-label">Заголовок поста</label>
                            <input type="text" name="title" class="text-input rounded-2" id="title" placeholder="Заголовок поста" require>

                            <label class="form-label mt-2">Ваше текст</label>
                            <textarea id="textPost" name="textPost" style="display: none;" title="Текст"></textarea>
                            
                            <div class="toolbar-hack btn-toolbar ps-1" role="toolbar">
                                <div id="p" onclick="myFunction('p')" class="btn mt-1 mb-1" title="Текст"><i class="fa-solid fa-t"></i></div>
                                <div id="h2" onclick="myFunction('h2')" class="btn mt-1 mb-1" title="Заголовок"><i class="fa-solid fa-heading"></i></div>
                                <div id="hr" onclick="myFunction('hr')" class="btn mt-1 mb-1" title="Разделение"><i class="fa-solid fa-minus"></i></div>
                                <div id="blockquote" onclick="myFunction('blockquote')" class="btn mt-1 mb-1" title="Цитата"><i class="fa-solid fa-quote-left"></i></div>
                                <div id="ul" onclick="myFunction('ul')" class="btn mt-1 mb-1" title="Список"><i class="fa-solid fa-list"></i></div>
                            </div>
                            <div id="contents" class="contents mb-0" contenteditable="true">
                                <p class="text_content textFocus _active mt-2 mb-2" data-placeholder="Текст"></P>
                            </div>

                            <input name="img" type="file"  class="file-input form-control rounded-2 mt-3" id="inputGroupFile02" title="Загрузить картинку">
                            <h2>Прикрепите картинку (до 5МБ)</h2>

                            <div class="select mt-4">
                                 <select name="topic" class="form-select" aria-label="label for the select" require>
                                 <?php foreach ($topics as $key => $topic): ?>
                                        <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                           

                            <div class="form-check mt-4 ms-1">
                                <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">Опубликовать</label>
                            </div>

                            <div class="block_btn pt-2 mt-3">
                                <button name="add_post" onclick="exportText()" type="submit" class="btn p-3">
                                    <i class="fa-solid fa-plus"></i> Создать пост
                                </button>
                                <div  class="btn p-3" id="btn_clear">
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

<script src="<?= BASE_URL . "assets/js/create-post.js"?>"></script>
<?php 
    // -------- Fotter -------- //
    include "../../app/include/footer.php";
    // -------- Fotter -------- //
?>