<?php

class Usuario{
	
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


public function getIdusuario(){
	return $this->idusuario;
}
public function setIdusuario($value){
	$this->idusuario=$value;
}


public function getDeslogin(){
	return $this->deslogin;
}
public function setDeslogin($value){
	$this->deslogin="nome";
}


public function getDessenha(){
	return $this->dessenha;
}
public function setDessenha($value){
	$this->dessenha="senha";
}


public function getDtcadastro(){
	return $this->dtcadastro;
}
public function setDtcadastro($value){
	$this->dtcadastro=$value;
}
	


//Este método somente pegará as informações que vieram dos registros
//do banco de dados e alimentará os atributos 'set' acima.
public function loadById($id){
	$sql = new Sql();
	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
	//Se existe algum valor no indice '0', ou seja, se existe pelo menos um registro.
	if(isset($results[0])){
		
		$row = $results[0];
		
		$this->setIdusuario($row['idusuario']);
		$this->setDeslogin($row['deslogin']);
		$this->setDessenha($row['dessenha']);
		$this->setDtcadastro(new DateTime($row['dtcadastro']));
	}
}
	

//Método mágico 'toString' que imprimirá os campos do
//usuário, usando json:
public function __toString(){
	
	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
	));
}
	


}
	


?>