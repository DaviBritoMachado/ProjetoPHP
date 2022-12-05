<h4>Produto</h4>

<?php

require_once("./config_inc.php");

$id = $_GET['id'];
$dados = "SELECT * FROM produtos WHERE id = $id";

$rs = mysqli_query($conexao, $dados);
    
       while($tabela = mysqli_fetch_array($rs)){
           echo '<div class ="item">
           <img id="capi" src="./img/' .  $tabela['imagem'] . '">
           <h1>' . $tabela['nome'] . '</h1> R$ ' . $tabela['preco'] . '<br> ' . $tabela['descricao'];
           echo '<br><button id = "butao"><a href="?pg=alterar&id=' . $tabela['id'] . '">Alterar</a></button>';
           echo '<button id = "butao"><a href="?pg=carrinhoadd&id=' . $tabela['id'] . '"?pg=excluir&id=' . $tabela['id'] . '">Excluir</a></button> <br>
           </div>';
       }

?>
