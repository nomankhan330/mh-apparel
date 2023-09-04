<form id="form1" name="form1" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="product_id" id="product_id" value="{{isset($product->id) ? $product->id : ''}}">

    <div class="form-group">
        <label class="form-label" for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{isset($product->name) ? $product->name : ''}}">
    </div>

    <div class="form-group">
        <label class="form-label" for="single-default">
            Category
        </label>
        <select class="form-control w-100" id="single-default" id="category" name="category">
            <option value="0">Select Category</option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{isset($product->category_id) && $product->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
            @endforeach

            {{--<option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>--}}
        </select>
    </div>

    <div class="form-group">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{isset($product->description) ? $product->description : ''}}</textarea>
    </div>

</form>
<br />
<form  class="dropzone needsclick drop-zone-container" id="demo-upload" style="min-height: 7rem;">
    @csrf
    <input type="hidden" class="product_id" name="product_id" id="product_id" value="{{isset($product->id) ? $product->id : ''}}">
    <div class="dz-message needsclick">
        <i class="fal fa-cloud-upload text-muted mb-3"></i> <br>
        <span class="text-uppercase">Drop files here or click to upload.</span>
        <br>
        {{--<span class="fs-sm text-muted">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>--}}
    </div>
</form>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button>
</div>

<input type="hidden" id='add_Image' value="{{ isset($addsImage) ? $addsImage : '' }}" />

<script>


    var addsImage = document.getElementById('add_Image').value;

    if(addsImage != '') {
        addsImage = JSON.parse(addsImage);
    }

    $('.select2').select2();

    var myArray = [];
    $(document).ready(function() {

        $('.select2').select2();

        Dropzone.autoDiscover = false; // Disable autoDiscover to initialize Dropzone manually

        // Initialize Dropzone on the specified form
        var myDropzone = new Dropzone("#demo-upload", {
            url: '{{ route("product_image") }}', // Replace with the appropriate route URL
            paramName: 'file', // Name of the file input field
            maxFilesize: 5, // Max file size in MB
            addRemoveLinks: true, // Show remove links for uploaded files
            success: function(file, response) {
                var uploadedFileName = response.path; // Adjust the property name based on your server's response
                myArray.push(uploadedFileName);
                console.log('Uploaded file name:', uploadedFileName);
            },
            error: function(file, response) {
                console.log(response);
            },
            init: function() {
                var myDropzone = this;

                //Populate any existing thumbnails
                for (var i = 0; i < addsImage.length; i++) {
                    var mockFile = {
                        id: addsImage[i].id,
                        name: addsImage[i].file_name,
                        size: '10',//addsImage[i].size
                        type: 'image/jpeg',
                        status: Dropzone.ADDED,
                        url: addsImage[i].image_url,
                    };

                    // Call the default addedfile event handler
                    myDropzone.emit("addedfile", mockFile);

                    // And optionally show the thumbnail of the file:
                    myDropzone.emit("thumbnail", mockFile, addsImage[i].image_url);

                    // myDropzone.emit("uploadprogress", mockFile, 100);

                    myDropzone.files.push(mockFile);
                    myDropzone.emit("complete", mockFile);
                }
                this.on("removedfile", function(file) {
                    console.log(file.id); // use file.id to delete file on the server
                    var value = {
                        imageId: file.id,
                    };
                    $.ajax({
                        type: 'GET',
                        url: "{{route('delete_image')}}",
                        data: value,

                        success: function(result) {

                        }
                    });
                });
            },
        });

        $('#saveBtn').click(function (e) {

            e.preventDefault();
            $(this).html('Sending..');

            let Form_Data = new FormData($('#form1')[0]);
            Form_Data.append('image', myArray);

            $.ajax({
                data: Form_Data,
                url: "{{ route('product_save') }}",
                type: "POST",
                dataType: 'json',
                cache:false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data.status === 'success') {
                        $('#modal_show').modal('hide');
                        table.draw();
                    }

                    toastrAll(data.status, data.message);
                    $('#saveBtn').html('Save Changes');
                },
                error: function (data) {
                    console.log('Error:', data);
                    toastrAll(data.status, data.message);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

    });
</script>
