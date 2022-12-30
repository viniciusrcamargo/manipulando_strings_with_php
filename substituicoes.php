<?php


$texto = "Num dia belo de domingo entrou um caramba e pqp";

//echo str_replace('caramba', '***',$texto);
echo str_replace(['caramba','pqp'], ['c', 'p'], $texto);

