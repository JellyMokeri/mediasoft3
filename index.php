<?php require_once "form.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 3</title>
        <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="reg-form">

    <form action="./" method="post">
        <label>Имя</label><br>
            <input type="text" name="firstname" placeholder="Введите имя"><br>
        <label>Фамилия</label><br>
            <input type="text" name="lastname" placeholder="Введите фамилию"><br>
        <label>Логин</label><br>
            <input type="text" name="login" placeholder="Введите логин"><br>
        <label>Пароль</label><br>
            <input type="password" name="password" placeholder="Введите пароль"><br>
        <button>Отправить</button><br>
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



