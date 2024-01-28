<?php 
    include_once('conexao.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $result = mysqli_query($mysqli, "INSERT INTO tb_cadastro(login, senha) VALUES ('$login', '$senha')");
    header('Location: index.php');
?>