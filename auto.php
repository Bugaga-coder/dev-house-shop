<?php
require "db.php";
?>
<link rel="stylesheet" href="auto.css" media="screen">
<?php if( isset($_SESSION['logged_user']) ) : ?>
    <div class="logok">
    Авторизован!<br>
    Добро пожаловать!
    <hr>
    <a href="logout.php">Выйти</a>
</div>
    <?php else : ?>
        <div class="logok">
        Вы не авторизованы! <br>
<a href="login.php">Авторизоваться</a><br>
<a href="signup.php">Регистрация</a>
    </div>
<?php endif; ?>