<?php 
    include "path.php";

    // -------- Header -------- //
    include "app/include/header.php";
    // -------- Header -------- //

    include "app/controllers/topics.php";

    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 5;
    $offset = $limit * ($page - 1);
    $total_pages = round(countRow('posts') / $limit, 1);

    $posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', 'topics', $limit, $offset);
    $topTopic = selectTopTopicFromPostsOnIndex('posts'); 
?>

<!-- CAROUSEL START-->
    <div class="container_slider container rounded-2">
        <div class="row">
            <h2 class="slider-title">Топ публикации</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php foreach ($topTopic as $key => $post): ?>
                <?php if($key == 0):?>
                    <div class="carousel-item active">
                <?php else: ?>
                    <div class="carousel-item">
                <?php endif; ?>
                        <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="d-block w-100">
                        <div class="carousel-caption-hack carousel-caption d-md-block">
                            <h5><a href="<?= BASE_URL . "single_page.php?post=" . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...'  ?></a></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- CAROUSEL END-->

<!-- MAIN START-->
    <div class="container mt-3 mb-3">
        <div class="content row" id="content">

        <!-- MAIN_CONTENT START -->
            <div class="main-content col-md-9 col-12 rounded-2" id="main-content">
                <div class="title row justify-content-between mb-3">
                    <h2 class="col-md-12">Последние публикации</h2>
                </div>

                <?php foreach ($posts as $post): ?>
                    <div class="all-post">
                        <div class="post row">
                            <div class="img col-12 col-md-4">
                            <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                            </div>
                            <div class="post_text col-12 col-md-8">
                                <h3> <a href="<?= BASE_URL . "single_page.php?post=" . $post['id'];?>"><?=substr($post['title'], 0, 30) . '...'  ?></a> </h3>
                                <div class="atribut">
                                    <span><i class="far fa-user"></i> <?=$post['username'];?></span>
                                    <span><i class="far fa-calendar"></i> <?=$post['created_date'];?></span>
                                    <span><i class="far fa-calendar"></i>Категория - <?=$post['name'];?></span>
                                </div>
                                
                                <div>
                                    <?=mb_substr($post['content'], 0 , 320, 'UTF-8'). '...'  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <?php include "app/include/pagination.php"; ?>
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