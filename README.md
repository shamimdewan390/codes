> aaaaaaaaaaa
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
======================
category wise sub-category
------------------------
    $(document).ready(function ()
    {
            $('select[name="category_id"]').on('change',function(){
               var categoryId = $(this).val();
               if(categoryId)
               {
                  $.ajax({
                     url : 'ajax/category/' +categoryId,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(categoryId);
                        $('select[name="subcategory_id"]').empty();
                        $.each(data, function(key,value){
                        $('select[name="subcategory_id"]').append('<option value="'+value.id+'">'+value.subcategory_name+'</option');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="subcategory_id"]').empty();
               }
            });

            $(function() {
                $('#subdiv').hide();
                $('select[name="category_id"]').change(function(){
                    if($('select[name="category_id"]')) {
                        $('#subdiv').hide();
                        $('#subdiv').slideDown();
                    } else {
                        $('#subdiv').hide();
                    }
                });
});
});
===============================
image upload in query builder
------------------------------
function storePost(Request $request){
        $request->validate([
            'post_title' => ['required'],
            'post_details' => ['required'],
            'category' => ['required'],
             'post_image' => ['file','image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);
        $data = array();
        $data['category_id']=$request->category;
        $data['title']=$request->post_title;
        $data['details'] =$request->post_details;
        $image= $request->file('post_image');

        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/images/post/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('posts')->insert($data);
            return back()->with('success', 'inser successfully');


        } else {
            DB::table('posts')->insert($data);
            return back()->with('success', 'inser successfully');
        }


    }
    ======================


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
