<?php 
$cin =isset($_GET['cin'])?$_GET['cin']:'';
$n1=isset($_GET['m1'])?$_GET['m1']:'';
$n2=isset($_GET['m2'])?$_GET['m2']:'';
$n3=isset($_GET['m3'])?$_GET['m3']:'';
$n4=isset($_GET['m4'])?$_GET['m4']:'';
$n5=isset($_GET['m5'])?$_GET['m5']:'';
$n6=isset($_GET['choix'])?$_GET['choix']:'';
echo '<br>';
require_once 'connectbd.php';echo "<br>";
$f="SELECT * FROM reservations";echo "<br>";
$res = mysqli_query($connect, $f);
$x=mysqli_num_rows($res);
$x=$x+1;
$var=0;
$s1="SELECT * FROM chambre where categorie='$n6' and numch not in (SELECT id_ch FROM reservations where (check_in >= '$n1' and check_out <= '$n2' ));"; 
if ($r1 = mysqli_query($connect, $s1)) { 
  if(mysqli_num_rows($r1)>0){ 
  $row1 = mysqli_fetch_array($r1);
  $v="INSERT INTO reservations(numr, check_in, check_out,nignts, adults, children, id_ch, id_c) VALUES ($x,'$n1','$n2','$n3',$n4,$n5,$row1[0],$cin)";
  $r = mysqli_query($connect,$v);
  if($r){echo "insert with success";} else { echo "insert error";echo "<br>";} 
    }  
        else{ echo 'sorry there is no room with this cathegory at this date ';}
  }else{ echo " sorry, there is no room with this categorie ";}

?>