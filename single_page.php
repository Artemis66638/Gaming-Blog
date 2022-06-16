<?php 
    include "path.php";

    // -------- Header -------- //
    include "app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/users_commentaries.php";

    $post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);
    $topic = selectPostFromPostsWithUsersOnSingleTopic('posts', 'topics', $_GET['post']);

    $post += $topic;
?>

<!-- CAROUSEL START-->
<div class="container">
    <div class="content">
        <!-- Main Content -->
        <div class="main-content rounded-2">
            <h2 class="pt-4 mt-0"><?= $post['title']; ?></h2>

            <div class="single_post row">
                <div class="img col-12">
                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                </div>
                <div class="atribut">
                    <i class="far fa-user"></i><p><?=$post['username'];?></p>
                    <i class="far fa-calendar"></i><p><?=$post['created_date'];?></p>
                    <i class="far fa-calendar"></i><p>Категория - <?= $post['name']?></p>
                </div>
                <div class="single_post_text col-12 pb-2">
                    <?php echo $post['content'];?>
                </div>
            </div>
        </div>

        <!-- COMMENTS START  --->
        <?php include("app/include/comments.php"); ?>
        <!-- COMMENTS END  --->



    </div>
</div>
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "app/include/footer.php";
    // -------- Fotter -------- //
?>