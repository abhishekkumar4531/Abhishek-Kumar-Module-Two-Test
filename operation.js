$(document).on('click','#deleteButton',function(id){
  alert("Called");
  $.ajax({
    type: "GET",
    url: "database/delete.php",
    data:{deleteId:id},
    dataType: "html",
    success: function(data){
      $('#table-container').html(data);
    }
  });
});
