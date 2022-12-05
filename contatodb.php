<?php

    require_once("./config_inc.php");

    $nome = $_POST['nome'];
    $email = $_POST['email']; 
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO contato (nome, email, cidade, estado) VALUES ('$nome', '$email', '$cidade', '$estado')";

    $insert = mysqli_query($conexao, $sql);

    if(!$insert){
        echo "<h4>Erro</h4>";
        echo "Houve um erro no envio. <a href='?pg=contato'>Tente novamente</a>"; 
    }else{
        echo "<h4>Envio realizado</h4>";
        echo "Envio sucedido, para voltar à pagina inicial <a href='?pg=conteudo'>clique aqui</a>"; 
    }
?>