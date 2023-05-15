<?php
include_once "seguranca.php";
include_once "conexao.php";

$nome="";
$email="";
$tel="";
$end="";
$id="";
$acao=1;

if(isset($_GET['usuario'])){
    $conexao = new conexao();
   $bdusu= $conexao->executar("select * from usuario where id=".$_GET['usuario']);
   $usuario=$bdusu[0];
   $nome=$usuario['nome'];
   $email=$usuario['email'];
   $tel=$usuario['telefone'];
   $end=$usuario['endereco'];
   $id=$_GET['usuario'];
   $acao=2;
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<h2>Tela de Cadastro</h2>
<hr />
<form action="acoes.php?acao=<?=$acao?>" method="POST">
    <label class="form-label">Nome:</label>
    <input class="form-control" type="text" name="nome" value="<?=$nome?>" />
    <br />
    <label class="form-label">E-mail:</label>
    <input class="form-control" type="email" name="email" value="<?=$email?>" />
    <br />
    <label class="form-label">Telefone:</label>
    <input class="form-control" type="tel" name="telefone" value="<?=$tel?>" />
    <br />
    <label class="form-label"> Endereco: </label>
    <input class="form-control" type="text" name="endereco" value="<?=$end?>" />
    <br />
   <input type="hidden" name="id" value="<?=$id?>"/>
    <div style="text-align: center;">
        <input class="btn btn-primary" type="submit" value="Enviar Dados">
    </div>

</form>