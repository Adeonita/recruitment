<?php
  include("../exibearray.php");

  $frase = "O problema foi resolvido";
  $fraseDividida = explode(" ", $frase); //Divide a frase
  $arrayResultante = array();  //Criação da variável array resultante
  for($i = count($fraseDividida); $i >= 0; $i--){  //Percorre a string dividida na ordem decrescente ao mesmo tempo que preeneche o array resultante
    $arrayResultante[] = $fraseDividida[$i];
  }

  echo "<h2>Dada a frase: $frase </h2>";
  echo "<h2>A sua reversa é: ";

  foreach ($arrayResultante as $value) {
    echo $value." ";
  }

 echo "</h2>";

 ?>
