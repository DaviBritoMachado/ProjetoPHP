<?php

    require_once("./config_inc.php");

    $estoque = $_GET['estoque'];
    $id = $_GET['id'];

    $nome = $_POST['nome'];
    $email = $_POST['email']; 
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];

    $sql = "INSERT INTO vericompra (nome, email, cidade, estado, bairro, numero) VALUES ('$nome', '$email', '$cidade', '$estado', '$bairro', '$numero')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "<h2>Erro</h2>";
        echo "Houve um erro no envio das informações. <a href='?pg=conteudo'>Tente novamente</a>"; 
    }else{
        $estoque--;

        $sql2 = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

        $sql = "UPDATE produtos SET estoque='$estoque' WHERE id=$id";

        $altera = mysqli_query($conexao, $sql);
        
        if(!$altera){
            echo "<h4>Erro</h4>";
            echo "Houve um erro na compra. <a href='?pg=conteudo'>Tente novamente</a>";
        }else{
            echo "<h4>Compra efetuada</h4>";
            echo "Compra bem sucedido, caso queira efetuar outra compra <a href='?pg=conteudo'>clique aqui</a>."; 
        }
       
    }
?>