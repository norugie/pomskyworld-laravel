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
    <!-- Testimonial DataTable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Testimonial List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Testimonial</th>
                            <th>Testimonial Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->testimonial_name }}</td>
                                <td>{{ $testimonial->testimonial_desc }}</td>
                                <td>{{ $testimonial->created_at->format( 'd M Y' ) }}</td>
                            </tr>        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
