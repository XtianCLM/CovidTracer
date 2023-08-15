<?php

if(isset($_SESSION)){
    
    echo'<script>
                     Swal.fire({
                      type: "success",
                      title: "You have successfully Logout",
                      showConfirmButton: true,
                      confirmButtonText: "Ok"
                      }).then(function(result){
                                if (result.value) {
                                window.location.href ="../../Tracer/index.php";
                                }
                            })


                </script>';
                session_destroy();
    
    
    
}
?>