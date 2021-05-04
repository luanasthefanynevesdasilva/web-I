<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Atualizar dados do veiculo</title>
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

<form method="post" class="Formulario">
    <input type="text" placeholder="idtipo_veiculo" name="idtipo_veiculo" size="20" maxlength="4" class="vtxt" required>
    <input type="text" placeholder="ano" name="ano" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="idModelo" name="idmodelo" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="cor" name="cor" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="Placa" name="placa" size="20" maxlength="16"class="vtxt"><br>
    <input type="text" placeholder="preço" name="preço" size="20" maxlength="3"class="vtxt" required><br>
    <input type="text" placeholder="chassi" name="chassi" size="47" maxlength="40" required><br>
    <input type="text" placeholder="nome" name="nome" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="quantidade" name="quantidadel" size="20" maxlength="8" class="vtxt" required>
    <input type="text" placeholder="idseguro" name="idseguro" size="47" maxlength="40" required><br>
    <input type="text" placeholder="idacidente" name="idacidente" size="47" maxlength="40" required><br>
    <input type="submit" name="submit" value="Atualizar">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idveiculo"])) {

        $idveiculo = $_POST["idveiculo"];
        $idtipo_veiculo = $_POST["idtipo_veiculo"];
        $ano = $_POST["ano"];
        $idModelo = $_POST["idModelo"];
        $placa = $_POST["placa"];

        $cor = $_POST["cor"];
        $preço = $_POST["preço"];
        $nome = $_POST["nome"];

        $quantidade = $_POST["quantidade"];
        $chassi = $_POST["chassi"];
        $idseguro = $_POST["idseguro"];
        $idacidente = $_POST["idacidente"];

        if(isset($_POST["quantidade"]))
            $quantidade = 1;
        else
            $quantidade = 0;

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "UPDATE Veiculo set idacidente = '$idacidente', idseguro='$idseguro',chassi=$chassi,quantidade ='$quantidade',nome = $nome,preço = $preço,cor=$cor,placa=$placa,idModelo ='$idModelo',ano='$ano' where idveiculo = $idveiculo";
            echo"<br><br>";
            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b> Dados Atulizados com Sucesso</span>";
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
