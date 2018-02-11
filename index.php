<?php

require_once ("config.php");
//Carrega somente 1 usuario
//$root = new Usuario();

//$root->loadById(2);

//echo $root;

//Carrega uma lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista buscando pelo login

//$search = Usuario::search("us");

//echo json_encode($search);

//Carrega um usuário pelo Login e Senha - Autenticação

$usuario = new Usuario();
$usuario->login("root", "12345");

echo $usuario;
