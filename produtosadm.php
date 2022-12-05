<h2>Produto</h2>

<?php

require_once("./config_inc.php");

$id = $_GET['id'];
$dados = "SELECT * FROM produtos WHERE id = $id";

$rs = mysqli_query($conexao, $dados);
    
       while($tabela = mysqli_fetch_array($rs)){
           echo '<div class ="item">
           <img id="capi" src="' .  $tabela['imagem'] . '">
           <h1>' . $tabela['nome'] . '</h1> R$ ' . $tabela['preco'] . '<br> ' . $tabela['descricao'] . '
           <a href="?pg=alterar&id=' . $tabela['id'] . '">Alterar</a>
           <a href="?pg=excluir&id=' . $tabela['id'] . '">Excluir</a>
           </div>';
       }

?>
