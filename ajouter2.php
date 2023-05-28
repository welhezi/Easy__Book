<?php 
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
$h3 = isset($_GET['n3']) ? $_GET['n3'] : ' ' ;
require_once 'connectbd.php';
$s= "SELECT * FROM chambre ";
$r = mysqli_query($connect, $s); 
$h2 =mysqli_num_rows($r)+1; 
$sql="INSERT INTO chambre(numch, categorie, prix) VALUES ('$h2','$h1','$h3')";
$request = mysqli_query($connect, $sql);
if($request){ echo "insert with success";} else { echo "insert error ";} 

?>