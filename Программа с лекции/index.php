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
    <div class="reg-form"></div>
     <div>
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
        <?php
       </form>
     </div>
<?php $validate = valid($_POST) ?> 
  
<?php if (!empty($validate['error']) && $validate['error']: ?>
    <?php foreach($validate['messages'] as $message): ?>
      <p style="color: red">
        <?= $message ?>
      </p>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (!empty($validate['success']) && $validate['success']: ?>
    <?php foreach($validate['messages'] as $message): ?>
      <p style="color: green">
        <?= $message ?>
      </p>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
