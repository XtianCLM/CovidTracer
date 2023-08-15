$(".table").on("click", "tbody #QuaEdit", function(){
  var idEdit = $(this).attr("idEdit");
  window.location = "Main.php?loc=EditPerson&idEdit="+idEdit;
})

$(".table").on("click", "tbody #QuaDelete", function(){
	var idDelete = $(this).attr("idDelete");
	Swal.fire({
        title: 'Do you want to delete this Test?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'cancel',
        confirmButtonText: 'Yes'
      }).then(function(result){
        if (result.value) {
            window.location = "Main.php?loc=quarantine&idDelete="+idDelete;
        }
  })

})


