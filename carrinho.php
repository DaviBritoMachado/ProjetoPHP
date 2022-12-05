<h4>Carrinho de compras</h4>

<div class="container" >
    <?php
        require_once("./config_inc.php");

        $dados = "SELECT * FROM carrinho";
        $rs = mysqli_query($conexao, $dados);

        while($tabela = mysqli_fetch_array($rs)){
            echo '<div class ="item">
            <a href = "?pg=produtos&id=' . $tabela['id'] . '" class = "link_produto"><img id="capi" src="./img/' .  $tabela['imagem'] . '"></a>
            <div id = "prodd">
            <a href = "?pg=produtos&id=' . $tabela['id'] . '" class = "link_produto">' . $tabela['nome'] . '</a><br> R$ ' . $tabela['preco'] . '<br><br><br><br></div>';

            echo '<button id = "butao"><a href="?pg=carrinhodelete&id=' . $tabela['id'] .'">Retirar do carrinho </a></button>
            </div>';

        }
    ?>
</div>