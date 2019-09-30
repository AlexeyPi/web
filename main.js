$("addForm").submit(function(){
    var $form = $(this);

    $.ajax({
     type     : "POST",
     cache    : false,
     url      : $form.attr('action'),
     data     : $form.serializeArray(),
     success  : function(data) {
         $(".printArea").empty().append(data).css('visibility','visible');
     }
    });
 });