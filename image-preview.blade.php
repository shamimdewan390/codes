       <label>
            <span>Thumbnail (Optional. Thumbnail will croped by 1280x720px in center)</span>
            <input type="file"  onchange="loadfile(event)"  name="image" class="form-control" id="image">
        </label>
      <img src="/frontend/img/home-img/banner-01.jpg" id="preimage" width="270" width="325" style="background: #c3c3c3;height: 200px;width: 325px">
                                                       
    <script>
        function loadfile(event) {
            var output=document.getElementById('preimage');

            output.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    
    
    
    
    
    
    <video style="display: none; width: 220px" id="pre_video" class="pre_video" controls></video>
    <img style="display: none;background: #c3c3c3;height: 180px;width: 180px"  id="pre_image" class="pre_image">

<script>
       const fileUrl = window.location.origin + "/"+response.header_banner;
      console.log(fileUrl)
          if (response.header_video_link=='image') {
              $("#HeaderModelUpdate #pre_video").hide();  // hide video preview
              $("#HeaderModelUpdate #pre_image").show().attr("src", fileUrl);
          } else if(response.header_video_link=='video'){
              $("#HeaderModelUpdate #pre_image").hide(); // hide image preview
              $("#HeaderModelUpdate #pre_video").show().attr("src", fileUrl);
          }
</script>
