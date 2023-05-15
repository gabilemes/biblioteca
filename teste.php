<?php
include_once "conexao.php";

$conexao = new conexao();
$sql="select id as usuario, email as login from usuario";
$resultado = $conexao->executar($sql);

foreach($resultado as $v){
   print_r($v);
   echo "<br/>"; 
}

?>