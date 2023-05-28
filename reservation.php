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
        background-image: url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/22/21/88/44/guest-room-desk-and-coffee.jpg?w=1200&h=-1&s=1); /* The image used for background*/
        background-repeat: no-repeat; 
        background-position: center; 
        background-size: cover; 
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
      function valider()
      {
        document.getElementById("v").innerHTML ='<object type="text/html" data="result.php">';
      }
    </script>
   <body class="w3-white" align="center">
      <div class='w3-margin'>
      <p class='w3-large w3-text-black'><h1>WELCOME!</h1></p>
      <p class='w3-tag w3-text-white' >Book your stay at Halekulani</p>
      </div>
 <?php $cin=isset($_GET['cin'])?$_GET['cin']:'';   
$q="<div align='center'>
<form name='f1' action='result.php' target='_blank' method='get' style='width:300px' >
<p class='w3-tag w3-text-white' style='width:300px'>cathegory</p>
<input type='radio' name='choix' value='simple'><i class='w3-button w3-large w3-yellow' style='width: 350px;' target='_blank'>simple</i>
<input type='radio' name='choix' value='double'><i class='w3-button w3-large w3-yellow' style='width: 350px;' target='_blank'>double</i>
<input type='radio' name='choix' value='suite'><i class='w3-button w3-large w3-yellow' style='width: 350px;' target='_blank'>suite</i>
<p class='w3-tag w3-text-white' style='width:300px'>check-in</p>
<p><input class='w3-input w3-padding-16 w3-border'  type='date' placeholder='check-in'  name='m1'></p>
<p class='w3-tag w3-text-white' style='width:300px'>check-out</p>
<p><input class='w3-input w3-padding-16 w3-border' type='date' placeholder='check-out' name='m2' ></p>
<p><input class='w3-input w3-padding-16 w3-border' type='number' placeholder='adults' name='m4' ></p>
<p><input class='w3-input w3-padding-16 w3-border' type='number' placeholder='children' name='m5' ></p>
<input type='hidden' name='cin' value='$cin'>
<input type='submit' class='w3-button w3-round w3-pale-red w3-block' value='book' ></input>
</form>
</div>";
echo $q;
?>   
<form name='f3' action='contact.php' method='get'align='center'>
<button type='submit' class='w3-button w3-round w3-blue '><a href='contact.php?cin=<?=$cin?>'> return </a></button>
</form>
         <div class='w3-container w3-xlarge w3-padding w3-margin'>
         <a href="https://fr-fr.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/fr-FR"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
         </div>  
   </body>  
 </html>
 