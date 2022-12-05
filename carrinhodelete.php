<h4>Produto Deletado com Sucesso</h4>

<?php
    require_once("./config_inc.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM carrinho WHERE carrinho.id = $id";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "Houve um erro ao tentar retirar o produto, <a href='?pg=carrinho'>Tente Novamente</a>"; 
    }else{
        echo "Produto retirado do carrinho com sucesso, <a href='?pg=carrinho'>Retornar ao Carrinho</a>"; 
    }
?>