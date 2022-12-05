<?php

    require_once("./config_inc.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    echo $login;

    if ($login != "admin" || $senha != "123"){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='index.php?pg=login';</script>";
    }else{
        setcookie('login',$login);
        setcookie('senha',$senha);
        
        header("Location: admarea.php");
    }
?>