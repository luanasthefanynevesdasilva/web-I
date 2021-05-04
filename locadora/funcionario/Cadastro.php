<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <title>Cadastrar funcionario</title>
    <link rel="stylesheet" href="../estilo.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="script.js"></script>
      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="../Index.php"><li>inicio</li></a>
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
<form id="cadfuncionario" method="post" class="Formulario" action="#">

    <input type="text" placeholder="idfuncionario" name="idfuncionario" size="20" maxlength="10" required><br>
    <input type="text" placeholder="nome" name="nome" size="40" maxlength="43" required><br>
    <input type="text" placeholder="cpf" name="cpf" size="20" maxlength="11" required><b>
    <input type="button" value="Salvar" id="savar">

    </form>
    <div id="result">

<footer>

</footer>
</body>
</html>

<script type="text/javascript" language="javascript"> 
    $(document).ready(function(){
        $('#salvar').click(function(){
            var dados = $('#cadfuncionario').serialize();

            $.ajax({
                type: 'POST',
                datatype: 'json',
                url: 'Cadastroajax.php',
                async: true,
                data: dados,
                success: function(response) {
                    location.reload();
                }   
            });
        });
    });


</script>