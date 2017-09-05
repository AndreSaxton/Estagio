<?php
//$conexao = new mysqli('localhost', 'root','', 'teste'); 
//$conexao = new mysqli('mysql.hostinger.com.br', 'u770413803_teste','fornazieri', 'u770413803_teste');
//Database = ", "saxton", "{your_password_here}");
$conexao = new mysqli('tcp:serverpresentacao1309.database.windows.net', 'saxton','apresentac@0', 'dbapresentacao1309'); 
//93.188.160.89
//Variavel = new mysqli("servidor", "usuario", "senha", "banco") or die("Erro ao conectar");
	if (!$conexao)
	{ 
	 	die('problema na conexão');
	}
?>
