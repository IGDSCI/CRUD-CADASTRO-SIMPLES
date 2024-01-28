<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo">
        <h1>Central de cadastro</h1>
        <form action="cadastro_bd.php" method="POST">
            <h2>LOGIN:</h2>
            <input type="text" name="login" id="" required>
            <br>
            <h2>SENHA:</h2>
            <input type="password" name="senha" id="" required>
            <br>
            <input type="submit" name="submit" value="cadastrar" id="btn_cadastrar">
        </form>
    </div>

    <div>
        <?php 
            include_once('conexao.php');
            $sql = "SELECT * FROM tb_cadastro";
            $result = mysqli_query($mysqli, $sql);
            echo "<table>";
                echo "<tr>";
                echo "<th> ID </th>";
                echo "<th> Login </th>";
                echo "<th> Senha </th>";
                echo "<th> Ações </th>";
            echo "</tr>";
            while ($registro = mysqli_fetch_array($result))
            {
                $id = $registro['ID'];
                $nome = $registro['login'];
                $senha = $registro['senha'];
                echo "<tr>";
                    echo "<th> $id </th>";
                    echo "<th> $nome </th>";
                    echo "<th> $senha </th>";
                    echo "<th> <a href='editar_informacao.php?ID=$registro[ID]' id='btn_editar'>EDITAR</a> <a href='excluir_informacao.php?ID=$registro[ID]' id='btn_excluir'>EXCLUIR</a></th>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </div>
</body>
</html>




