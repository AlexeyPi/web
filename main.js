$('#addForm input[type=email]').on('blur', function () {
  let email = $(this).val();
  
  if (email.length > 0
  && (email.match(/.+?\@.+/g) || []).length !== 1) {
    console.log('invalid');
    alert('Вы ввели некорректный e-mail!');
  } else {
    console.log('valid');
    alert('Вы ввели корректный e-mail!');
  }
});
 
 
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
