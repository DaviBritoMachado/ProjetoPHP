<?php

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
echo $id;

?>