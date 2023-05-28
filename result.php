<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Links website</title>
    <style>
    
    html {
    min-height: 100%;
    }
      
    body {
        background-image: url(https://us.123rf.com/450wm/279photo/279photo1705/279photo170502055/78400686-formulaire-de-r%C3%A9servation-de-chambre-sur-fond-de-r%C3%A9ception-de-l-h%C3%B4tel.jpg?ver=6); /* The image used for background*/
        background-repeat: no-repeat; /* Do not repeat the image */
        background-position: right; /* Center the image */
        background-size: 80%; /* Resize the background image to cover the entire container */
        font-family: 'Syne', sans-serif; 
        }
    
    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }
    
    .image-container {
      text-align: center;
      width: 100%;
    }
    
    .links-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }
    
    .w3-yellow, .w3-hover-purple:hover {
    color: rgba(40, 42, 53)!important;
    background-color: rgba(255, 244, 163, 0.9) !important;
    }
    </style>
   </head>
   <script>
function valider(){
	document.getElementById("v").innerHTML ='<object type="text/html" data="h.php">';}
</script>
   <body class="w3-white" align="left">
<div class='w3-margin'>
      <p class='w3-large w3-text-black'><h1>Your Stay!</h1></p>
      <div class='w3-tag w3-text-white' id='demo'>
      <?PHP

$cin =isset($_GET['cin'])?$_GET['cin']:'';
$n1=isset($_GET['m1'])?$_GET['m1']:'';
$n2=isset($_GET['m2'])?$_GET['m2']:'';
$n4=isset($_GET['m4'])?$_GET['m4']:'';
$n5=isset($_GET['m5'])?$_GET['m5']:'';
$n6=isset($_GET['choix'])?$_GET['choix']:'';

if($n6=='simple'){$prix='$650';}
else if($n6=='double'){$prix='$720';}
else if($n6=='suite'){$prix='$850';}
else {$prix='';}
$dateDifference = strtotime($n2) - strtotime($n1);
$n3  = floor($dateDifference / (60 * 60 * 24)); 
$form="<h5>check-in : ".$n1."</h5><br><h5> check-out : ".$n2." </h5><br><h5> nights : ".$n3."</h5><br><h5> adults : ".$n4." </h5><br><h5> children : ".$n5."</h5><br><h5> category : ".$n6."</h5><br><h5> Price : ".$prix."</h5>";
echo $form;
$v="<form name='f2' action='h.php' method='get'align='center'>
<button type='submit' class='w3-button w3-round w3-pale-red '><a href='h.php?cin=$cin&m1=$n1&m2=$n2&m3=$n3&m4=$n4&m5=$n5&choix=$n6'> validate </a></button>
<div id='v'></div>
</form>
<br>
<form name='f3' action='reservation.php' method='get'align='center'>
<button type='submit' class='w3-button w3-round w3-pale-red '><a href='reservation.php?cin=$cin'> return </a></button>
</form>";
echo $v;
?>    
</div>
</div>
   </body>  
 </html>
 