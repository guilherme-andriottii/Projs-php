<?php
$cidade = "Bauru"; /* Aqui é armazenado o valor da variável "cidade", esse
mesmo processo é repetido nas variáveis "dia","mes" e "ano". */
$dia = "6"; 
$mes = "Março"; 
$ano = "2025"; 

$texto =  "<b>$cidade</b>, dia $dia de $mes de $ano "; /* O seguinte processo serve para 
que seja criada uma string onde o texto é armazenado para que seja possível a 
utilização de Negrito, Bold, no texto. */

echo "$texto "; /* Aqui portanto, é impressa a variável string "texto" a qual é
o resultado final da concatenação de todas as variáveis armazenadas em tal. */ 
?>