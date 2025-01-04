<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$corpoUsuario = [
  "usuario" => $usuario,
  "senha" => $senha,
];

$usuarios = [];

$teste = array_push($usuarios, $corpoUsuario);
if ($teste > 0) {
  echo "Usuario criado com sucesso! \r";
  print_r($usuarios);
}