<!doctype html>
<html>

	<head> 
		<meta charset="utf-8" /> 
		<title>PHP Quiz</title> 
		<link rel="stylesheet" type="text/css" href="./css/estiloprocessa.css" /> 
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head> 

<body> 
	
	<div class="page-wrap"> 

		<h1>Resultado:</h1> 

		<?php 

		$answer1 = $_POST['question-1-answers']; 
		$answer2 = $_POST['question-2-answers']; 
		$answer3 = $_POST['question-3-answers'];
		$answer4 = $_POST['question-4-answers'];  
		$answer5 = $_POST['question-5-answers'];  
		$answer6 = $_POST['question-6-answers'];  
		$answer7 = $_POST['question-7-answers'];  
		$answer8 = $_POST['question-8-answers'];  
		$answer9 = $_POST['question-9-answers'];  
		$answer10 = $_POST['question-10-answers'];  
		$answer11 = $_POST['question-11-answers'];  
		$answer12 = $_POST['question-12-answers'];  
		$answer13 = $_POST['question-13-answers'];  
		$answer14 = $_POST['question-14-answers'];  
		$answer15 = $_POST['question-15-answers'];  
		$answer16 = $_POST['question-16-answers'];  		
		$nome = $_POST['nomeusuario'];

		$totalCorrect = 0; 

		if ($answer1 == "B") { $totalCorrect++; } 
		if ($answer2 == "A") { $totalCorrect++; } 
		if ($answer3 == "A") { $totalCorrect++; } 
		if ($answer4 == "B") { $totalCorrect++; }
		if ($answer5 == "B") { $totalCorrect++; } 
		if ($answer6 == "A") { $totalCorrect++; } 
		if ($answer7 == "D") { $totalCorrect++; } 
		if ($answer8 == "C") { $totalCorrect++; } 
		if ($answer9 == "A") { $totalCorrect++; } 
		if ($answer10 == "D") { $totalCorrect++; } 
		if ($answer11 == "D") { $totalCorrect++; } 
		if ($answer12 == "A") { $totalCorrect++; } 
		if ($answer13 == "C") { $totalCorrect++; } 
		if ($answer14 == "C") { $totalCorrect++; } 
		if ($answer15 == "B") { $totalCorrect++; } 
		if ($answer16 == "A") { $totalCorrect++; }  

		echo "<div class='results'> $nome, você acertou: $totalCorrect de 16 perguntas</div>";
		
			$caminhoArquivo="./documents/ranking.txt";

			$handle=fopen($caminhoArquivo, "a");
			if(file_get_contents($caminhoArquivo)=="")
			{
				fwrite($handle,$nome.";".$totalCorrect);
			}
			else{
				fwrite($handle,PHP_EOL.$nome.";".$totalCorrect);
			}
		?> 
		<a href="ranking.php"><div class="link"><p> Confira o ranking aqui e veja como as outras pessoas se saíram</p></div></a> 
	</div> 

</body> 

</html>