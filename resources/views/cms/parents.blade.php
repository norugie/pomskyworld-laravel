@extends('layouts.app')

@section('header')
    <link href="/cms/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="/cms/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/cms/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/cms/js/plugin-config/datatables-setup.js"></script>
@endsection

@section('content-alert')
    @if(session()->exists('crud'))
        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
            <strong>{{ strtoupper(session('status')) }}</strong> {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @php session()->forget(['crud', 'status', 'message']) @endphp
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
                                <td>{{ $parent->family_dob->format( 'd M Y' ) }}</td>
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
                                    <a href="#" class="btn @if( $parent->status == 'Inactive' ) btn-info @else btn-danger @endif btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info"></i>
                                        </span>
                                        <span class="text">Change status: @if( $parent->status == 'Inactive' ) Active @else Inactive @endif</span>
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
