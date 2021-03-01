@extends('layouts.app')

@section('header')
    <link href="/cms/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                    <a href="/cms/parents/create" class="btn btn-primary btn-icon-split">
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
                            <th>Status</th>
                            <th>Modify</th>
                            <th>Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $parent)
                            <tr>
                                <td>{{ $parent->family_name }}</td>
                                <td>{{ $parent->family_gender }}</td>
                                <td>{{ $parent->family_dob->format('d M Y') }}</td>
                                <td>{{ $parent->family_status }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Modify</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-danger btn-icon-split btn-delete-parent" data-id="{{ $parent->id }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
