<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Teste para Estagio</title>
</head>
<body>
<div>	
    <?php
    require_once('conexao.php'); //chama o arquivo de conexão com o banco
		$tipo =  $_GET["tipo"];
		$nome =  $_GET["nome"];
		$quant =  $_GET["quant"];
		$preco =  $_GET["preco"];
		$negocio =  $_GET["negocio"];
		//pega os dados no html
		$resultado = $conexao->query("INSERT INTO mercadoria(tipo,nome,quant,preco,negocio) VALUES('$tipo','$nome','$quant','$preco','$negocio')"); //inserindo dados na tabela mercadoria"
		$verifica = $conexao->query("SELECT * FROM mercadoria WHERE nome = '$nome'");
        $rows = $verifica->num_rows;
        if($rows == 0){ //verifica se a informação chegou
            echo "falha ao inserir informação";
        }else{		
		$busca = $conexao->query("SELECT * FROM mercadoria");     
		//busca os dados na tabela 
		echo "<table>
			<tr class='dois'>
			<td> Código da Mercadoria </td>
			<td> Tipo da Mercadoria </td>
			<td> Nome da Mercadoria </td>
			<td> Quantidade </td>
			<td> Preço </td>
			<td> Tipo do Negócio </td>
		</tr>";
		while($info = $busca->fetch_assoc()){
			if ($info['negocio'] == 0)
				$info['negocio'] = "Compra";
			else
				$info['negocio'] = "Venda";
		echo "<tr class='um'>
			<td> ".$info['codigo']." </td>
			<td> ". $info['tipo']." </td>
			<td> ". $info['nome']." </td>
			<td> ". $info['quant']." </td>
			<td> R$ ". number_format( $info['preco'],2,',','.')." </td>
			<td> ". $info['negocio']." </td>
		<tr/>";
        }
		echo "</table>";
        }
    ?>
	<br>
	<a href="TesteEstagio.html">Voltar</a>
</div>
</body>
</html>
