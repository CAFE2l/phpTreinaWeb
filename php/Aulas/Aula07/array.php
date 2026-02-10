<?php

$linguagens = ["PHP", "JavaScript", "Python"];

$linguagens[3] = "C";

print_r($linguagens);
echo "<br>";

$cursos = [
  "php" => [
    "nome_curso" => "curso de PHP moderno",
    "versao" => 8.2,
    "cargaHoraria" => 40,
    "status" => true
  ],
  "Javascript" => [
    "nome_curso" => "curso em vídeo de javascript",
    "versao" => 6,
    "cargaHoraria" => 40,
    "status" => true
  ]
];


$cursos["php"]["pre-requesito"] = "Lógica de Programação";
echo "<br>";
print_r($cursos);
echo "<br>";
echo "<br>";
echo $cursos["php"]["nome_curso"];

