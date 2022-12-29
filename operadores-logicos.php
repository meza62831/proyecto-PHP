<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan = false;

// And

# var_dump($michis_felinos && $michis_4_patas);

// Or
# var_dump($michis_4_patas || $michis_vuelan);

// Not
# var_dump(!$michis_4_patas);

// Experimento
# $resultado = $michis_4_patas || $michis_programan;

# var_dump($resultado);

$es_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//AND
var_dump($es_michi_grande && $le_gusta_comer);
# bool(true)
echo "\n";

//OR
var_dump($es_michi_grande || $sabe_volar);
# bool(true)
echo "\n";

//OR
var_dump($sabe_volar || $tiene_2_patas);
# bool(false)
echo "\n";

//NOT
var_dump(!$le_gusta_comer);
# bool(false)
echo "\n";

//NOT+AND
var_dump(!$le_gusta_comer && $es_michi_grande);
# bool(false)
echo "\n";

echo "\n";