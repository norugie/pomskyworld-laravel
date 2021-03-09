@extends('layouts.app')

@section('header')
    <style>
        .swal-footer {
            text-align: center;
        }
    </style>
@endsection

@section('scripts')
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
    <!-- Parents - read entry -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-8 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Parents - {{ $parent->family_name }}</h4></div>
                <div class="col-lg-4 col-sm-12">
                    <a href="/cms/parents" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Puppy parent list</span>
                    </a>
                    <span class="dropdown no-arrow mb-4">
                        <button class="btn btn-success dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Options</span>
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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn-delete-parent" href="#" data-id="{{ $parent->id }}">
                                <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                Delete parent
                            </a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <b>Parent Name:</b> {{ $parent->family_name }}
                </div>
                <div class="col-lg-4 col-sm-12">
                    <b>Parent Gender:</b> {{ $parent->family_gender }}
                </div>
                <div class="col-lg-4 col-sm-12">
                    <b>Parent Date of Birth:</b> {{ $parent->family_dob->format('d M Y') }}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <b>Parent Information:</b> {{ $parent->family_desc }}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12"><b>Parent Gallery</b></div>
            </div>
            <div class="row">
                @if(count($images) == 0) <div class="col-12">There are no images set for this entry.</div>@endif
                @foreach ($images as $image)
                    <div class="col-lg-3 col-sm-12">image</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection