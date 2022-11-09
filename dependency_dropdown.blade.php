


=================================================
kono value div e rekhe ta jekono jagae use korar jonno
=================================================

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
 $('#department').change(function() {
        var value = $("div").data("percent");
    });
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
