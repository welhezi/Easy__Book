<?php
$h0 = isset($_GET['n0']) ? $_GET['n0'] : ' ' ; 
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
$h2 = isset($_GET['n2']) ? $_GET['n2'] : ' ' ;

require_once "connectBD.php"; echo "<br>";
$sql="UPDATE chambre SET numch='$h0',categorie='$h1',prix='$h2' WHERE chambre.numch='$h0'";
$request = mysqli_query($connect, $sql);
if($request){ echo "update with success";} else { echo "update error ";} 

?>