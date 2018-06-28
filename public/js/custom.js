$(document).ready(function() {
  $('select[name="fakultas"]').on('change', function(){
      var id_fakultas = $(this).val();
      if(id_fakultas) {
          $.ajax({
              url: '/departemen/get/'+id_fakultas,
              type:"GET",
              dataType:"json",
              beforeSend: function(){
                  $('#loader').css("visibility", "visible");
              },

              success:function(data) {

                  $('select[name="departemen"]').empty();
                  $('select[name="departemen"]').append('<option value=> </option>');
                  $.each(data, function(key, value){

                      $('select[name="departemen"]').append('<option value="'+ key +'">' + value + '</option>');
                  });
              },
              complete: function(){
                  $('#loader').css("visibility", "hidden");
              }
          });
      } else {
          $('select[name="departemen"]').empty();
      }

  });

    $('select[name="departemen"]').on('change', function(){
        var id_departemen = $(this).val();
        if(id_departemen) {
            $.ajax({
                url: '/id_matakuliah/get/'+id_departemen,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="id_matakuliah"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="id_matakuliah"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="id_matakuliah"]').empty();
        }

    });

});
