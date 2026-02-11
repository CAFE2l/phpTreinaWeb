<?php

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
  ],
  "Python" => [
    "nome_curso" => "Curos de python mundo 4",
    "versao" => 3.14,
    "cargaHoraria" => 40,
    "status" => true
  ],
  "C" => [
    "nome_curso" => "Curos de C",
    "versao" => 3.14,
    "cargaHoraria" => 40,
    "status" => false
  ]
];


foreach($cursos as $curso){

  if($curso['status'] == false){
    break;
  }

  echo $curso['nome_curso'];
  echo "<br>";
  echo "Versão da ferramenta: " . $curso['versao'];
  echo "<br>";
  echo "Carga Horária: " . $curso['cargaHoraria'];
  echo "<br>";
  echo "Status: " . $curso['status'];
  echo "<br><br>";
}
