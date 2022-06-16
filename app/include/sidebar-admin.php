<div class="sidebar_hack sidebar sidebar_admin col-md-3 col-12">
    <div class="sidebar_back rounded-2" id="sidebar_back">
        <div class="title justify-content-between mb-2 pt-3 pb-2 pe-3" id="title">
            <h3 class="col-md-7 ps-3 pt-2">Меню</h3>
            <div class="button col-md-2">
                <ul class="sidebar_menu col-md-1">
                    <li><div class="btn_sidebar_menu"><a><span></span></a></div></li>
                </ul>
            </div>
        </div>

        <div class="section topics pt-0">
            <ul>
                <li id="admin_posts" class="">
                    <a href="<?= BASE_URL . "admin/posts/index.php"?>"">Посты</a>
                    <p></p>
                </li>
                <li id="topics" class="">
                    <a href="<?= BASE_URL . "admin/topics/index.php"?>">Категории</a>
                    <p></p>
                </li>
                <li id="users" class="">
                    <a href="<?= BASE_URL . "admin/users/index.php"?>">Пользователи</a>
                    <p></p>
                </li>
                <li id="admin_comments" class="">
                    <a href="<?= BASE_URL . "admin/comments/index.php"?>">Комментарии</a>
                    <p></p>
                </li>
            </ul>
        </div>
    </div>
</div>