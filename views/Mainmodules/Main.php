<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Citizen Profile</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">    

<!-- own css -->
      <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/Universalcss.css"> 
    <link rel="stylesheet" type="text/css" href="css/tips.css">
    <link rel="stylesheet" type="text/css" href="css/Search.css"> 
     <link rel="stylesheet" type="text/css" href="css/Hospital.css">
    <link rel="stylesheet" type="text/css" href="css/RTPCR.css">
    <link rel="stylesheet" type="text/css" href="css/Users.css">
    <link rel="stylesheet" type="text/css" href="css/Areas.css">
    <link rel="stylesheet" type="text/css" href="css/citizen.css">
    <link rel="stylesheet" type="text/css" href="css/establishment.css">
    <link rel="stylesheet" type="text/css" href="css/AddEmployee.css">
    <link rel="stylesheet" type="text/css" href="css/QuarantineFacility.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&family=Lobster&family=Staatliches&display=swap" rel="stylesheet">   
    <script src="https://kit.fontawesome.com/44a70f4717.js" crossorigin="anonymous"></script>
<!--     <link rel="stylesheet" href="css/Profile.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    

</head>
<body>
   
     <?php
        session_start();
        include "modules/NavBar.php";
        // include "modules/Covidupdates.php";

      if(isset($_GET["loc"])){

        if ($_GET["loc"] == 'LogOut' || 
            $_GET["loc"] == 'Covidupdates' || 
            $_GET["loc"] == 'Userprofile' ||   
            $_GET["loc"] == 'employee' ||
            $_GET["loc"] == 'EditCitizen' || 
            $_GET["loc"] == 'AddEmployee' ||
            $_GET["loc"] == 'establishment' ||
            $_GET["loc"] == 'EditEstablishment' ||
            $_GET["loc"] == 'ShowEntry'||
            $_GET["loc"] == 'EditEmployee' ||     
            $_GET["loc"] == 'citizen'||
            $_GET["loc"] == 'ShowHistory'||
            $_GET["loc"] == 'RTPCR' ||
            $_GET["loc"] == 'AddRtpcr' ||
            $_GET["loc"] == 'EditRtpcr' ||
            $_GET["loc"] == 'quarantine'||
            $_GET["loc"] == 'AddFacility' ||
            $_GET["loc"] == 'AddPerson' ||
            $_GET["loc"] == 'EditPerson' ||
            $_GET["loc"] == 'EditHospital' || 
            $_GET["loc"] == 'AddHospital' || 
            $_GET["loc"] == 'Hospital' ||
             $_GET["loc"] == 'Navigation' ||
            $_GET["loc"] == 'CovidAreas'){
     
            require_once "../../models/EmployeeList.php";
            require_once "../../controllers/Employeectrl.php";
            require_once "../../controllers/Citizenctrl.php";
            require_once "../../models/CitizenModel.php";
            require_once "../../models/RtpcrModel.php";
            require_once "../../controllers/Rtpcrctrl.php";
            require_once "../../models/FacilitiesModel.php";
            require_once "../../controllers/Facilitiesctrl.php";
             require_once "../../models/EstablishmentModel.php";
            require_once "../../controllers/Establishmentctrl.php";
            require_once "../../models/HospitalModel.php";
            require_once "../../controllers/Hospitalctrl.php";
             require_once "../../models/NavigationModel.php";
            require_once "../../controllers/Navigationctrl.php";
       
          include "modules/".$_GET["loc"].".php";
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

    <script type="text/javascript" src="js/sidebar.js"></script>
    <script src="js/editfunction.js"></script>
    <script src="js/testEditDel.js"></script>
    <script src="js/quarantineEditDel.js"></script>
    <script src="js/citEditDel.js"></script>
    <script src="js/estEditDel.js"></script>
    <script src="js/hosEditDel.js"></script>

</body>
</html>