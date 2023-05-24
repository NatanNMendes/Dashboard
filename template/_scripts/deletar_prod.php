<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM cad_produto WHERE id = '$id'";
$query = $mysqli->query($sql);  

if($query){
    echo "deletado";
}else{
    echo "deu ruim";
}
?>