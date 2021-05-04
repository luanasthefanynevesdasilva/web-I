<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Excluir Veículo</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="../Index.php"><li>Home</li></a>
            <a href="../Cliente/Cadastro.php"><li> Cliente</li></a>
            <a href="Cadastro.php"><li>Veiculo</li></a>
            <a href="../Aluguel/Alugar.php"><li>Aluguel</li></a>
            <a href="../funcionario/Cadastro.php"><li>funcionario</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
    <a href="Cadastro.php">Cadastrar</a><a href="Atualizar.php">Atualizar</a><a href="Excluir.php">Excluir</a><br>
</section>
<form method="post" class="Formulario" action="#">
    <br>
    <br>

    <input type="text" placeholder="idveiculo" name="idveiculo" class="txtcodigo" required><br>
    <input type="submit" name="Executar" value="Excluir">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idveiculo"])) {
        $idveiculo = $_POST["iddveiculo"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        echo"<br><br>";

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "delete from Veiculo WHERE  idveiculo = $idveiculo";

            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>Veículo excluido com sucesso!</span>";
            } else {
                echo "<span><b>Aviso:</b>Erro ao excluir, verifique Código</span>";
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
