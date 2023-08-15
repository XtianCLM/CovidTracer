$(".table").on("click", "tbody #EditHospitalrec", function(){
  var idEditHospital = $(this).attr("idEditHospital");
  window.location = "Main.php?loc=EditHospital&idEditHospital="+idEditHospital;
})

$(".table").on("click", "tbody #DelHospital", function(){
	var idDelHospital = $(this).attr("idDelHospital");
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
            window.location = "Main.php?loc=Hospital&idDelHospital="+idDelHospital;
        }
  })

})


