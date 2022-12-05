<h4>Produto</h4>

<?php

require_once("./config_inc.php");

$id = $_GET['id'];
$dados = "SELECT * FROM produtos WHERE id = $id";

$rs = mysqli_query($conexao, $dados);
    
       while($tabela = mysqli_fetch_array($rs)){
           echo '<div class ="item">
           <img id="capi" src="./img/' .  $tabela['imagem'] . '">
           <div id = "prodd">
           <h1>' . $tabela['nome'] . '</h1> R$ ' . $tabela['preco'] . ' Estoque: ' . $tabela['estoque'] . '<br> ' . $tabela['descricao'] . '</div>';
           echo '<button id = "butao"><a href="?pg=vericompra&estoque=' . $tabela['estoque'] . '&id=' . $tabela['id'] . '">Comprar</a></button>';
           echo '<button id = "butao"><a href="?pg=carrinhoadd&id=' . $tabela['id'] . '&nome=' . $tabela['nome'] . '&preco=' . $tabela['preco'] .' &imagem=' . $tabela['imagem'] . '">Adicionar ao carrinho</a></button> <br>
           </div>';
       }
?>