<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>ORÇAMENTO</h1><hr><br>

	<div class="conteudo">
		<?php
			
			$data = $_POST['data'];
			$garantia = $_POST['garantia'];
			$aparelho = $_POST['aparelho'];
			$cliente = $_POST['cliente'];
			$servico = $_POST['servico'];

			echo "<strong>Detalhes do Orçamento:</strong> <br><br>";
			echo "Data: $data Tempo de garantia após a entrega $garantia Meses.<br><br>";
			echo "Aparelho para Manutenção: $aparelho <br><br>";
			echo "Serviço a ser executado: $servico <br><br>";
			switch ($servico) {
				case 'Formatação':
					echo " o valor sera de 80,00 Reais a mão de obra mais 50,00 Reais de equipamentos, <strong>totalizando 120 Reais.</strong> ";
					break;
				case 'Troca de Peças':
					echo "o valor sera de 100,00 Reais a mão de obra mais 50,00 Reais de equipamentos, <strong>totalizando 150 Reais.</strong> ";
					break;
				case 'Outros':
					echo "o valor sera de 150,00 Reais a mão de obra mais 50,00 Reais de equipamentos, <strong>totalizando 200 Reais.</strong> ";
					break;
				default:
					echo "Infelizmente não é possível realizar este serviço no momento.";
					break;
			}
				echo "<br><br>Declaro estar de acordo com os valores e informações acima descritos.<br> <strong>$cliente</strong>";

		?>
		<br><br>

		<p>Assinatura:___________________________________________</p>
		<p>Data:__/__/_____</p><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()">
		</form>

		<a href="index.html"> << voltar</a>
	</div>

	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>