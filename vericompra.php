<?php
    require_once("./config_inc.php");

    $estoque = $_GET['estoque'];
    $id = $_GET['id'];
    $dados = "SELECT * FROM produtos WHERE id = $id";

    $rs = mysqli_query($conexao, $dados);

    if($estoque == 0){
        echo "Produto fora de estoque";
    }else{
        while($tabela = mysqli_fetch_array($rs)){
            echo '<h2>Informe os dados necessários</h2>';
            echo '<br><br>
            <div id="forma">
                <form action="?pg=vericompradb&estoque=' . $tabela['estoque'] . '&id=' . $tabela['id'] . '" method="POST">
                    <table>
                        <tr>
                            <td>Nome: </td>
                            <td><input type="text" name="nome"></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>Estado: </td>
                            <td><input type="text" name="estado"></td>
                        </tr>
                        <tr>
                            <td>Cidade: </td>
                            <td><input type="text" name="cidade"></td>
                        </tr>
                        <tr>
                            <td>Bairro: </td>
                            <td><input type="text" name="bairro"></td>
                        </tr>
                        <tr>
                            <td>Número: </td>
                            <td><input type="text" name="numero"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit">Enviar</button></td>
                        </tr>        
                    </table>   
                </form>
            </div>';
        }
    }
?>