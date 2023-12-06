<?php
 echo "t";
$login=$_POST["login"];
$passwd=$_POST["passwd"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date_naiss=$_POST["date_naiss"];
$heure=$_POST["heure"];
$mail=$_POST["mail"];
$sexe=$_POST["sexe"];
$foot=$_POST["foot"];
$hand=$_POST["hand"]
$tennis=$_POST["tennis"];
$pays=$_POST["pays"];
$pays1=$_POST["pays1"];
$remraques=$_POST["remarques"];
require("config.php");
$conn=mysqli_connect($server,$username,$password,$db) or die ("probleme de connexion");
$sql="insert into users values('$login','$passwd','$nom','$prenom','$prenom','$date_naiss','$heure','$email','$sexe',$foot,$hand,$tennis,'$pays','$remarques');";
echo $sql;
























?>