<h4>Produto</h4>

<?php

require_once("./config_inc.php");

$id = $_GET['id'];
$dados = "SELECT * FROM produtos WHERE id = $id";

$rs = mysqli_query($conexao, $dados);
    
       while($tabela = mysqli_fetch_array($rs)){
           echo '<div class ="item">
           <img id="capi" src="./img/' .  $tabela['imagem'] . '">
           <h1>' . $tabela['nome'] . '</h1> R$ ' . $tabela['preco'] . '<br> ' . $tabela['descricao'] . '
           
           </div>';
           echo '<button><a href="?pg=vericompra&estoque=' . $tabela['estoque'] . '&id=' . $tabela['id'] . '">Comprar</a></button>';
           echo '<button><a href="?pg=carrinhoadd&id=' . $tabela['id'] . '">Adicionar ao carrinho</a></button>';
       }
?>