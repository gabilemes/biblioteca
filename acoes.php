<?php
include_once "seguranca.php";
include_once "conexao.php";
$acao = $_GET["acao"];

// Inserir dados
if($acao==1){

    $titulo=$_POST['titulo'];
    $autor= $_POST['autor'];
    $editora=$_POST['editora'];
    $ano=$_POST['ano'];
    $isbn=$_POST['isbn'];

    $sql="insert into livros (titulo, autor, editora, ano, isbn) values ('$titulo','$autor','$editora','$ano','$isbn')";
    $conexao= new conexao();
    $conexao->executar($sql);
    header("location: listarLivros.php?acao=1");
    die();

}else if($acao == 2){ // alterar
    $titulo=$_POST['titulo'];
    $autor= $_POST['autor'];
    $editora=$_POST['editora'];
    $ano=$_POST['ano'];
    $isbn=$_POST['isbn'];
    $id=$_POST['id'];
    $sql="update livros set titulo='$titulo',autor='$autor',editora='$editora',ano='$ano',isbn='$isbn' where id=$id";
    $conexao= new conexao();
    $conexao->executar($sql);
    header("location: listarLivros.php?acao=2");
    die();
} else if($acao==3){ // excluir
    $id=$_GET['id'];
    $sql="delete from livros where id=$id";
    $conexao= new conexao();
    $conexao->executar($sql);
    header("location: listarLivros.php?acao=3");
}
?>