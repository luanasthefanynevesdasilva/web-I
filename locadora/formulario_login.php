<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login - Painel de Controle</title>
<style>
body{ background-color:#4395d1;}

.form{
	width:250px;
	margin-left:120px;
	margin-top:5px;
	border:solid #000 0px;
	background-color:#FFF;
	float:left;
}
.entre{
	width:500px;
	height:300px;
	margin:80px auto;
	border:solid #000 1px;
	background-color:#FFF;
	border-radius:10px;
}

</style>
</head>
<body>
<div class="entre"><br />
<div class="form">
<form action="verifica_usuario.php" method="post" name="" id="">
<table width="250" border="0">
  <tr>
    <td><font face="Arial">email</font>:</td>
    <td><input name="email" type="text" id="email" /></td>
  </tr>
  <tr>
    <td><font face="Arial">Senha</font>:</td>
    <td><input name="senha" type="password" id="senha" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value=" Entrar "></td>
    <td><a href="formulario_senha_perdida.html">Recuperar Senha</a></td>
  </tr>
</table>
</form>

</div>
</div>
</body>
</html>
