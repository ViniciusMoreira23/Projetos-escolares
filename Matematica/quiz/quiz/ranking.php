<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloranking.css"/>
</head>
<body>
	<div class="page-wrap">
		<h1>Ranking</h1>
		<?php

			$camino="./documents/ranking.txt";
			$handle=fopen($camino, "r");
			$matriz=array(array());
			$cont=0;
			while (!feof($handle)) {
				$linha=fgets($handle);
				$array=explode(";", $linha);
				$matriz[$cont][0]=$array[1];
				$matriz[$cont][1]=$array[0];
				$cont++;
				
			}
			rsort($matriz);
		?>
		<table class="table">
					<tr>
						
						<th>Nome</th>
						<th>Pontuação</th>
					</tr>
		<?php
			
			for ($i=0; $i < $cont ; $i++) { 
			
		?>
			
					<tr>
						<td><?php echo $matriz[$i][1]?></td>
						<td><?php echo $matriz[$i][0] ?></td>
					</tr>
		<?php
				}

				fclose($handle)

		?>
		</table>
	

	</div>

</body>
</html>