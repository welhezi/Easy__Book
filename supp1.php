<?php 
$h1 = isset($_GET['n1']) ? $_GET['n1'] : ' ' ;
require_once 'connectbd.php';
$sql1 = "SELECT  * FROM chambre";
    if ($result1 = mysqli_query($connect, $sql1)) { 
     $i=1;
    if(mysqli_num_rows($result1)>0){
        while ($row1 = mysqli_fetch_array($result1)) 
    { $i++;}}}
$sql="DELETE FROM chambre WHERE chambre.numch='$h1'";
$request = mysqli_query($connect, $sql);
if($request){ echo "delete with success";} else { echo "delete error ";} 

?>