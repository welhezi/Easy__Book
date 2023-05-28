<!DOCTYPE html>
 <html lang="en">
 <script>
  function ajouter1()
  {document.getElementById("mydiv").innerHTML ='<object type="text/html" data="ajouter.php">';}
</script>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
    html {
    min-height: 100%;
    }
      
    body {
        background-image: url(https://media.istockphoto.com/vectors/documents-and-hand-with-pen-signs-documents-treaty-signing-concept-vector-id500641404?k=20&m=500641404&s=612x612&w=0&h=m5Y5fb49JWdRDeCLm9WeEHLUhBMozcC0eoTof18DZ_4=); /* The image used for background*/
        background-repeat: no-repeat; 
        background-position: right; 
        background-size: 50%; 
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
   <body class="w3-white" align="left" >
<div class='w3-margin'>
<p class='w3-large w3-text-black'><h1>UPDATE CUSTOMER SETTINGS!</h1></p>
<div class='w3-tag w3-text-white' id='demo'>
<?php $cin = isset($_GET['cin']) ? $_GET['cin'] : ' ' ;
$z="<form action='ajouter.php' method='get' style='height:400px;'>
<label>first name</label>
<br>
<input type='text' name='n1' id='n1'>
<br>

<label>last name </label>
<br>
<input type='text' name='n2' id='n2'>
<br>

<label>address</label>
<br>
<input type='text' name='n3' id='n3'>
<br>

<label>phone number</label>
<br>
<input type='number' name='n4' id='n4'>
<br>
<input type='hidden' name='cin' value='$cin'>
<input type='submit' value='update' onclick='ajouter1()'>
<div id='mydiv'></div>
</form>";
echo $z;
?>
</div>
</div>
   </body>  
 </html>
 