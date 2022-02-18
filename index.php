<?php

require_once("config.php");

//Carrega um usuario

/*$jose = new Usuario();
$jose->loadById(4);
echo $jose;*/

//Carrega uma list a de usuarios

/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuarios buscando pelo login

/*$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega um usuario usando o login e a senha 

/*$usuario = new Usuario();
$usuario->login("root", "123456");
echo $usuario;*/

//Criando um novo usuario

/*$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/

//Alterar um usuario
/*$usuario = new Usuario();
$usuario->loadById(13);
$usuario->update("professor", "minhasenha");
echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(14);

$usuario->delete();

echo $usuario;

echo $usuario;
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/
?>