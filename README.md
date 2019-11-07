# codes
important codes
==================================
// red validation text in laravel
---------------------------------

@error('product_image')
  <span class="invalid-feedback text-danger">
        <strong>{{ $message }}</strong>
  </span>
  @enderror
  
  =========================================
  // red input field validation in laravel
  -----------------------------------------
  
  {{($errors->first('product_image') ? " form-error" : "")}}
  
 =========================================
