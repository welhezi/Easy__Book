<?php 
$cin = isset($_GET['cin']) ? $_GET['cin'] : ' ' ;
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
$h2 = isset($_GET['n2']) ? $_GET['n2'] : ' ' ;
$h3 = isset($_GET['n3']) ? $_GET['n3'] : ' ' ;
$h4 = isset($_GET['n4']) ? $_GET['n4'] : ' ' ;
require_once "connectBD.php"; echo "<br>";
$sql="UPDATE clients SET clients.nom='$h1',clients.prenom='$h2',clients.adresse='$h3',clients.tel='$h4' WHERE clients.cin=$cin";
$request = mysqli_query($connect, $sql);
if($request){ echo "update with success";} else { echo "update error ";} 

?>