@extends('layouts.app')

@section('header')
    <link href="/cms/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .swal-footer {
            text-align: center;
        }
    </style>
@endsection

@section('scripts')
    <script src="/cms/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/cms/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/cms/js/plugin-config/datatables-setup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <script>
        $(document).on('click', '.btn-delete-parent', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure you want to delete this entry?",
                text: "You won't be able to reactivate this entry after this.", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDeactivate) => {
                if (willDeactivate) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('/cms/parents/deactivate') }}",
                        type: "POST",
                        data: { id: id },
                        dataType: "html",
                        success: function () {
                            window.location.href = "{{ url('/cms/parents') }}";
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Error deactivating!", "Please try again", "error");
                        }
                    });
                }
            });
        });
    </script>
@endsection

@section('content')
    <!-- Parents DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Parents - List</h4></div>
                <div class="col-lg-3 col-sm-12">
                    <a href="/cms/parents/create" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add parent</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Breed</th>
                            <th>Update</th>
                            <th>Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $parent)
                            <tr>
                                <td><a href="/cms/parents/{{ $parent->id }}">{{ $parent->family_name }}</a></td>
                                <td>{{ $parent->family_gender }}</td>
                                <td>{{ $parent->family_dob->format('d M Y') }}</td>
                                <td>{{ $parent->family_breed }}</td>
                                <td class="text-center">
                                    <div class="dropdown no-arrow mb-4">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in"
                                            aria-labelledby="dropdownUpdateButton">
                                            <a class="dropdown-item" href="/cms/parents/{{ $parent->id }}/update/info">
                                                <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Update parent info
                                            </a>
                                            <a class="dropdown-item" href="/cms/parents/{{ $parent->id }}/update/gallery">
                                                <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Update parent gallery
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-delete-parent" data-id="{{ $parent->id }}" type="button">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </button>
                                </td>
                            </tr>        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
