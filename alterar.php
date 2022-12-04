<?php
require_once("./config_inc.php");

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>Preco: </td>
        <td><input name="link" type="number" value="<?=$dados['preco'];?>"/></td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td><textarea name="descricao" value="<?=$dados['descricao'];?>"></textarea></td>
    </tr>
    <tr>
        <td>Estoque: </td>
        <td><input name="estoque" type="number" value="<?=$dados['estoque'];?>"/></td>
    </tr>
    <tr>
        <td>Imagem: </td>
        <td><input name="imagem" type="file" accept="image/png, image/jpeg" value="<?=$dados['imagem'];?>"/></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
<?php 
}
?>