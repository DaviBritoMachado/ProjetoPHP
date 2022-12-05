<h4>Produto adicionado ao carrinho</h4>

<?php
    require_once("./config_inc.php");

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $imagem = $_GET['imagem'];

    $sql = "INSERT INTO carrinho (id, nome, preco, imagem) VALUES ('$id', '$nome', '$preco', '$imagem')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "Houve um erro no envio, <a href='?pg=produto'>tente novamente</a>"; 
    }else{
        echo "Produto salvo no carrinho de compras, caso queira olhar outros produtos <a href='?pg=conteudo'>clique aqui</a>"; 
    }

?>