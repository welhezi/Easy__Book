<!DOCTYPE html>
<html>
  <head>
    <title>admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    .w3-sidebar {width: 150px;background: #222;}
    #main {margin-left: 120px}
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body class="w3-black">
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="https://www.zebulon.fr/wp-content/uploads/2018/09/icone-compte-administrateur-windows-226_full.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#room" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>rooms</p>
  </a>
  <a href="#user" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>customers </p>
  </a>
  <a href="#booking" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>booking </p>
  </a>
  <a href="#facture" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>payment</p>
  </a>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
  <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#room" class="w3-bar-item w3-button" style="width:25% !important">ROOM MANAGEMENT</a>
    <a href="#user" class="w3-bar-item w3-button" style="width:25% !important">CUSTOMER MANAGEMENT</a>
    <a href="#booking" class="w3-bar-item w3-button" style="width:25% !important">BOOKING MANAGEMENT</a>
    <a href="#facture" class="w3-bar-item w3-button" style="width:25% !important">PAYMENT</a>
  </div>
</div>

<div class="w3-padding-large" id="main">
<header class='w3-container w3-padding-32 w3-center ' id='home'>
    <h1 class='w3-jumbo'><span class='w3-hide-small'>WELCOME <span>Admin</span> !</h1>
    <p>this is your account</p>
  </header>

  <div class='w3-content w3-justify w3-text-grey w3-padding-64' id='about'>
    <h2 class='w3-text-light-grey'>OUMAIMA</h2>
    <hr style='width:400px' class='w3-opacity'>
    <p>Name : oumaima
    <br>
    CIN : 78457854
    <div class='w3-section'>
      <p><i class='fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> skira, tastour, 9080</p>
      <p><i class='fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> Phone: +216 14582514</p>
      <p><i class='fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right'> </i> Email : ouelhaziouma123@gmail.com</p>
    </div>
    </p>
  </div>
  <div class='w3-padding-64 w3-content' id='room'>
    <h2 class='w3-text-light-white'>ROOMS MANAGEMENT </h2>
    <hr style='width:200px' class='w3-opacity'>
 <?php
 require_once 'connectbd.php';
 $sql = "SELECT  * FROM chambre ";$nb_rooms=0;
 if ($result = mysqli_query($connect, $sql)) {  
 if(mysqli_num_rows($result)>0){ 
    while ($row = mysqli_fetch_array($result)) 
    { $nb_rooms++;}
$e="<h6>the total number of rooms is $nb_rooms</h6>";echo $e;}}
?>
<div align='center'>
<form action='ajout_ch.html' method='get' >
<button class="w3-button w3-round w3-orange w3-center " type="submit"> add a room </button>
</form>
<br>
<form action='modif_ch.php' method='get' >
<button class="w3-button w3-round w3-orange w3-center " type="submit"> update a room </button>
</form>
<br>
<form action='supp_ch.php' method='get' >
<button class="w3-button w3-round w3-orange w3-center " type="submit"> delete a room </button>
</form>
 </div>
 <br><p align='center'><i>CATEGORY :</i></p>
 <div>
<form action='ajout_ca.html' method='get' >
<button class="w3-button w3-round w3-orange w3-center " type="submit"> add a category </button>
</form>
<br>
<form action='supp_ca.php' method='get' >
<button class="w3-button w3-round w3-orange w3-center " type="submit"> delete a category </button>
</form>
 </div>
 </div>
<div class="w3-padding-64 w3-content w3-text-white" id="user">
    <h2 class="w3-text-light-grey">CUSTOMER MANAGEMENT</h2>
    <hr style="width:450px" class="w3-opacity">
<?php
 require_once 'connectbd.php';
 $sql1 = "SELECT  * FROM clients ";$nb_clients=0;
 if ($result1 = mysqli_query($connect, $sql1)) {  
 if(mysqli_num_rows($result1)>0){ 
    while ($row = mysqli_fetch_array($result1)) 
    { $nb_clients++;}
$e="<h6 >the total number of customers is $nb_clients</h6>";echo $e;}}
$e="<br><h5 align='left'><i>clients details :</i></h5>";echo $e;
    $sql1 = "SELECT  * FROM clients ";
    if ($result1 = mysqli_query($connect, $sql1)) { 
    $tr =""; 
    if(mysqli_num_rows($result1)>0){
        while ($row1 = mysqli_fetch_array($result1)) 
    { 
$tr =$tr."<tr style='background-color:white;color:black'>
<td > $row1[0]</td>
<td > $row1[1]</td>
<td > $row1[2]</td>
<td > $row1[3]</td>
<td > $row1[4]</td>
</tr>" ;
} 
	}
else{
$tr ="<tr ><td >no clients </td></tr>";}	
$table ="<center>
<table cellspacing='0' cellpading='0' style='border:1px solid #E0EAEF;width:900px;text-align:center' border='1'>
<tr style='background-color:#F3CAF0;color:blue'>
<td><b><i> CIN : </i></b></td>
<td><b><i> FIRST NAME : </i></b></td>
<td><b><i> LAST NAME : </i></b></td>
<td><b><i> ADDRESS : </i></b></td>
<td><b><i> TEL : </i></b></td>
</tr>
$tr
</table></center>";

echo $table;
}    

?>
 </div>
  

<div class="w3-padding-64 w3-content w3-text-white" id="booking">
    <h2 class="w3-text-light-grey">BOOKING MANAGEMENT</h2>
    <hr style="width:450px" class="w3-opacity">
<?php
 require_once 'connectbd.php';
 $sql2 = "SELECT  * FROM reservations ";$nb_res=0;
 if ($result2 = mysqli_query($connect, $sql2)) {  
 if(mysqli_num_rows($result2)>0){ 
    while ($row = mysqli_fetch_array($result2)) 
    { $nb_res++;}
$e="<h6 >the total number of reservations is $nb_res</h6>";echo $e;}}
$e="<br><h5 align='left'><i>booking details :</i></h5>";echo $e;
    $sql3 = "SELECT * FROM clients; ";
    if ($result3 = mysqli_query($connect, $sql3)) { 
    $tr =""; 
    if(mysqli_num_rows($result3)>0){
        while ($row3 = mysqli_fetch_array($result3)) 
    { 
        $sql4 = "SELECT  * FROM reservations where reservations.id_c='$row3[0]';";
    if ($result4 = mysqli_query($connect, $sql4)) { 
    $tr =""; $e="<br><h5 align='left'><i>booking details for user cin = $row3[0] :</i></h5>";echo $e;
    if(mysqli_num_rows($result4)>0){
        while ($row4 = mysqli_fetch_array($result4)) 
    {   $sql5= "SELECT * FROM chambre where chambre.numch='$row4[6]';";
        if ($result5 = mysqli_query($connect, $sql5)) { 
          if(mysqli_num_rows($result5)>0){
          $row5 = mysqli_fetch_array($result5);
$tr =$tr."<tr style='background-color:white;color:black'>
<td > $row4[0]</td>
<td > $row4[1]</td>
<td > $row4[2]</td>
<td > $row4[3]</td>
<td > $row4[4]</td>
<td > $row4[5]</td>
<td > $row4[6]</td>
<td > $row5[1]</td>
<td > $row5[2]</td>
</tr>" ;
} 
	}}}
else{
$tr ="<tr ><td > no booking rooms </td></tr>";}	
$table ="<center>
<table cellspacing='0' cellpading='0' style='border:1px solid #E0EAEF;width:1020px;text-align:center' border='1'>
<tr style='background-color:#F3CAF0;color:blue'>
<td><b><i> NUMBER OF RESERVATION : </i></b></td>
<td><b><i> CHECK_IN : </i></b></td>
<td><b><i> CHECK_OUT : </i></b></td>
<td><b><i> NIGHTS : </i></b></td>
<td><b><i> ADULTS : </i></b></td>
<td><b><i> CHILDREN : </i></b></td>
<td><b><i> NUMBER OF THE ROOM : </i></b></td>
<td><b><i> CATEGORY : </i></b></td>
<td><b><i> PRICE : </i></b></td>
</tr>
$tr
</table></center>";

echo $table;
}  }} }
?>
 </div>

 <div class="w3-padding-64 w3-content w3-text-white" id="facture">
    <h2 class="w3-text-light-grey">PAYMENT</h2>
    <hr style="width:450px" class="w3-opacity">
 <?php 
 $e="<br><h5 align='left'><i>payment details :</i></h5>";echo $e;
 $sql3 = "SELECT * FROM clients; ";
 if ($result3 = mysqli_query($connect, $sql3)) { 
 $tr =""; 
 if(mysqli_num_rows($result3)>0){
     while ($row3 = mysqli_fetch_array($result3)) 
 { 
     $sql4 = "SELECT  * FROM reservations where reservations.id_c='$row3[0]';";
 if ($result4 = mysqli_query($connect, $sql4)) { 
 $tr =""; 
 if(mysqli_num_rows($result4)>0){$prix=0;
     while ($row4 = mysqli_fetch_array($result4)) 
 {   $sql5= "SELECT * FROM chambre where chambre.numch='$row4[6]';";
     if ($result5 = mysqli_query($connect, $sql5)) { 
       if(mysqli_num_rows($result5)>0){  $row5 = mysqli_fetch_array($result5);$prix=$prix+(intval($row4[3])*intval($row5[2]));} 
     }

}
$tr =$tr."<tr style='background-color:white;color:black'>
<td > $row3[0]</td>
<td > $row3[1]</td>
<td > $row3[2]</td>
<td > $ $prix</td>
</tr>" ;}else{$tr ="<tr ><td > no booking rooms for athers</td></tr>";}}
$table ="<center>
<table cellspacing='0' cellpading='0' style='border:1px solid #E0EAEF;width:1020px;text-align:center' border='1'>
<tr style='background-color:#F3CAF0;color:blue'>
<td><b><i> CIN : </i></b></td>
<td><b><i> FIRST NAME : </i></b></td>
<td><b><i> LAST NAME : </i></b></td>
<td><b><i> TOTAL PRICE : </i></b></td>
</tr>
$tr
</table></center>";
echo $table;
} } }

 
 
 ?>
<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
<a href="https://fr-fr.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/fr-FR"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
 </footer>

</body>
</html>