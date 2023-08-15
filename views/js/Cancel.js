$(".button").on("click", "input #Cancel", function(){
  Swal.fire({
                      type: "success",
                      title: "Cancel SignUp",
                      showConfirmButton: true,
                      confirmButtonText: "Ok"
                      }).then(function(result){
                                if (result.value) {
                                window.location.href ="../../Tracer/index.php";
                                }
                            })

})