<h2>Produto adicionado ao carrinho</h2>

<?php
    require_once("./config_inc.php");

    $id = $_GET['id'];

    $sql = "INSERT INTO carrinho (id) VALUES ('$id')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "Houve um erro no envio, <a href='?pg=produto'>tente novamente</a>"; 
    }else{
        echo "Produto salvo no carrinho de compras, caso queira olhar outros produtos <a href='?pg=conteudo'>clique aqui</a>"; 
    }
    
?>