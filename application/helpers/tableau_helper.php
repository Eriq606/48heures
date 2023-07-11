<?php
function isIn($array, $type, $idcompte)
{
  // Parcourir chaque élément du tableau
  foreach ($array as $element) {
    // Vérifier si le 'type' et 'idcompte' de l'élément courant sont identiques au nouvel élément
    if ($element['compte']['idcompte'] == $idcompte) {
      // Si oui, retourner false, car l'élément ne peut pas être inséré
      return false;
    }
  }
  // Retourner true pour indiquer que l'élément a été inséré avec succès
  return true;
}

function getObjectifsArrayDescrPourcentage($objectifs) {
  $arrayPourcentage = [];
  $arrayDescri = [];
  for ($i=0; $i < count($objectifs); $i++) { 
    $arrayPourcentage [] = $objectifs[$i]->pourcentage;
    $arrayDescri [] = $objectifs[$i]->descriObjectif;
  }
  
  return [ arrayStringToString($arrayDescri), arrayNumberToString($arrayPourcentage) ];
}

function getRegimesArrayDescrNombre($regimes) {
  $arrayPourcentage = [];
  $arrayDescri = [];
  for ($i=0; $i < count($regimes); $i++) { 
    $arrayPourcentage [] = $regimes[$i]->nombre;
    $arrayDescri [] = $regimes[$i]->descriRegime;
  }
  
  return [ arrayStringToString($arrayDescri), arrayNumberToString($arrayPourcentage) ];
}

function arrayStringToString($suraVe)
{
  $string = "[";
  $length = count($suraVe);
  for ($i = 0; $i < $length; $i++) {
    $string .= "'".$suraVe[$i]."'";
    if ($i < $length - 1) {
      $string .= ",";
    }
  }
  $string .= "]";
  return $string;
}

function arrayNumberToString($suraVe)
{
  $string = "[";
  $length = count($suraVe);
  for ($i = 0; $i < $length; $i++) {
    $string .= $suraVe[$i];
    if ($i < $length - 1) {
      $string .= ",";
    }
  }
  $string .= "]";
  return $string;
}


?>