@extends('layouts.app')

@section('header')
    <link href="/cms/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="/cms/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/cms/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/cms/js/plugin-config/datatables-setup.js"></script>
@endsection

@section('content')
    <!-- Puppy DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Puppy List</h6>
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
                        @foreach ($puppies as $puppy)
                            <tr>
                                <td>{{ $puppy->puppy_name }}</td>
                                <td>{{ $puppy->puppy_gender }}</td>
                                <td>{{ $puppy->puppy_dob->format( 'd M Y' ) }}</td>
                                <td>{{ $puppy->puppy_status }}</td>
                                <td><a class="btn btn-success btn-sm">Modify</a></td>
                                <td><a class="btn btn-danger btn-sm">Change status to Inactive</a></td>
                            </tr>        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
