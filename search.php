<?php 
    include "path.php";

    // -------- Header -------- //
    include "app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/topics.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-term'])){
        $posts = seacrhInTitileAndContent($_POST['search-term'], 'posts', 'users', 'topics');
    }

?> 

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content row" id="content">

        <!-- MAIN_CONTENT START -->
            <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                <h2>Результат поиска</h2>

                <?php foreach ($posts as $post): ?>
                    <div class="all-post">
                        <div class="post row">
                            <div class="img col-12 col-md-4">
                                <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                            </div>
                            <div class="post_text col-12 col-md-8">
                                <h3> <a href="<?=BASE_URL . 'single_page.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...'  ?></a> </h3>
                                <div class="atribut">
                                    <span><i class="far fa-user"></i><?=$post['username'];?></span>
                                    <span><i class="far fa-calendar"></i><?=$post['created_date'];?></span>
                                    <span><i class="fa-solid fa-diamond"></i> Категория - <?=$post['name']; ?></span>
                                </div>
                                
                                <p class="preview-text">
                                    <?=mb_substr($post['content'], 0, 55, 'UTF-8'). '...'  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <!-- MAIN_CONTENT END -->

        <!-- SIDEBAR_CONTENT START -->
            <?php include "app/include/sidebar_content.php"; ?>
        <!-- SIDEBAR_CONTENT END -->

        </div>
    </div>
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "app/include/footer.php";
    // -------- Fotter -------- //
?>