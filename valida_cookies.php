
<?php

if(isset($_COOKIE['login'])){
    $login = $_COOKIE['login'];
}
if(isset($_COOKIE['senha'])){
    $senha = $_COOKIE['senha'];
}
if(empty($login) OR empty($senha)){
        setcookie("login");
        setcookie("senha");
        echo "<center>Login não efetuado.";
        echo "<a href=../../?pg=login> Clique para logar.</a></center>";
        exit();
 }

 ?>
