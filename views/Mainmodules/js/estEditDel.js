$(".table").on("click", "tbody #EstVerView", function(){
  var HistoryidEstVer = $(this).attr("HistoryidEstVer");
  window.location = "Main.php?loc=ShowEntry&HistoryidEstVer="+HistoryidEstVer;
})


$(".table").on("click", "tbody #EstVerEdit", function(){
  var EditidEstVer = $(this).attr("EditidEstVer");
  window.location = "Main.php?loc=EditEstablishment&EditidEstVer="+EditidEstVer;
})

$(".table").on("click", "tbody #EstVerDel", function(){
	var DelidEstVer = $(this).attr("DelidEstVer");
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
            window.location = "Main.php?loc=establishment&DelidEstVer="+DelidEstVer;
        }
  })

})


