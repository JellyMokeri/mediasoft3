<?php session_start(); ?>
<?php require_once "form.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="./" method="post">
        <label>Имя</label>
        <input type="text" name="firstname" placeholder="Введите имя">
        <label>Фамилия</label>
        <input type="text" name="lastname" placeholder="Введите фамилию">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button>Отправить</button>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' .$_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
