slug (type two field same time .. product e hidden kore rakha ache)
-------------------
  $('#product_name').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
 ================
