<!doctype html>
<html>
<head> 
	<meta charset="utf-8" /> 
	<title>PHP Quiz</title> 
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" /> 
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head> 

<body> 

	<div class="page-wrap"> 
		<h1>Quiz</h1> 
		<form action="processa.php" method="post" id="quiz"> 
				
			<input type="text" name="nomeusuario" class="nomeusuario" placeholder="Seu nome">
			<ul class="pergunta"> 
				<!-- 1 -->
				<li class="pergunta_item"> 
						<h3>1) Quanto é 4<sup>7</sup> *  4<sup>5</sup> ?</h3> 
					<div class="option"> 
						<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" /> 
						<label for="question-1-answers-A">A)16<sup>12</sup> </label> 
					</div> 

					<div class="option"> 
						<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" /> 
						<label for="question-1-answers-B">B)4<sup>12</sup></label> 
					</div> 

					<div class="option"> 
						<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" /> 
						<label for="question-1-answers-C">C)16<sup>35</sup></label> 
					</div> 

					<div class="option"> 
						<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" /> 
						<label for="question-1-answers-D">D) 4<sup>35</sup></label> 
					</div> 
				</li> 

				<!-- 2 -->
				<li class="pergunta_item"> 
					<h3>2) 5 <sup>5</sup> é igual a:</h3> 
					<div class="option"> 
						<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" /> 
						<label for="question-2-answers-A">A)5<sup>3</sup>*5<sup>2</sup></label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" /> 
						<label for="question-2-answers-B">B) 25</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" /> 
						<label for="question-2-answers-C">C) 10<sup>1</sup>/2<sup>5</sup></label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" /> 
						<label for="question-2-answers-D">D) 5<sup>1</sup>*5<sup>5</sup></label> 
					</div> 
				</li> 

				<!-- 3 -->
				<li class="pergunta_item"> 
					<h3>3) Podemos dizer que 0*0 é igual a 0?</h3> 
					<div class="option"> 
						<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" /> 
						<label for="question-3-answers-A">A)  Sim, pois todo número vezes zero é zero. </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" /> 
						<label for="question-3-answers-B">B) Não, pois não é uma multiplicação válida.</label> 
				</li> 

				<!-- 4 -->
				<li class="pergunta_item"> 
					<h3>4)Podemos dizer que 0<sup>0</sup> é igual a 1?</h3> 
					<div class="option"> 
						<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" /> 
						<label for="question-4-answers-A">A) Sim, todo número elevado a 0 é igual a 1. </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" /> 
						<label for="question-4-answers-B">B) Não, 0<sup>0</sup> é indeterminação.</label> 
					</div>
				</li> 

				<!--5 -->
				<li class="pergunta_item"> 
					<h3>5) Podemos dizer que a raiz quadrada de qualquer número ao quadrado é igual a ele mesmo?</h3> 
					<div class="option"> 
						<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" /> 
						<label for="question-5-answers-A">A) Sim, pois é só cortar a raiz com a potência.  </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" /> 
						<label for="question-5-answers-B">B) Não, a raiz quadrada de um número ao quadrado é o módulo dele mesmo.</label> 
					</div>
				</li>

				<!-- 6-->
				<li class="pergunta_item"> 
					<h3>6) -10<sup>2</sup> e 10<sup>2</sup>  tem o mesmo resultado?</h3> 
					<div class="option"> 
						<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" /> 
						<label for="question-6-answers-A">A) Não, eles são opostos um do outro (um negativo e o outro positivo).
 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" /> 
						<label for="question-6-answers-B">B)  Sim, pois qualquer número elevado ao quadrado fica positivo, então aquele sinal de negativo não importa.</label> 
					</div>
				</li> 

				<!--7 -->
				<li class="pergunta_item"> 
					<h3>7) 4x<sup>-5</sup> é igual a:</h3> 
					<div class="option"> 
						<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" /> 
						<label for="question-7-answers-A">A)-4x<sup>5</sup>  </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" /> 
						<label for="question-7-answers-B">B) x/4x<sup>5</sup></label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" /> 
						<label for="question-7-answers-C">C) x<sup>5</sup>/4</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" /> 
						<label for="question-7-answers-D">D) 4x<sup>5</sup></label> 
					</div> 
				</li> 

				<!-- 8-->
				<li class="pergunta_item"> 
					<h3>8) Qual é o valor de 3,25 * 10,5?</h3> 
					<div class="option"> 
						<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" /> 
						<label for="question-8-answers-A">A) 30,155 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" /> 
						<label for="question-8-answers-B">B) 31,55</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" /> 
						<label for="question-8-answers-C">C) 34,125</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" /> 
						<label for="question-8-answers-D">D) 32,55</label> 
					</div> 
				</li> 
				
					<!-- 9 -->
				<li class="pergunta_item"> 
					<h3>9) Qual é o valor de 45,28/2?</h3> 
					<div class="option"> 
						<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" /> 
						<label for="question-9-answers-A">A) 22,75 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" /> 
						<label for="question-9-answers-B">B) 22,14</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" /> 
						<label for="question-9-answers-C">C) 20,156</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question--answers" id="question-9-answers-D" value="D" /> 
						<label for="question-9-answers-D">D) 20,5</label> 
					</div> 
				</li> 
				
				<!--10 -->
				<li class="pergunta_item"> 
					<h3>10) O valor da expressão 3 + 5 x 2 – 4 : 2 é:</h3> 
					<div class="option"> 
						<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" /> 
						<label for="question-10-answers-A">A)  6 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" /> 
						<label for="question-10-answers-B">B) 8</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" /> 
						<label for="question-10-answers-C">C) 14</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" /> 
						<label for="question-10-answers-D">D) 11</label> 
					</div> 
				</li> 

				<!-- 11-->
				<li class="pergunta_item"> 
					<h3>11) Efetuando 43 + 34 – 92 encontramos:</h3> 
					<div class="option"> 
						<input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" /> 
						<label for="question-11-answers-A">A) 15 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" /> 
						<label for="question-11-answers-B">B) 24</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" /> 
						<label for="question-11-answers-C">C)-34</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" /> 
						<label for="question-11-answers-D">D)-15</label> 
					</div> 
				</li> 

				<!--12 -->
				<li class="pergunta_item"> 
					<h3>12) Efetuando os cálculos da expressão: (6+3×12 ) ÷ (3×4-5 ) , resulta:</h3> 
					<div class="option"> 
						<input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" /> 
						<label for="question-12-answers-A">A) 6 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" /> 
						<label for="question-12-answers-B">B) 8</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" /> 
						<label for="question-12-answers-C">C) 12</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" /> 
						<label for="question-12-answers-D">D) 16</label> 
					</div> 
				</li> 

				<!-- 13-->
				<li class="pergunta_item"> 
					<h3>13) Laura tinha 50 reais. Gastou 20 reais com lanche, e metade do que sobrou gastou no cinema. Qual expressão abaixo indica a quantia que ela gastou no cinema?</h3> 
					<div class="option"> 
						<input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" /> 
						<label for="question-13-answers-A">A)  50 – 20 : 2 </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" /> 
						<label for="question-13-answers-B">B) 50 – 20 – 10</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" /> 
						<label for="question-13-answers-C">C) ( 50 – 20 ) : 2</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" /> 
						<label for="question-13-answers-D">D) 50 – ( 20 : 2 )</label> 
					</div> 
				</li> 

				<!-- 14-->
				<li class="pergunta_item"> 
					<h3>14) Qual das expressões a seguir não representa a seguinte expressão: (2<sup>3</sup>)<sup>3</sup>:</h3> 
					<div class="option"> 
						<input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" /> 
						<label for="question-14-answers-A">A) 2<sup>9</sup> </label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" /> 
						<label for="question-14-answers-B">B) 8<sup>3</sup></label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" /> 
						<label for="question-14-answers-C">C) 2<sup>6</sup></label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" /> 
						<label for="question-14-answers-D">D)64*2<sup>3</sup></label> 
					</div> 
				</li> 
				<!--15 -->	
				<li class="pergunta_item"> 
					<h3>15) Se uma máquina que custa 140 reais,  recebe um desconto de 50% no primeiro mês e, no segundo, o preço dela recebe um aumento de 50%. Qual o valor para quem pagar no segundo mês?</h3> 
					<div class="option"> 
						<input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" /> 
						<label for="question-15-answers-A">A) R$ 150,00</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" /> 
						<label for="question-15-answers-B">B) R$ 105,00</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" /> 
						<label for="question-15-answers-C">C) R$ 500,00</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" /> 
						<label for="question-15-answers-D">D) R$ 250,00</label> 
					</div> 
				</li> 
				<!-- 16-->
				<li class="pergunta_item"> 
					<h3>16) Se 5 trabalhos são apresentados em uma hora, quantos trabalhos podem ser apresentados em (5<sup>2</sup>*5<sup>7</sup>) /5<sup>9</sup> hora(s)?</h3> 
					<div class="option"> 
						<input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" /> 
						<label for="question-16-answers-A">A) 5 trabalhos.</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" /> 
						<label for="question-16-answers-B">B) 50 trabalhos.</label> 
					</div>
					<div class="option"> 
						<input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" /> 
						<label for="question-16-answers-C">C) 10 trabalhos.</label> 
					</div> 
					<div class="option"> 
						<input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" /> 
						<label for="question-16-answers-D">D) 25 trabalhos.</label> 
					</div> 
				</li> 
			</ul> 
		<input type="submit" value="Enviar respostas" class="button" /> 
		<input type="reset" value="Limpar" class="button" /> 
	</form> 

</div> 

</body> 

</html> 