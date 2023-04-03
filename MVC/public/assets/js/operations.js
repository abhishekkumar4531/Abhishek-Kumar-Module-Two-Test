$( document ).ready(function() {
  /*$.ajax({
    type: "GET",
    url: "/home/",
    dataType: "html",
    success: function(data){
      $("#post-display").html(data);
    }
  });
  $("#addButton").click(function() {
    alert("Called");
    var itemVlaue = $("#newItem").value;

    $.ajax({
        type: "POST",
        url: "/home/todolist",
        data: "itemValue = " + itemVlaue,
        success: function(data) {
           alert(data);
        }
    });
  });*/

});
$(document).on('click','#marked',function(e){
  $.ajax({
    type: "GET",
    url: "/home/finalDisplay",
    dataType: "html",
    success: function(data){
      $("#display-all-data").html(data);
    }
  });
});
