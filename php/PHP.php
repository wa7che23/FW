<?php
include "adm.php";
$base=connect();
$a=$_GET['m'];
$b=$_GET['pr'];
$c=$_GET['tel'];
$d=$_GET['mail'];
$e=$_GET['gender'];
$f=$_GET['dt'];
$g=$_GET['cc'];
$h=$_GET['mdp'];


echo "nom,  ".$a."prenom  ".$b." numtel".$c."mail ".$d."genre, ".$e."dtn, ".$f."nationalite  ".$g." mdp  ".$h."    ";
$req="INSERT INTO us(id,nom,prenom,numtel,genre,mail,date,nationalite,mdp
)VALUES(null,'$a','$b','$c','$d','$e','$f','$g','$h')";

$resp=$base->exec($req);

if($resp==1)
{echo "jawik fisfis";}else{echo "zid thabit ";}

?>