<?php 
    include "../path.php";

    // -------- Header -------- //
    include "../app/include/header.php";
    // -------- Header -------- //

    include SITE_ROOT . "/app/controllers/users.php";
?>


<!-- MAIN START-->
        <!-- MAIN_CONTENT START -->
        <div class="container mb-3 mt-3">
            <div class="reg_form row justify-content-center">

                <form class="row justify-content-center rounded-2 col-md-4" id="log" method="post" action="log.php">
                    <h2 class="col align-self-center">Авторизация</h2>

                    <div class="align-self-center err">
                        <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-2 align-self-center">
                        <label for="formGroupExampleInput" class="form-label">Почта(email)</label>
                        <input name="mail" value="" type="email" class="contact-input rounded-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-3 align-self-center">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="password" type="password" class="contact-input rounded-2" id="exampleInputPassword1" placeholder="Введите пароль" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-3 row">
                        <button type="submit" name="button-log" class="btn btn_color mb-2">Войти</button>
                        <a href="<?= BASE_URL . "user_profile/reg.php"?>" class="col col-md-12 mt-2">Зарегистрироваться</a>
                    </div>
                </form>

            </div>
        </div>
        <!-- MAIN_CONTENT END -->
<!-- MAIN END-->

<?php 
    // -------- Fotter -------- //
    include "../app/include/footer.php";
    // -------- Fotter -------- //
?>