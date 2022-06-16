<? include SITE_ROOT . "/app/database/db.php"?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game blog</title>

    <!------------------------------------------------------ BOOTSTRAP ------------------------------------------------------>
    <link rel="stylesheet" href="<?= BASE_URL . "assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.css"?>">
    <!------------------------------------------------------ BOOTSTRAP ------------------------------------------------------>

    <!------------------------------------------------------ STYLE_CSS ------------------------------------------------------>
    <link rel="stylesheet" href="<?= BASE_URL . "assets/css/style.css"?>">
    <link rel="stylesheet" href="<?= BASE_URL . "assets/css/admin.css"?>">
    <link rel="stylesheet" href="<?= BASE_URL . "assets/css/mobile.css"?>">
    <!------------------------------------------------------ STYLE_CSS ------------------------------------------------------>

    <!------------------------------------------------------ ICONS ------------------------------------------------------>
    <link rel="stylesheet" href="<?= BASE_URL . "assets/fontawesome/css/all.css"?>">
    <!------------------------------------------------------ ICONS ------------------------------------------------------>

  </head>

  <body>
    <main>
        <header class="container-fluid header">
            <div class="container">
                <div class="row">
                    <div class="col-4" id="logo">
                        <h1>
                            <a href="<?= BASE_URL?>">Gaming Blog</a>
                        </h1>
                    </div>


                    <nav class="col-8" id="header_menu">
                        <ul class="mobile_menu">
                            <li><div class="btn_menu"><a><span></span></a></div></li>
                        </ul>
                        <ul class="menu rounded-2">
                            <li><a href="<?= BASE_URL?>">Главная</a> </li>
                            <li><a href="<?= BASE_URL . "about.php"?>">О нас</a> </li>
                            <li class="menu_hover hover">
                                <?php if (isset($_SESSION['id'])): ?>
                                    <a href="<?= BASE_URL . "user_profile/posts/index.php"?>" id="desctop_log"><i class="fa fa-user"></i> <?php echo $_SESSION['login']; ?></a>
                                <?php else: ?>
                                    <a href="<?= BASE_URL . "user_profile/log.php"?>" id="desctop_log"><i class="fa fa-user"></i> Войти</a>
                                <?php endif; ?>
                                
                                <div id="mobile_profile"><i class="fa fa-user"></i></div>

                                <ul class="rounded-2 under_menu ">
                                    <?php if (isset($_SESSION['id'])): ?>
                                        <li><a href="<?= BASE_URL . "user_profile/posts/index.php"?>">Профиль</a> </li>
                                        <?php if($_SESSION['admin'] == "1"): ?>
                                            <li><a href="<?= BASE_URL . "admin/posts/index.php"?>">Админ панель</a> </li>
                                        <?php endif; ?>
                                        <li><a href="<?= BASE_URL . "app/controllers/logout.php"; ?>">Выход</a> </li>
                                    <?php else: ?>
                                        <li class="mobile_link"><a href="<?= BASE_URL . "user_profile/log.php"?>"></i> Войти</a></li>
                                        <li><a href="<?= BASE_URL . "user_profile/reg.php"?>">Регистрация</a> </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>