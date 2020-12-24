<?php
session_start();
if ($_GET['success'] && $_SESSION['login']):?>
    <h1>Ваша учетная запись подтверждена</h1>
<?endif;?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <form action="../engine/server.php" method="post">
            <div class="form-group">
                <label for="login"><span class="font-weight-bold">Ваше имя:</span></label>
                <input type="text" class="form-control" name="login" placeholder="Иван Иванов">
            </div>
            <div class="form-group">
                <label for="pass"><span class="font-weight-bold">Ваш пароль:</span></label>
                <input type="password" class="form-control" name="pass">
            </div>
            <div class="form-group text-right">
                <input type="submit" name="review-button" value="Войти" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>