@extends('admin.layouts.master')

@section('content')

    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Catalogue</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </ol>

    <div class="subheader">
        <h1 class="subheader-title">
            <i class="subheader-icon fal fa-table"></i> Categories: <span class="fw-300">List</span>
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
                        <button class="btn btn-primary btn-sm" id="btnAddModal">Add Category</button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start class="bg-info-300" -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>

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
                    <h5 class="modal-title h4">Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form1" name="form1" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="category_id" id="category_id">

                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="example-textarea">Details</label>
                            <textarea class="form-control" id="detail" name="detail" rows="5"></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <label class="form-label">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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

    <script>
        $(document).ready(function() {

            //toastrAll('success', 'message');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let table = $('#dt-basic-example').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('categories') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {
                        data: 'image', name: 'image',
                        render: function (data, type, row, meta) {
                            a = `{{ asset("assets/web/images/categories/") }}`+"/"+row.image;
                            return `<img src="${a}" class="profile-image rounded-circle" alt="">`;
                        }
                    },
                    {data: 'name', name: 'name'},

                    {data: 'action', name: 'action', class: 'text-center', orderable: false, searchable: false},
                ]
            });

            $('#btnAddModal').click(function (e) {
                $('#form1').trigger("reset");
                $('#ModalForm').modal('show');
            });

            $('#saveBtn').click(function (e) {

                e.preventDefault();
                $(this).html('Sending..');

                let Form_Data = new FormData($('#form1')[0]);

                $.ajax({
                    data: Form_Data,
                    url: "{{ route('categories_save') }}",
                    type: "POST",
                    dataType: 'json',
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {

                        if (data.status === 'success') {
                            $('#form1').trigger("reset");
                            $(".custom-file-label").html('')
                            $('#ModalForm').modal('hide');
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

            $('body').on('click', '.editData', function () {
                let category_id = $(this).data('id');
                //alert(product_id)
                $.ajax({url: "categories_edit", type: "POST", dataType: 'json', data: {category_id: category_id},
                    success: function(data){
                        $('#form1').trigger("reset");
                        $('#ModalForm').modal('show');

                        $('#category_id').val(data.id);
                        $('#name').val(data.name);
                        $('#detail').val(data.detail);
                }});

            });

            $('body').on('click', '.deleteData', function () {

                let category_id = $(this).data("id");

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
                                data: {category_id: category_id},
                                url: "{{ route('categories_delete') }}",
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

