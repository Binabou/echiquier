
<?php

// Colonnes/Lignes

if(!isset($_POST['col'])){
		$col=8;
	}
	else {
		$col=$_POST['col']; 
	}

if(!isset($_POST['lig'])){
		$lig=8;
	}
else {
		$lig=$_POST['lig']; 
	}

//Couleur

if(!isset($_POST['couleur1'])){
		$couleur1="black";
	}
	else {
		$couleur1=$_POST['couleur1']; 
	}

	if(!isset($_POST['couleur2'])){
		$couleur2="green";
	}
	else {
		$couleur2=$_POST['couleur2']; 
	}



setcookie ('couleur1',$couleur1,time()+60*60*24*365*10);
setcookie ('couleur2',$couleur2,time()+60*60*24*365*10);
?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Echiquier</title>
  <style>
	table 	    { border-collapse: collapse;}
	td 	     	{ width:50px; height:50px; padding:0}
	.clair	    { background:<?php echo $couleur1; ?>;}
	.sombre	    { background:<?php echo $couleur2; ?>;}
	.img	    { margin:0;padding:0;}
	#contenu    { width:500px; margin: 0 auto;}
  </style>
</head>
<body>


<div id="contenu">

<table>


<?php


$ligmax=$lig;
$colmax=$col;

$case[1][1]="cavalier_n.png";
$case[1][2]="cavalier_b.png";
$case[1][3]="dame_b.png";
$case[1][4]="dame_n.png";
$case[1][5]="fou_b.png";
$case[1][6]="fou_n.png";
$case[1][7]="pion_b.png";
$case[1][8]="pion_n.png";



for ($lig=$ligmax; $lig>0; $lig--){

	echo "<tr>";

	for ($col=1; $col<=$colmax; $col++){

		$couleur=(($lig+$col)%2==0)?"clair":"sombre"; //Operateur ternaire


		if (isset($case[$lig][$col])){
			$piece=$case[$lig][$col];
		}
		else {
			$piece='';
		}

		echo "<td class=\"$couleur\"><img src=\"images/$piece\" alt=\"\"></td>";
	}

	echo "</tr>";
}

?>
</table>






</div>
</body>
</html>