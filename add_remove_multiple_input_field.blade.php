step 1
=======================
<div id="E_Resource" style="display:  none">
    <p class="font-weight-bold">E-resources Links:</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width='60%' class="text-center">Title</th>
                <th width='30%' class="text-center">Link</th>
                <th width='10%' class="text-center"> 
                    <input type="button"
                        name="add_journal" id="add_journal" value="Add"
                        class="btn-success float-left">
                </th>
            </tr>
        </thead>
        <tbody id="journal_body">
            <tr>
                <td style="vertical-align: middle;">
                    <input type="text" class="form-control" id="file_title"
                        name="file_title[]">
                </td>
                <td style="vertical-align:middle;text-align:center;">
                    <input type="text" class="form-control"
                        accept=".pdf,.png,.jpg,.jpeg,.gif" id="file" name="file[]">
                </td>
                <td style="vertical-align:middle;text-align:center;">
                    <input type="button" name="remove" id="remove" value="Remove"
                        class="btn-danger float-left">
                </td>
            </tr>
        </tbody>
    </table>
</div>

step 2
==================
<script>
//E-resource
$(document).ready(function () {
    var html =
        '<tr><td style="vertical-align: middle;"><input type="text" class="form-control" id="file_title" name="file_title[]"></td><td style="vertical-align:middle;text-align:center;"><input type="text" class="form-control" id="file" name="file[]"></td><td style="vertical-align:middle;text-align:center;"><input type="button" name="remove" id="remove" value="Remove" class="btn-danger float-left"></td></tr>';

    $("#add_journal").click(function () {
        $("#journal_body").append(html);
    });

    $("#journal_body").on("click", "#remove", function () {
        // console.log('ok')
        $(this).closest("tr").remove();
    });
});
</script>
step 3
=================

$collection = [];
$title = $request->teach_title;
$descrition = $request->teach_description;
$organization = $request->organization;

foreach ($title as $key => $value) {
    $collection[] = ['title' => $value, 'description' => $descrition[$key], 'organization'=>$organization[$key]];
}

$data->teach_experience = json_encode($collection);
$data->save();
