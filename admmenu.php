<h2>Área administração</h2>

<?php

require_once("./config_inc.php");

$dados = "SELECT * FROM produtos";

$rs = mysqli_query($conexao, $dados);
    
while($tabela = mysqli_fetch_array($rs)){
    echo '<a href = "?pg=produtosadm&id=' . $tabela['id'] . '" class = "link_produto">' . $tabela['nome'] . '</a> R$ ' . $tabela['preco'] . '<br> ';
}
?>
<a href="?pg=logout">Sair</a>