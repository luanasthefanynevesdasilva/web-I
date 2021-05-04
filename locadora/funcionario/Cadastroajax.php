<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idfuncionario"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["cpf"];


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Erro na conexco com o Banco");
        }
    else {
        $sql = "INSERT INTO funcionario (Nome, cpf, idfuncionario)
        VALUES ('$nome', '$cpf', '$idfuncionario')";

        if ($conn->query($sql) === TRUE) {
            echo "<span><b>Aviso:</b>funcionario cadastrado com sucesso!</span>";
        } else {
            echo "<span><b>Aviso:</b>Ocorreu algum  erro, verifique os dados</span>";
        }
    }
        $conn->close();
    }
    ?>