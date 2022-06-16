<div class="sidebar_hack sidebar sidebar_content col-md-3 col-12">
    <div class="sidebar_back rounded-2" id="sidebar_back">

        <div class="section search">

            <div class="title row justify-content-between mb-2">
                <h3 class="col-md-7">Поиск</h3>
                <div class="button col-md-2">
                    <ul class="sidebar_menu col-md-1">
                        <li><div class="btn_sidebar_menu"><a><span></span></a></div></li>
                    </ul>
                </div>
            </div>
            <form action="search.php" method="post" class="form_search">
                    <input type="text" name="search-term" class="text-input" placeholder="Поиск">
            </form>
        </div>

        <div class="section topics pt-4">
            <h3>Категории</h3>
            <ul>
                <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                        <p></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>