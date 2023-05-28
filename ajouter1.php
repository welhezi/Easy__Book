<?php 
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
$h2 = isset($_GET['n2']) ? $_GET['n2'] : ' ' ;
require_once 'connectbd.php';
$sql1 = "SELECT  * FROM chambre";
    if ($result1 = mysqli_query($connect, $sql1)) { 
     $i=1;
    if(mysqli_num_rows($result1)>0){
        while ($row1 = mysqli_fetch_array($result1)) 
    { $i++;}}}
$sql="INSERT INTO chambre(numch, categorie, prix) VALUES ('$i','$h1','$h2')";
$request = mysqli_query($connect, $sql);
if($request){ echo "add with success";} else { echo "add error ";} 

?>