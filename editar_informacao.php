<?php 
    include_once('conexao.php');
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM tb_cadastro WHERE ID = $ID";
    $result = $mysqli->query($sql);
    while ($registro = mysqli_fetch_array($result))
    {
        $login = $registro['login'];
        $senha = $registro['senha'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando perfil</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo">
        <h1>Central de edição</h1>
        <form action="save_edit.php" method="POST">
            <input type='hidden' name="ID" value="<?php echo $ID ?>">
            <h2>LOGIN:</h2>
            <input type="text" name="login" value="<?php echo $login ?>" required>
            <br>
            <h2>SENHA:</h2>
            <input type="text" name="senha" value="<?php echo $senha ?>" required>
            <br>
            <input type="submit"  name="update" value="cadastrar" id="btn_cadastrar">
        </form>
    </div>
</body>
</html>