<?php

    require_once("./config_inc.php");

    $nome = $_POST['nome'];
    $preco = $_POST['preco']; 
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];
    $imagem = $_POST['imagem'];

    $sql = "INSERT INTO produtos (nome, preco, descricao, estoque, imagem) VALUES ('$nome', '$preco', '$descricao', '$estoque', '$imagem')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "deu erro <a href='?pg=contato'>tente novamente</a>"; 
    }else{
        echo "deu certo, caso queira tentar denovo <a href='?pg=contato'>tente novamente</a>"; 
    }
?>