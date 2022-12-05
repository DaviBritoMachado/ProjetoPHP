<?php
    require_once("valida_cookies.php");
    
    include_once("topo.php");
    include_once("menu.php");

    // conteúdo
    if (empty($_SERVER["QUERY_STRING"])){
        $var = "admmenu.php";
        include_once("$var");
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("rodape.php");
?>