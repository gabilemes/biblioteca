<?php
include_once "seguranca.php";
include_once "conexao.php";

$conexao = new conexao();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<h2>Lista de Usuários</h2>
<div>
    <a href="usuario.php">Criar Usuário</a>
</div>
<hr/>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ALTERAR</th>
            <th>EXCLUIR</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $arrUsuario= $conexao->executar("SELECT * FROM usuarios");
    foreach ($arrUsuario as $usuario){
?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="usuario.php?usuario=<?=$usuario['id']?>">Alterar</a>
            </td>
            <td>
                <a href="acoes.php?id=<?=$usuario['id']?>&acao=3">Excluir</a>
            </td>
        </tr>
<?php   
    }
?>
</tbody>
</table>
<?php
if(isset($_GET['acao']) ){
?>
<div class="alert alert-success">
<?php
    if($_GET['acao']==1)
    {
        echo "Usuário criado com sucesso!";
    }else if($_GET['acao']==2){
        echo "Usuário alterado com sucesso!";
    }else if($_GET['acao']==3){
        echo "Usuário excluído com sucesso!";
    }
?>
</div>
<?php
}
?>