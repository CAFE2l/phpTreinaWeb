<?php
error_reporting(E_ALL);
echo "inicio do arquivo inclusão <br>";
require_once "../Aula04/variaveis.php";


echo "<br>mostrando a variavel nome arquivo inclusao.php: $nome<br>";

include_once "../Aula12/funcoes/personalizadas.php";

echo "<br> estou chamando a função soamr no arquivo inclusão.php: " . somar(10, 10);

echo "<br>Fim do arquivo de inclusão";



