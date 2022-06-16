<?php 
    include "../../path.php";
    
    // -------- Header -------- //
    include "../../app/include/header.php";
    // -------- Header -------- //

    session_start();
    include SITE_ROOT . "/app/controllers/users.php";
?>

<!-- MAIN START-->
    <div class="container mb-3 mt-3">
        <div class="content">

            <!-- MAIN_CONTENT START -->
                <div class="main-content pb-1rounded-2">
                    <div class="title row justify-content-between">
                        <h2 class="col-md-8 title_edit_user">Редактирование пользователя</h2>

                        <div class="button col-md-2">
                            <a href="<?= BASE_URL . "admin/users/index.php";?>" class=" btn">Назад</a>
                        </div>
                    </div>


                    <div class="row add-post reg_form">
                        <div class="align-self-center err">
                            <? include SITE_ROOT . "/app/helps/errorinfo.php" ?>
                        </div>

                        <form action="edit.php" method="post">
                            <input name="id" value="<?=$id;?>" type="hidden">
                            <div class="col mb-3"> 
                                <label for="formGroupExampleInput" class="form-label">Логин</label>
                                <input name="login" value="<?=$username;?>" type="text" class="contact-input rounded-2" id="formGroupExampleInput" placeholder="Введите логин" require>
                            </div>

                            <div class="col mb-3">
                                <label for="exampleInputEmail1" class="form-label">Почта(email)</label>
                                <input name="mail" value="<?=$email;?>" type="email" class="contact-input rounded-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email" require>
                            </div>

                            <div class="col mb-3">
                                <label for="exampleInputPassword1" class="form-label">Старый пароль</label>
                                <input name="pass-first" type="password" class="contact-input rounded-2" id="exampleInputPassword1" placeholder="Введите пароль" require>
                            </div>

                            <div class="col">
                                <label for="exampleInputPassword2" class="form-label">Повторить пароль</label>
                                <input name="pass-second" type="password" class="contact-input rounded-2" id="exampleInputPassword2" placeholder="Повторите пароль" require>
                            </div>

                            <div class="col">
                                <label for="exampleInputPassword2" class="form-label">Новый пароль</label>
                                <input name="pass-new" type="password" class="contact-input rounded-2" id="exampleInputPassword2" placeholder="Повторите пароль" require>
                            </div>

                            <div class="form-check mt-4 ms-1">
                                <input name="admin" class="form-check_edit form-check-input" type="checkbox" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">Admin?</label>
                            </div>

                            <div class="block_btn pt-2 mt-3">
                                <button name="update-user" type="submit" class="btn p-3">
                                    <i class="fa-solid fa-user-pen"></i> Редактировать пользоватлея
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