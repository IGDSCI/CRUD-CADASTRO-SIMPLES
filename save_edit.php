<?php 
    include_once('conexao.php');
    $ID = $_POST['ID'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "UPDATE tb_cadastro SET login='$login',senha='$senha' WHERE ID='$ID'";
    $result = $mysqli->query($sql);
    header('Location: index.php');
?>