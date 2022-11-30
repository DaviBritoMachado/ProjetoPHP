<?php

    require_once("./config_inc.php");

    $nome = $_POST['nome'];
    $email = $_POST['email']; 
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO contato (nome, email, cidade, estado) VALUES ('$nome', '$email', '$cidade', '$estado')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "deu erro <a href='?pg=contato'>tente novamente</a>"; 
    }else{
        echo "deu certo, caso queira tentar denovo <a href='?pg=contato'>tente novamente</a>"; 
    }
?>