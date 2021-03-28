<?php require_once "form.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание 3</title>
</head>
<body>
<div class="reg-form">

    <form action="./" method="post">
        <p><label>Имя:<br>
                <input name="firstname" size="30" type="text" placeholder="Введите имя"></label></p>
        <p><label>Фамилия:<br>
                <input name="lastname" size="30" type="text" placeholder="Введите фамилию"></label></p>
        <p><label>Логин:<br>
                <input name="login" size="30" type="text" placeholder="Введите логин"></label></p>
        <p><label>Пароль:<br>
                <input name="password" size="30" type="text" placeholder="Введите пароль"></label></p>
        <input type="submit" name="send" value="Отправить"><br>
    </form>

    <?php $validate = valid($_POST) ?>
    <?php if(!empty($validate['error']) && $validate['error']): ?>
    <?php foreach ($validate['messages'] as $message): ?>
            <p style="...">
            <?= $message ?>
            </p>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php if(!empty($validate['success']) && $validate['success']): ?>
    <?php foreach ($validate['messages'] as $message): ?>
            <p style="...">
            <?= $message ?>
            </p>
    <?php endforeach; ?>
    <?php endif; ?>

</div>
</body>
</html>



