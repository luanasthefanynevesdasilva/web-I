<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Atualizar dados do Cliente</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="../Index.php"><li>Home</li></a>
            <a href="Cadastro.php"><li> Cliente</li></a>
            <a href="../Veiculo/Cadastro.php"><li>Veiculo</li></a>
            <a href="../Aluguel/Alugar.php"><li>Aluguel</li></a>
            <a href="../funcionario/Cadastro.php"><li>funcionario</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
    <a href="Cadastro.php">Cadastrar</a><a href="Atualizar.php">Atualizar</a><a href="Excluir.php">Excluir</a><br>
</section>
<form method="post" class="Formulario">

    <input type="text" placeholder="idcliente" name="idcliente" size="20" maxlength="10" required><br>
    <input type="text" placeholder="nome" name="nome" size="40" maxlength="43" required><br>
    <input type="text" placeholder="senha" name="senha" size="20" maxlength="11" required><b>
    <input type="text" placeholder="Endereco" name="endereco" size="40" maxlength="43" required><br>
    <input type="email" placeholder="Email" name="email" size="40" maxlength="43"><br>
    <input type="text" placeholder="Telefone" name="telefone"><br>
    <input type="submit" name="Executar" value="Atualizar">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idcliente"])) {
        $codigo = $_POST["idcliente"];
        $nome = $_POST["nome"];
        $cpf = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conex?o com o Banco");
        }
        else {
            $sql = "UPDATE cliente set nome = '$nome', senha = '$senha', Endereco ='$endereco', Email ='$email', Telefone ='$telefone' where idcliente = $idcliente";
            echo"<br><br>";
            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>Dados Atulizados com Sucesso</span>";
            } else {
                echo "<span><b>Aviso:</b> Erro ao atualizar, verifique os dados!<span>" . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    ?>
</form>


<footer>

</footer>
</body>
</html>
