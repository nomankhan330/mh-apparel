@extends('admin.layouts.master')

@section('content')

    <style>
        .dropzone .dz-preview .dz-image img {
            width: 124px; height: 120px;
        }
    </style>

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Catalogue</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol>

    <div class="subheader">
        <h1 class="subheader-title">
            <i class="subheader-icon fal fa-table"></i> Product: <span class="fw-300">List</span>
            {{--<small>
                Create headache free searching, sorting and pagination tables without any complex configuration
            </small>--}}
        </h1>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        {{--Example <span class="fw-300"><i>Table</i></span>--}}
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-primary btn-sm" onclick="addProduct()">Add Product</button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                {{--<th class="w-50">Details</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade default-example-modal-right-lg" id="ModalForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form1" name="form1" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id">

                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Category
                            </label>
                            <select class="form-control w-100" id="single-default" id="category" name="category">
                                <option value="0">Select Category</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                                {{--<option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>--}}
                            </select>
                        </div>



                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                        </div>

                    </form>
                    <form  class="dropzone needsclick drop-zone-container" id="demo-upload" style="min-height: 7rem;">
                        @csrf
                        <input type="hidden" class="product_id" name="product_id" id="product_id">
                        <div class="dz-message needsclick">
                            <i class="fal fa-cloud-upload text-muted mb-3"></i> <br>
                            <span class="text-uppercase">Drop files here or click to upload.</span>
                            <br>
                            {{--<span class="fs-sm text-muted">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>--}}
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/formplugins/dropzone/dropzone.js') }}"></script>
    <script>
        function addProduct() {
            $.ajax({
                type: 'GET',
                url: "{{ route('product-add') }}",
                success: function(result) {
                    $('#modal_header').html('Add Product');
                    $('#modal_body').html(result);
                    $('#modal_show').modal('show');
                }
            });
        }

        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let table = $('#dt-basic-example').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('product') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'category.name', name: 'category'},
                    /*{data: 'description', name: 'description'},*/
                    {data: 'action', name: 'action', class: 'text-center', orderable: false, searchable: false},
                ]
            });


            $('body').on('click', '.editData', function () {
                let product_id = $(this).data('id');
                $.ajax({
                    url: "{{ route('product_edit') }}",
                    type: "Get",
                    data: {product_id: product_id},
                    success: function(data){
                        $('#modal_header').html('Edit Product');
                        $('#modal_body').html(data);
                        $('#modal_show').modal('show');
                    }});

            });

            $('body').on('click', '.deleteData', function () {

                let product_id = $(this).data("id");

                //confirm("Are You sure want to delete !");
                Swal.fire(
                    {
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!"
                    }).then(function (result) {
                    if (result.value) {

                        Swal.fire("Deleted!", "Your file has been deleted.", "success");

                        $.ajax({
                            type: "DELETE",
                            data: {product_id: product_id},
                            url: "{{ route('product_delete') }}",
                            success: function (data) {
                                table.draw();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                    }
                });


            });
        });
    </script>

@endsection
