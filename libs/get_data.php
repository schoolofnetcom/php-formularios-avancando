<?php

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$descricao = filter_input(INPUT_POST, 'descricao');

var_dump('--FORM-DATA--', $nome, $email, $descricao);

$json = file_get_contents("php://input");
$json = json_decode($json, true);

var_dump('--JSON--', $json);

if (is_null($nome)) {
    $nome = $json['nome'] ?? null;
}

if (is_null($email)) {
    $email = $json['email'] ?? null;
}

if (is_null($descricao)) {
    $descricao = $json['descricao'] ?? null;
}

var_dump('--FINAL--', $nome, $email, $descricao);
