$(window).ready(function() {

   if ($('.btn-delete').length) {
      $('.btn-delete').click(function() {
         var id = $(this).data('id');
         var form = $('#form-delete');
         var action = form.attr('action').replace('USER_ID', id);
         var row =  $(this).parents('tr');
         
         row.fadeOut(1000);
         
         $.post(action, form.serialize(), function(result) {
            if (result.success) {
               setTimeout (function () {
                  row.delay(1000).remove();
                  bootbox.alert(result.msg);
               }, 1000);
               window.setTimeout(function() { //Redirect route admin/users
                  window.location.href = "http://"+window.location.hostname+"/admin/users/";
               }, 3500);
            } else {
            	alert ('El registro ‘  + result.id + ‘ no pudo ser eliminado');
      			row.show();
            }
         }, 'json');
      });
   }

}); 