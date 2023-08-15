$(".table").on("click", "tbody .settings", function(){
  var idEmployee = $(this).attr("idEmployee");
  window.location = "Main.php?loc=EditEmployee&idEmployee="+idEmployee;
})

$(".table").on("click", "tbody .delete", function(){
	var idEmployee = $(this).attr("idEmployee");
	Swal.fire({
        title: 'Do you want to delete this Account?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'cancel',
        confirmButtonText: 'Yes'
      }).then(function(result){
        if (result.value) {
            window.location = "Main.php?loc=Userprofile&idEmployee="+idEmployee;
        }
  })

})


