<?php

function valid(array $post): array {
    $validate = [
        'error' => false,
        'success' => false,
        'messages' => [],
    ];

    if(!empty($post['firstname']) && !empty($post['lastname']) && !empty($post['login']) && !empty($post['password'])){

        $firstname = trim($post['firstname']);
        $lastname = trim($post['lastname']);
        $login = trim($post['login']);
        $password = trim($post['password']);

        $constrains = [
            'login' => 3,
            'password' => 4
        ];

        $validateForm = validLogin($firstname, $lastname, $login, $password, $constrains);

        if (!$validateForm['firstname']) {
            $validate['error'] = true;
            array_push(
                $validate['messages'],
                "Имя не должно содержать цифр"
            );
        }

        if (!$validateForm['lastname']) {
            $validate['error'] = true;
            array_push(
                $validate['messages'],
                "Фамилия не должна содержать цифр"
            );
        }

        if (!$validateForm['login']) {
            $validate['error'] = true;
            array_push(
                $validate['messages'],
                "Логин должен быть больше {$constrains['login']} знаков"
            );
        }

        if (!$validateForm['password']) {
            $validate['error'] = true;
            array_push(
                $validate['messages'],
                "Пароль должен быть больше {$constrains['password']} знаков"
            );
        }

        if (!$validateForm['error']) {
            $validate['success'] = true;
            array_push(
                $validate['messages'],
                "Вы успешно прошли валидацию",
                        "Ваше имя : $firstname",
                        "Ваша фамилия : $lastname",
                        "Ваш логин : $login",
                        "Ваш пароль : $password"
            );
        }

        return $validate;

    }

    return $validate;

}


function validLogin(string $firstname, string $lastname, string $login, string $password, array $constrains): array {

    $validateForm = [
        'firstname' => true,
        'lastname' => true,
        'login' => true,
        'password' => true,
    ];

    if (preg_match('/^[\d]+$/', $firstname)) {
        $validateForm['firstname'] = false;
    }

    if (preg_match('/^[\d]+$/', $lastname)) {
        $validateForm['lastname'] = false;
    }

    if(strlen($login) < $constrains['login']) {
        $validateForm['login'] = false;
    }

    if(strlen($password) < $constrains['password']) {
        $validateForm['password'] = false;
    }

    return $validateForm;

}