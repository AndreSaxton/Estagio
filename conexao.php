<?php
//$conexao = new mysqli('localhost', 'root','', 'teste'); 
//$conexao = new mysqli('mysql.hostinger.com.br', 'u770413803_teste','fornazieri', 'u770413803_teste'); 
$conexao = new PDO("sqlsrv:server = tcp:serverpresentacao1309.database.windows.net,1433; Database = dbapresentacao1309", "saxton", "apresentac@0");
//93.188.160.89
//Variavel = new mysqli("servidor", "usuario", "senha", "banco") or die("Erro ao conectar");
	if (!$conexao)
	{ 
	 	die('problema na conexão');
	}
?>
