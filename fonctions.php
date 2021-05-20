<?php

function TabLineaire1($duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){

	$i = 1;
	$taux = 1/$duree;
	$annuite = $valeur * $taux;
	$valeurcomptable = $valeur - $annuite;
	echo "Taux d'amortissement : ";
	echo $taux . '<br/>';

	echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
	

	for($i ; $i < $duree; $i++){
		$aservice++;
		$valeur = $valeur - $annuite;
		$valeurcomptable = $valeur - $annuite;
		echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
	}

}


function TabLineaire2($duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){

	echo "Durée d'amortissement : ";
	echo $duree . '<br/>';
	$i = 0;
	$taux = 1/$duree;

	
	echo "Taux d'amortissement : ";
	echo $taux . '<br/>';
	
	$nbj = 30 * $mservice;
	$nbj = $nbj + $jservice;
	$nbj = 360 - $nbj;
	$annuite = $valeur * $taux * ($nbj/360);
	$valeurcomptable = $valeur - $annuite;

	/*==============TABLEAU==============*/
/*1er Années*/
	echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
	
	
/*Années suivantes*/
	for($i ; $i < $duree; $i++){
		$aservice++;
		$valeur = $valeur - $annuite;
		$valeurcomptable = $valeur - $annuite;
		echo '<table style="border-collapse: collapse;width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
	}
	/*FIN FORMAT TABLEAU*/

}

function erreurFormulaire(){
	echo'<p style="font-family:Arial, sans-serif; margin-top:5px;">Remplissez le formulaire en entier</p>';
}

/*=======DEGRESSIF=======*/

function TabDeg1($duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){

  $i = 1;
  $taux = 1/$duree;
  $annuite = $valeur * $txD;
  $valeurcomptable = $valeur - $annuite;
  $txL = $tauxL;
  $txD = $tauxD;
  echo "Taux d'amortissement : ";
  echo $taux . '<br/>';
  $txD = (100/$duree)*$tauxD;


  echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Tx linéaire</th>
    <th style="border: 1px solid black;padding: 10px;">Tx dégressif</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txL . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txD . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
  

  for($i ; $i < $duree; $i++){
    $aservice++;
    $valeur = $valeur - $annuite;
    $valeurcomptable = $valeur - $annuite;
    echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Tx linéaire</th>
    <th style="border: 1px solid black;padding: 10px;">Tx dégressif</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txL . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txD . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
  }

}


function TabDeg2($duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){

  echo "Durée d'amortissement : ";
  echo $duree . '<br/>';
  $i = 0;
  $taux = 1/$duree;

  
  echo "Taux d'amortissement : ";
  echo $taux . '<br/>';
  
  $nbj = 30 * $mservice;
  $nbj = $nbj + $jservice;
  $nbj = 360 - $nbj;
  $annuite = $valeur * $taux * ($nbj/360);
  $valeurcomptable = $valeur - $annuite;

  /*==============TABLEAU==============*/
/*1er Années*/
  echo '<table style="border-collapse: collapse; width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Tx linéaire</th>
    <th style="border: 1px solid black;padding: 10px;">Tx dégressif</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txL . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txD . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
  
  
/*Années suivantes*/
  for($i ; $i < $duree; $i++){
    $aservice++;
    $valeur = $valeur - $annuite;
    $valeurcomptable = $valeur - $annuite;
    echo '<table style="border-collapse: collapse;width:100%;">
  <tr>
    <th style="border: 1px solid black;padding: 10px;">Années</th>
    <th style="border: 1px solid black;padding: 10px;">Base d\'amortissement</th>
    <th style="border: 1px solid black;padding: 10px;">Tx linéaire</th>
    <th style="border: 1px solid black;padding: 10px;">Tx dégressif</th>
    <th style="border: 1px solid black;padding: 10px;">Annuité</th>
    <th style="border: 1px solid black;padding: 10px;">Valeur Comptable</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;padding: 10px;">' . $aservice . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeur . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txL . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $txD . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $annuite . '</td>
    <td style="border: 1px solid black;padding: 10px;">' . $valeurcomptable . '</td>
  </tr>
</table>';
  }
  /*FIN FORMAT TABLEAU*/

}
