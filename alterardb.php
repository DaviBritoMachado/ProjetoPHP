<?php

    require_once("./config_inc.php");
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco']; 
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];

    $sql2 = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

    $sql = "UPDATE produtos SET nome='$nome', preco='$preco', 
    descricao='$descricao', estoque='$estoque' WHERE id=$id";
    $altera = mysqli_query($conexao, $sql);

    if(!$altera){
        echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
        <a href='?pg=admmenu'>Voltar</a>";
    }else{
        echo "<h3>Alterado com sucesso!</h3>
        <a href='?pg=admmenu'>Voltar</a>";
    }
?>