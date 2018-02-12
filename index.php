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
//$usuario = new Usuario();
//$usuario->login("root", "12345");
//echo $usuario;

/*
 * /Insere um usuario no Bando de Dados

$aluno = new Usuario("Aluno", "654321");
$aluno->insert();
echo $aluno;
 * 
 */

/* Atualiza um usuario no banco UPDATE
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Professor", "568974");
echo $usuario;
 * 
 */

//Deleta um usuario do banco de dados DELETE
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;
