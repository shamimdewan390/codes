


=================================================
html element e data rekhe ta jekono jagae use korar jonno
=================================================
########## 1
<div data-percent=""></div>

<script>
 $('#department').change(function() {
        $("div").data("percent", $(this).val()); 
    });
</script>
------------------------------------------------------------
akhane use kora hoice (akhane value ta astece div theke)
--------------------------------------------------------
<script>
 $('#section').change(function() {
        var value = $("div").data("percent");
    });
</script>
######### 2
<a href="{{ url('view/customer/data') }}" data-id="{{ $show->id }}" id="view" class="btn btn-sm btn-success">View</a>
------------------------------------
data-id ta var id te rakha hoice
-------------------------------------
<script>
$(document).on("click", "#view", function(e){
		e.preventDefault();
		var id = $(this).data("id");
		var url = $(this).attr("href");

		$.ajax({
			url: url,
			data: {id:id},
			type: "GET",
			dataType: "JSON",
			success: function(response){
				if($.isEmptyObject(response) != null){
					$("#ViewCustomer").modal("show");
					$("#customername").text(response.name + "'s Data");
					$(".cname").text("Name: " + response.name);
					$(".cphone").text("Phone: " + response.phone);
					$(".cemail").text("Email: " + response.email);
					$(".cdistrict").text("District: " + response.district);
				}
			}
		});

	});

</script>

########## 3

<div id="getalldata" data-url="{{ url('get/customer/data') }}"></div>
---------------------------------------
data-url ta var url e use kora hoice
---------------------------------------
<script>
function getCustomerData(){
		var url = $("#getalldata").data("url");

		$.ajax({
			url: url, 
			type: "get",
			dataType: "HTMl",
			success: function(response){
				$("#showAllDataHere").html(response);
			}	
		})
	}

</script>


=================================================
dependency dropdown
=================================================
<script>
    $('#department2').change(function() {
        var dep_id = $(this).val();
        // console.log(dep_id)
        if (dep_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('ajax/program') }}/" + dep_id,
                success: function(res) {
                    if (res) {
                        $("#program_id2").empty();
                        $("#program_id2").append('<option>Select Option</option>');
                        $.each(res, function(key, value) {
                            $("#program_id2").append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    } else {
                        $("#program_id2").empty();
                    }
                }
            });
        } else {
            $("#program_id2").empty();
        }
    });
</script>
