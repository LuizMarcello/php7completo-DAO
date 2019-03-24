<?php

require_once("config.php");

//Carrega uma lista de usuários:
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuário:
//$user = new Usuario();
//$user->loadById(23);
//Ao invés do echo mostrar a estrutura deste objeto, ele
//mostra o quem tem dentro do método mágico __toString,
//da classe Usuario.php.
//echo $user;

//carrega uma lista de usuários:
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários, buscando pelo login:
//$search = Usuario::search("om");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha:
//$usuario = new Usuario();
//$usuario->login("jose","12345");
//Ao invés do echo mostrar a estrutura deste objeto, ele
//mostra o quem tem dentro do método mágico __toString,
//da classe Usuario.php.
//echo $usuario;

//Insere o usuário do parâmetro na tabela, no próximo ID da sequência:
//$aluno = new Usuario("LuizMarcellooo","--@123RolandiA@");
//$aluno->insert();
//echo $aluno;


//Altera o login e a senha do usuario referente ao ID do parâmetro, na invocação do método 'loadById()',
//pelo login e senha que constam no parâmetro, na invocação do método 'update()':
//$usuario = new Usuario();
//$usuario->loadById(19);
//$usuario->update("Variolona","123OFreeeeE123");
//echo $usuario;


//Deleta o registro referente ao índice do parâmetro na
//invocação do método 'loadById()':
//1º)Os valores do registro do usuário do ID são
//alimentados nas memórias dos atributos.
//2º)O método 'delete()' deleta na tabela o usuário deste ID,
//e depois limpa os registros do sistema com dados em branco.
$usuario = new Usuario();
$usuario->loadById(19);
$usuario->delete();
echo $usuario;

?>