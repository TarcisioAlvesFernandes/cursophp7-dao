<?php

require_once("config.php");

$sql = new Sql();


//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);



//Carrega um usuario
//$jose = new Usuario();
//$jose->loadById(1);
//echo $jose;


//Carrega uma Lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de Usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","1234567890");

echo $usuario;


?>