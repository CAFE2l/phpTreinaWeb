<?php
$linguagens = ["PHP", "JavaScript", "Python"];

$linguagens2 = array("SQL", "React", "Typescript");

$curso = ["Curso de PHP Fundamentos", 8.7, 40, true];

$curso = [
  "nome_curso" => "Curso de PHP Fundamentos",
  "versao" => 8.5,
  "cargaHoraria" => 40,
  "status" => true
];

echo $curso["nome_curso"];
echo "<br>";

echo $curso["versao"];
echo "<br>";

echo $curso["cargaHoraria"];
echo "<br>";

echo $curso["status"];
echo "<br>";


