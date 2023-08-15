$(".table").on("click", "tbody #CitVerView", function(){
  var HisidCit = $(this).attr("HisidCit");
  window.location = "Main.php?loc=ShowHistory&HisidCit="+HisidCit;
})


$(".table").on("click", "tbody #CitVerEdit", function(){
  var EditidCitVer = $(this).attr("EditidCitVer");
  window.location = "Main.php?loc=EditCitizen&EditidCitVer="+EditidCitVer;
})

$(".table").on("click", "tbody #CitVerDel", function(){
	var DelidCitVer = $(this).attr("DelidCitVer");
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
            window.location = "Main.php?loc=citizen&DelidCitVer="+DelidCitVer;
        }
  })

})


