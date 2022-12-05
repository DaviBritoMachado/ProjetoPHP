<h4>Carrinho de compras</h4>

<?php
    require_once("./config_inc.php");
            
    $dados = "SELECT * FROM carrinho";

    $rs = mysqli_query($conexao, $dados);
        
    while($tabela = mysqli_fetch_array($rs)){
        
            
    }
?>