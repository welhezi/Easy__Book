<?php 
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
require_once 'connectbd.php';
$sql="DELETE FROM chambre WHERE chambre.categorie='$h1'";
$request = mysqli_query($connect, $sql);
if($request){ echo "delete with success";} else { echo "delete error ";} 

?>