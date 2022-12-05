    <h4>Produtos em destaque</h4>

    <div class="container" >
        <?php
            require_once("./config_inc.php");
            
            $dados = "SELECT * FROM produtos";

            $rs = mysqli_query($conexao, $dados);
        
            while($tabela = mysqli_fetch_array($rs)){
                echo '<div class ="item">
                <img id="capi" src="./img/' .  $tabela['imagem'] . '">
                <a href = "?pg=produtos&id=' . $tabela['id'] . '" class = "link_produto">' . $tabela['nome'] . '</a> R$ ' . $tabela['preco'] . '<br> 
            
                </div>';
            
            }
        ?>
        
    </div>

    

    