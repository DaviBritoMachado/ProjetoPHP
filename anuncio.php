<h4>Anuncie seu Produto</h4>
    <br><br>
        <div id="forma">
            <form action="?pg=anunciodb" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nome: </td>
                    <td><input name="nome" type="text"/></td>
                </tr>
                <tr> 
                    <td>Preco: </td>
                    <td><input name="preco" type="number"/></td>
                </tr>
                <tr>
                    <td>Descrição: </td>
                    <td><textarea name="descricao"></textarea></td>
                </tr>
                <tr>
                    <td>Estoque: </td>
                    <td><input name="estoque" type="number"/></td>
                </tr>
                <tr>
                    <td>Imagem: </td>
                    <td><input name="imagem" type="file"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="Enviar">Cadastrar</button></td>
                </tr>
            </table>
            </form>
        </div>
    <div id="ladod"></div>