<?php 
    include_once('conexao.php');
    $ID = $_GET['ID'];
    $sql = "DELETE FROM tb_cadastro WHERE ID='$ID'";
    $result = $mysqli->query($sql);
    header('Location: index.php');
?>