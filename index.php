<?php

require_once("config.php");

//Carrega uma lista de usuários:
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuário:
//$user = new Usuario();
//$user->loadById(1);
//Ao invés do echo mostrar a estrutura deste objeto, ele
//mostra o quem tem dentro do método mágico __toString,
//da classe Usuario.php.
//echo $user;

//carrega uma lista de usuários:
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários, buscando pelo login:
//$search = Usuario::search("oo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha:
//suario = new Usuario();
//suario->login("jose","12345");
//Ao invés do echo mostrar a estrutura deste objeto, ele
//mostra o quem tem dentro do método mágico __toString,
//da classe Usuario.php.
//echo $usuario;

$aluno = new Usuario("peter","@123dificil@");

$aluno->insert();

echo $aluno;


?>