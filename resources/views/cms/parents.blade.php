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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Puppy Parents List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Status</th>
                            <th>Modify</th>
                            <th>Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $parent)
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
