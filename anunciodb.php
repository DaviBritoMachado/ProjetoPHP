<?php

    require_once("./config_inc.php");

    $msg = "";
    $nome = $_POST['nome'];
    $preco = $_POST['preco']; 
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];

    $filename = $_FILES["imagem"]["name"];
    $tempname = $_FILES["imagem"]["tmp_name"];
    $folder = "./img/" . $filename;

    $sql = "INSERT INTO produtos (nome, preco, descricao, estoque, imagem) VALUES ('$nome', '$preco', '$descricao', '$estoque', '$filename')";

    $insert = mysqli_query($conexao, $sql);

    if(move_uploaded_file($tempname, $folder)){
        $msg = "Só sucesso";
    }

    if(!$insert){
        echo "Houve um erro no envio, <a href='?pg=anuncio'>tente novamente</a>"; 
    }else{
        echo "Produto anunciado, caso queira anunciar outro produto <a href='?pg=anuncio'>clique aqui</a>"; 
    }
?>