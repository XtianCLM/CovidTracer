$(".table").on("click", "tbody #TestEdit", function(){
  var EditidTest = $(this).attr("EditidTest");
  window.location = "Main.php?loc=EditRtpcr&EditidTest="+EditidTest;
})

$(".table").on("click", "tbody #TestDel", function(){
	var idTest = $(this).attr("idTest");
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
            window.location = "Main.php?loc=RTPCR&idTest="+idTest;
        }
  })

})


