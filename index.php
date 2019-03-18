<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$user = new Usuario();

$user->loadById(1);

//Ao invés do echo mostrar a estrutura deste objeto, ele
//mostra o quem tem dentro do método mágico __toString,
//da classe Usuario.php.
echo $user;

?>