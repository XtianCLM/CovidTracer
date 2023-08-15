<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Citizen Profile</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&family=Lobster&family=Staatliches&display=swap" rel="stylesheet">   
    <script src="https://kit.fontawesome.com/44a70f4717.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Profile.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    

</head>
<body>
   
     <?php
        session_start();
        require_once "../models/SignUpModel.php";
        include "modules/NavBar.php";
      if(isset($_GET["path"])){

        if ($_GET["path"] == 'CitizenProfile' || 
            $_GET["path"] == 'establishment' || 
            $_GET["path"] == 'EditCitizenProfile' || 
            $_GET["path"] == 'EditEstabProfile' ||  
            $_GET["path"] == 'TravelHistory' || 
             $_GET["path"] == 'ScanRecord' ||      
            $_GET["path"] == 'LogOut' ){
     
            require_once "../models/UpdateAccModel.php";
            require_once "../controllers/UpdateAccctrl.php";
             require_once "../models/EstablishmentModel.php";
            require_once "../controllers/Establishmentctrl.php";
       
          include "modules/".$_GET["path"].".php";
        }else{
           
        }
      }else{
      
      }
  ?>


	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>