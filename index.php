<?php 

	require_once("config.php");

	//carrega um usuário usando login e senha
	//$root = new Usuario();
	//$root->login("jose","12345");
	//echo $root;

	// carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	// carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	// carrega um usuário
	//$root->loadById(7);
	//echo $root;

	// carrega todos os usuarios sem a classe Usuario
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	// Criando um novo usuário
	//$aluno = new Usuario("aluno", "@lun0");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();

	$usuario->loadById(8);

	$usuario->update("professor","!hdjo#$%");

	echo $usuario;

 ?>