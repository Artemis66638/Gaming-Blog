<div class="main-content mt-4 pt-1 pb-1  rounded-2">
    <div class="cpl-md-12 col-12 comments">
        <div class="align-self-center err">
            <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
        </div>
        <h2 class="mt-0">Оставить комментарий</h2>
        <form action="<?=BASE_URL . "single_page.php?post=$page"?>" method="post">
        <input type="hidden" name="page" value="<?=$page; ?>">
            <input type="hidden" name="page" value="asdasd">
            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email адрес</label>
                <input name="email" type="email" class="contact-input" id="exampleFormControlInput1" placeholder="name@example.com">
            </div> -->
            <div class="mb-3">
                <textarea name="comment" class="contact-input" id="exampleFormControlTextarea1" placeholder="Напишите ваш отзыв" rows="4"></textarea>
            </div>
            <div class="mb-3 col-12">
                <button type="submit" name="goComment" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</div>

<div class="main-content mt-4 pb-2 rounded-2">
    <div class="cpl-md-12 col-12 comments">
        <?php if(count($comments) > 0): ?>
            <div class="row all-comments">
                <h2 class="col-12">Комментарии к записи</h2>
                <div class="comments">
                    <?php foreach($comments as $comment): ?>
                        <div class="one-comment col-12">
                            <span><i class="far fa-envelope"></i><?= $comment['username']  ?></span>
                            <span><i class="far fa-calendar-check"></i><?= $comment['created_date']  ?></span>

                            <div class="col-12 text">
                                <?=$comment['comment']  ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>