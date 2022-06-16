<div class="main-content rounded-2 mb-4">
    <div class="title mobile_title_user row justify-content-between">
        <div class="user col-md-4">
            <h2 class="name"><?php echo $_SESSION['login']; ?></h2>
            <p class="email"><?php echo $_SESSION['email']; ?></p>
        </div>


        <div class="button col-md-6 mb-2">
            <a href="<?= BASE_URL . "user_profile/edit_profile.php?edit_id=" . $_SESSION['id'];?>" class=" btn">Редактировать профиль</a>
        </div>
    </div>
</div>