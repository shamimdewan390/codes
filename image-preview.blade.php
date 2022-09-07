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
