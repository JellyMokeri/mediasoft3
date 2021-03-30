<?php

function valid(array $post): array
{
    $validate = [
        'error' => false,
        'success' => false,
        'messages' => [],
    ];

    if (!empty($post['login']) && !empty($post['password']) && !empty($post['firstname']) && !empty($post['lastname'])) {
        $login = trim($post['login']);
        $password = trim($post['password']);
        $firstname = trim($post['firstname']);
        $lastname = trim($post['lastname']);

        $constrains = [
            'firstname' => preg_match("/^[а-яА-Яa-zA-Z]+$/u", $firstname),
            'lastname' => preg_match("/^[а-яА-Яa-zA-Z]+$/u", $lastname),
            'login' => 3,
            'password' => 4
        ];

        $validateForm = valigData($firstname, $lastname, $login, $password, $constrains);      
      
        if (!$validateForm['firstname']) {
            array_push($validate['messages'],
                "Имя не должно содержать цифр");
        }

        if (!$validateForm['lastname']) {
            array_push($validate['messages'],
                "Фамилия не должна содержать цифр");
        }

        if (!$validateForm['login']) {
            array_push($validate['messages'],
                "Логин должен быть не менее $constrains['login'] символов");
        }

        if (!$validateForm['password']) {
            array_push($validate['messages'],
                "Пароль должен быть не менее $constrains['password'] символов");
        }

        if (!$validate['error']){
            $validate['success'] = true;
            array_push($validate['messages'],
                "Ваше имя:$firstname",
                "Ваша фамилия:$lastname"
                "Ваш логин:$login",
                "Ваш пароль:$password",
            );
        }
    }
    return $validate;

}

function valigData(string $firstname, string $lastname, string $login, string $password, array $constrains): array{

    $validateForm = [
        'login' => true,
        'password' => true,
        'firstname' => preg_match("/^[а-яА-Яa-zA-Z]+$/u", $firstname),
        'lastname' => preg_match("/^[а-яА-Яa-zA-Z]+$/u", $lastname)
    ];

    if (strlen($login) < $constrains['login']) {
        $validateForm['login'] = false;
    }

    if (strlen($password) < $constrains['password']) {
        $validateForm['password'] = false;
    }

    if (!$firstName) {
        $validateForm['firstname'] = false;
    }

    if (!$lastName) {
        $validateForm['lastname'] = false;
    }

    return $validateForm;

}
