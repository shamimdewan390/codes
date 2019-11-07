# codes
important codes
=====================
// red validation text in laravel
---------------------------------

@error('product_image')
  <span class="invalid-feedback text-danger">
        <strong>{{ $message }}</strong>
  </span>
  @enderror
  
  ==================
  // red input field validation in laravel
  -----------------------------------------
  
  <style>
    .form-error {
        border: 2px solid #e74c3c;
    }
</style>
  
  {{($errors->first('product_image') ? " form-error" : "")}}
  
 ================
