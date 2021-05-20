<?php

require 'fonctions.php';
require 'Formulaire.php';

if($_POST['jservice'] == "01" || $_POST['jservice'] == "02" && $_POST['mservice'] == "01" && $_POST['type']== "Lineaire"){
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabLineaire1($duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
else if ($_POST['type'] == "Lineaire") {
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabLineaire2($duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
else{
	erreurFormulaire();
}

/*====DEGRESSIF====*/

/*if($_POST['duree'] == "03" || $_POST['duree'] == "04" && $_POST['type']== "Degressif"){
	$tauxD = "1.25";
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabDeg1($duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
if($_POST['duree'] == "05" || $_POST['duree'] == "06" && $_POST['type']== "Degressif"){
	$tauxD = "1.75";
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabDeg1($duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
if($_POST['duree'] == "07" || $_POST['duree'] == "08" || $_POST['duree'] == "09" || $_POST['duree'] == "10" || $_POST['duree'] == "11" || $_POST['duree'] == "12" || $_POST['duree'] == "13" && $_POST['type']== "Degressif"){
	$tauxD = "2.25";
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabDeg1($duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
if($_POST['duree'] == "07" || $_POST['duree'] == "08" || $_POST['duree'] == "09" || $_POST['duree'] == "10" || $_POST['duree'] == "11" || $_POST['duree'] == "12" || $_POST['duree'] == "13" && $_POST['type']== "Degressif"){


*/