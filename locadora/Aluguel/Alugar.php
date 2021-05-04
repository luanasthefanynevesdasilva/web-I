<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Alugar Veículo</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="../Index.php"><li>Home</li></a>
            <a href="../Cliente/Cadastro.php"><li> Cliente</li></a>
            <a href="../Veiculo/Cadastro.php"><li>Veiculo</li></a>
            <a href="Alugar.php"><li>Aluguel</li></a>
            <a href="../funcionario/Cadastro.php"><li>funcionario</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
    <a href="Alugar.php">Alugar Veiculo</a>
</section>
<form method="post" class="Formulario">
    <br>
    <br>
    <input type="text" placeholder="idcliente" name="idcliente" size="20" maxlength="10" required class="al">
    <input type="text" placeholder="idveiculo" name="idveiculo" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idfuncionario" name="idfuncionario" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="10" required><br>
      <input type="text" placeholder="iddevoluçao" name="iddevoluçao" size="20" maxlength="10" required><br>
    <input type="date" name="dt_locaçao"  required class="ald">
    <input type="text" placeholder="valordiario" name="valordiario" size="20" maxlength="5" required><br>
    <br><br>
    <input type="submit" name="Executar" value="Alugar">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idaluguel"])) {

        $idcliente = $_POST["idcliente"];
        $idveiculo = $_POST["idveiculo"];
        $idfuncionario = $_POST["idfuncionario"];
        $idaluguel = $_POST["idaluguel"];
        $iddevoluçao = $_POST["iddevoluçao"];
        $dt_locaçao = $_POST["dt_locaçao"];
        $valordiario = $_POST["valordiario"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
    else {
        $sql = "INSERT INTO Aluguel (idcliente,idveiculo,idfuncionario,idaluguel,iddevoluçao,dt_locaçao,valordiario)
        VALUES ($idcliente,$idveiculo,'$idfuncionario','$idaluguel','$iddevoluçao',$dt_locaçao,$valordiario)";


        if ($conn->query($sql) === TRUE) {
            echo "<span><b>Aviso:</b> Cliente cadastrado com sucesso!</span>";
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
