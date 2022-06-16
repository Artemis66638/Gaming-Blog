        <footer class="footer">
            <div class="footer-content container">
                <div class="row justify-content-between">
                    <div class="footer-section about col-md-4 col-12">
                        <h3 class="logo-text mb-3">Gaming blog</h3>
                        <p>
                            Gaming blog - это блог сделаннный с целью информирования, развитию и продвижения игровой индустрии)).
                        </p>
                    </div>

                    <div class="footer-section social links col-md-4 col-12" id="links">
                        <h3 class="mb-3">Социальные сети</h3>

                        <div class="contact">
                            <span><i class="fas fa-phone"></i> 123-456-789</span>
                            <span><i class="fas fa-envelope"></i> info@gamingblog.com</span>
                        </div>

                        <div class="socials mt-3">
                            <a class="mb-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a class="mb-3" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="mb-3" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a class="mb-3" href="https://vk.com/"><i class="fa-brands fa-vk"></i></a>
                            <a class="mb-3" href="https://store.steampowered.com/"><i class="fa-brands fa-steam"></i></a>
                        </div>
                    </div>


                    <div class="footer-section links col-md-3 col-12">
                        <h3 class="mb-3">Бысбтрые ссылки</h3>
                        <ul>
                            <li>
                                <a href="<?= BASE_URL?>">Главная</a>
                                <p></p>
                            </li>
                            <li>
                                <a href="<?= BASE_URL . "about.php"?>">О нас</a>
                                <p></p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="footer-bottom container-fluid">
                &copy; gamingblog.com | Designed by Artem
            </div>
        </footer>
    </main>

    <!------------------------------------------------------ JQUERY ------------------------------------------------------>
    <script src="<?= BASE_URL . "assets/js/jquery.min.js"?>"></script>
    <!------------------------------------------------------ JQUERY ------------------------------------------------------>

    <!------------------------------------------------------ URL ------------------------------------------------------>
    <script src="<?= BASE_URL . "assets/js/url.js"?>"></script>
    <!------------------------------------------------------ URL ------------------------------------------------------>

    <!------------------------------------------------------ MOBILE ------------------------------------------------------>
    <script src="<?= BASE_URL . "assets/js/mobile_click.js"?>"></script>
    <script src="<?= BASE_URL . "assets/js/mobile_window.js"?>"></script>
    <!------------------------------------------------------ MOBILE ------------------------------------------------------>

    <!------------------------------------------------------ BOOTSTRAP ------------------------------------------------------>
    <script src="<?= BASE_URL . "assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.js"?>"></script>
    <!------------------------------------------------------ BOOTSTRAP ------------------------------------------------------>
  </body>
</html>