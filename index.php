<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="views/css/SignUp.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <title>Document</title>

</head>
<body>
   
     <?php
 // if (isset($_SESSION['estab_login'])) {
     // include "views/modules/NavBar.php"; 
     // echo'<script>
     //      Swal.fire("Establishment Sign Up Succesfully")

     //   </script>';
   // } 


      if(isset($_GET["route"])){
        if ($_GET["route"] == 'SignUp' || 
            $_GET["route"] == 'SignIn' ||        
            $_GET["route"] == 'EstabAcc'){
     
          require_once "controllers/SignUpctrl.php";
          require_once "models/SignUpModel.php";
       
          include "views/modules/".$_GET["route"].".php";
        }else{
        }
      }else{
           require_once "controllers/LogInctrl.php";
          require_once "models/LogInModel.php";
           
        include "views/modules/SignIn.php";
      }
  ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


 <script src="views/js/Cancel.js"></script>
</body>
</html>