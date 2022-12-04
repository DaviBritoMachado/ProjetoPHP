<?php

    require_once("./config_inc.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = ('$id')";

    $delete = mysqli_query($conexao, $sql);

    if(!$delete){
        echo "Não foi possível excluir registro. <a href='?pg=inserir'>Tente Novamente</a>";
    }else{
    echo "<h3>Registro excluído com sucesso!</h3>";
        header("Refresh: 5, ../admin/?pg=admmenu");
    }


?>