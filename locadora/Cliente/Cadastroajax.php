<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locadora";

    if(isset($_POST["idcliente"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Erro na conexco com o Banco");
        }
    else {
        $sql = "INSERT INTO Cliente (Nome, senha, Endereco,Email,Telefone)
        VALUES ('$nome', '$senha', '$endereco','$email','$telefone')";

        if ($conn->query($sql) === TRUE) {
            echo "<span><b>Aviso:</b>Cliente cadastrado com sucesso!</span>";
        } else {
            echo "<span><b>Aviso:</b>Ocorreu algum  erro, verifique os dados</span>";
        }
    }
        $conn->close();
    }
    ?>