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
    ==========================
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
