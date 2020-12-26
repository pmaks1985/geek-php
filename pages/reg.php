<div class="row mt-5">
    <h1>Регистрация пользователя</h1>
</div>
<div class="row">
    <form action="../../engine/server.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fio">Ваше имя:</label>
            <input type="text" class="form-control" id="fio" name="fio">
        </div>
        <div class="form-group">
            <label for="phone">Ваш телефон:</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Ваш адрес:</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="login">Ваш логин:</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="form-group">
            <label for="pass">Ваш пароль:</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <input type="submit" class="btn btn-primary" value="Зарегистрироваться">
    </form>
</div>