<?php

$method = ($_SERVER['REQUEST_METHOD'] == 'GET') ? $_GET : $_POST;
$errors = [];

echo htmlspecialchars($method['firstName']);

//var_dump($_FILES);

//$method = $_POST;
//if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//    $method = $_GET;
//}

//if (!empty($method['firstName']) && !empty($method['lastName'])) {
//    $firstName = filterInput(htmlspecialchars(trim($method['firstName']))) ?: $method['firstName'];
//    filterLastName($method['lastName'], $errors);
//
//    if (count($errors)) {
//        foreach ($errors as $error) {
//            echo "{$error}";
//        }
//    } else {
//        $lastName = $method['lastName'];
//
//        echo "Hello, {$firstName} {$lastName}!";
//    }
//} else {
//    echo "Вы не ввели данные!";
//}


function filterInput(string $input): bool
{
    $result = false;

    if (preg_match('#^[a-z]$#', $input)) {
        $result = true;
    }

    return $result;
}

function filterLastName(string $input, &$errors): void
{
    if (!preg_match('/[a-zA-Z]/', htmlspecialchars(trim($input)))) {
        $errors[] = "Неверная фамилия!";
    }
}