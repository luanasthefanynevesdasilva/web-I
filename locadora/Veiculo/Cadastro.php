<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Cadastrar Veículo</title>
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
<form method="post" class="Formulario">
    <br>
    <br>
    <br>
    <input type="text" placeholder="nome" name="nome" size="20" maxlength="4" class="vtxt" required>
    <input type="text" placeholder="Placa" name="placa" size="20" maxlength="16"class="vtxt"><br>
    <input type="text" placeholder="quantidade" name="quantidadel" size="20" maxlength="8" class="vtxt" required>
    <input type="text" placeholder="chassi" name="chassi" size="20" maxlength="3"class="vtxt" required><br>
    <input type="text" placeholder="idseguro" name="idseguro" size="47" maxlength="40" required><br>
    <input type="text" placeholder="idacidente" name="idacidente" size="47" maxlength="40" required><br>
    <input type="text" placeholder="Codigo do Veiculo" name="idveiculo" size="20" maxlength="10" required><br><br>
    <input type="text" placeholder="TipoVeiculo" name="idtipo_veiculo" size="20" maxlength="4" class="vtxt" required>
    <input type="text" placeholder="ano" name="ano" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="idModelo" name="idmodelo" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="cor" name="cor" size="20" maxlength="4" class="vtxt" required><br>
    <input type="text" placeholder="Placa" name="placa" size="20" maxlength="16"class="vtxt"><br>
    <input type="text" placeholder="cor" name="cor" size="20" maxlength="8" class="vtxt" required>
    <input type="text" placeholder="preço" name="preço" size="20" maxlength="3"class="vtxt" required><br>
    <input type="text" placeholder="chassi" name="chassi" size="47" maxlength="40" required><br>

    <input type="submit" name="submit" value="Cadastrar">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["submit"])) {


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }

        else {

        $idtipo_veiculo = $_POST["idtipo_veiculo"];
        $idveiculo = $_POST["idveiculo"];
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



 $sql = "INSERT INTO Veiculo (idtipo_veiculo,idveiculo,ano,placa,idModelo,cor,preço,nome,quantidade,chassi,idseguro,idacidente)
        VALUES ('$idtipo_veiculo,$idveiculo,$ano,$placa,$idModelo,$cor,$preço,$nome,$quantidade,$chassi,$idseguro,$idacidente')";
echo $sql;
        echo"<br>";
        if ($conn->query($sql) === TRUE) {
            echo "<span><b>Aviso:</b> Veiculo cadastrado com sucesso!</span>";
        } else {
            echo "<span><b>Aviso:</b> Ocorreu algum  erro, verifique os dados</span>";
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


