
<?php
	$host= "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "pesquisayosoy";

	$conectar = @mysqli_connect($host, $usuario, $senha, $banco);

	if (mysqli_connect_errno($conectar))
	echo "Erro na Conexão com o Banco de dados";
	?>