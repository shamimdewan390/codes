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
  =============================
  input field er nicher message er jnno
  --------------------------------------------------------------
   <ul><span style="color:red;">{!! $errors->first('alart_quantity') !!}</span></ul>
   -------------------------------------------------------------
  
 ================
 sweet success message in RAW PHP
 --------------------
 <?php if (isset($_SESSION['deleteuser'])) { ?>			
			<script>
				swal("Deleted", "User Deleted Successful", "success");
			</script>
		<?php 
			unset($_SESSION['deleteuser']);
			}
		 ?>
     ==========================
   sweet confurm message in RAW PHP
     ----------------------
     <script>
	function deleteuser(id, name){
		var userid = id;
		swal({
		  title: 'Are you sure?',
		  text: name +" will be deleted",
		  type: 'warning',
		  showCancelButton: true,			
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
			window.location = "delete_user.php?id="+userid
		  }
		})
		};
	</script>
    =========================
  sweet confurm and success message in RAW PHP
    -----------------------------
    <?php if (isset($_SESSION['deleteuser'])) { ?>			
		<script>
			swal("Deleted", "User Deleted Successful", "success");
		</script>
	<?php 
		unset($_SESSION['deleteuser']);
		}
	 ?>

	<script>
	function deleteuser(id, name){
		var userid = id;
		swal({
		  title: 'Are you sure?',
		  text: name +" will be deleted",
		  type: 'warning',
		  showCancelButton: true,			
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
			window.location = "delete_user.php?id="+userid
		  }
		})
		};
	</script>
    =========================
   laravel old selected option value 
   ------------------------
   <select name="category_id" id="exampleInputEmail1" class="form-control">
	<option value="">Select One</option>
	@foreach ($allCategory as $item)
	@if (old('category_id')==$item->id )
    <option value="{{ $item->id }}" selected>{{ $item->category_name }}</option>
	@else
	<option value="{{ $item->id }}">{{ $item->category_name }}</option>

	@endif

	@endforeach
    </select> 
    =====================
  image load when image selected by tariq sir cit
    ---------------------------
    <img id="blah" width="250" height="250" />

    <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
    
 anther image load when image selected
 -----------------------------------
     <input type="file" name="photo" class="form-control mb-2" id="image" onchange="loadfile(event)">
       <img src="" id="preimage" width="200" height="200" alt="">
     <script type="text/javascript">
	function loadfile(event) {
	var output=document.getElementById('preimage');
	output.src=URL.createObjectURL(event.target.files[0]);
	}
	</script>
=======================================
sweet alert
-----------------
$(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var link = $(this).attr("href");

    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
      window.location.href = link;
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }else{
    Swal.fire(
      'Cancelled!',
      'Your imaginary file is safe.',
      'error'
    )
  }
});

});
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
