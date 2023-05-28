<!DOCTYPE html>
<html>
  <head>
    <title>user</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    .w3-sidebar {width: 120px;background: #222;}
    #main {margin-left: 120px}
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body class="w3-black">
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="https://media.istockphoto.com/vectors/user-icon-flat-isolated-on-white-background-user-symbol-vector-vector-id1300845620?k=20&m=1300845620&s=612x612&w=0&h=f4XTZDAv7NPuZbG0habSpU0sNgECM0X7nbKzTUta3n8=" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#reservation" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>RESERVATION</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#reservation" class="w3-bar-item w3-button" style="width:25% !important">RESERVATION</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<div class="w3-padding-large" id="main">
  <?php
require_once 'connectbd.php';
$cin=isset($_GET['cin'])?$_GET['cin']:'';
$sql = "SELECT  * FROM clients where clients.cin=".$cin;
if ($result = mysqli_query($connect, $sql)) {  $ff='';
if(mysqli_num_rows($result)>0){
   $row = mysqli_fetch_array($result);
  $ff=$ff."<header class='w3-container w3-padding-32 w3-center ' id='home'>
    <h1 class='w3-jumbo'><span class='w3-hide-small'>WELCOME <span>$row[1]</span> !</h1>
    <p>this is your account</p>
  </header>

  <!-- About Section -->
  <div class='w3-content w3-justify w3-text-grey w3-padding-64' id='about'>
    <h2 class='w3-text-light-grey'>$row[1]</h2>
    <hr style='width:200px' class='w3-opacity'>
    <p>Name : $row[1] $row[2]
    <br>
    CIN: $row[0]
    <br>
    Address: $row[3]
    <br>
    Tel : $row[4]
    </p>

    <form action='modif.php' method='get' align='center'>
    <button class='w3-button w3-round w3-orange w3-center' type='submit'><a href='modif.php?cin=$cin&nom=$row[1]&prenom=$row[2]&add=$row[3]&tel=$row[4]'> update </a></button>
    </form>

  <!-- reservation Section -->
  <div class='w3-padding-64 w3-content' id='reservation'>
    <h2 class='w3-text-light-grey'>Reservation</h2>
    <hr style='width:200px' class='w3-opacity'>";}}
    echo $ff;

    $sql1 = "SELECT  * FROM reservations where reservations.id_c=".$cin;
    if ($result1 = mysqli_query($connect, $sql1)) { 
    $d =""; 
    if(mysqli_num_rows($result1)>0){
        while ($row1 = mysqli_fetch_array($result1)) 
    { 
    $d=$d."<div class='w3-row w3-center w3-padding-16 w3-section w3-light-grey'>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[1]</span><br>
        Check-in
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[2]</span><br>
        Check-out
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[3]</span><br>
        Nights
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[4]</span><br>
        Adults
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[5]</span><br>
        Children
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row1[6]</span><br>
        number of the room
      </div>";

      $sql2= "SELECT * FROM chambre where chambre.numch=".$row1[6];
      if ($result2 = mysqli_query($connect, $sql2)) { 
        if(mysqli_num_rows($result2)>0){
        $row2 = mysqli_fetch_array($result2);
      $d=$d."<div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$row2[1]</span><br>
        Category
      </div>
      <div class='w3-quarter w3-section'>
        <span class='w3-xlarge'>$$row2[2]</span><br>
        Price
      </div>
      </div> ";}}
    } echo $d;
  }
}

?>
<form action='reservation.php' method='get'align='center'>
<button class="w3-button w3-round w3-orange w3-center " type="submit"><a href='reservation.php?cin=<?=$cin?>'> book now </a></button>
</form>
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Honolulu, HI 96815</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: info@halekulani.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>
  
<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="https://fr-fr.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/fr-FR"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
 </footer>

</div>
</body>
</html>