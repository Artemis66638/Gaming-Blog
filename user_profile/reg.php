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

                <form class="row justify-content-center col-md-4 rounded-2" id="reg" method="post" action="reg.php">
                    <h2 class="col align-self-center">Регистрация</h2>

                    <div class="align-self-center err">
                        <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-2 align-self-center">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name="login" value="" type="text" class="contact-input rounded-2" id="exampleInputEmail1" placeholder="Введите логин" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-2 align-self-center">
                        <label for="formGroupExampleInput" class="form-label">Почта(email)</label>
                        <input name="mail" value="" type="email" class="contact-input rounded-2" id="exampleInputEmail1" placeholder="Введите email" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-2 align-self-center">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="contact-input rounded-2" id="exampleInputPassword1" placeholder="Введите ваш пароль" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-3 align-self-center">
                        <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="contact-input rounded-2" id="exampleInputPassword1" placeholder="Повторите пароль" require>
                    </div>
                    <div class="w-100"></div>

                    <div class="mb-3 row">
                        <button type="submit" name="button-reg" class="btn btn_color mb-2">Зарегистрироваться</button>
                        <a href="<?= BASE_URL . "user_profile/log.php"?>" class="col col-md-12 mt-2">Авторизоваться</a>
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