@extends('layouts.app')

@section('header')
    {{-- Additional stylesheets for page: /update/gallery --}}
    <link rel="stylesheet" href="/cms/vendor/dropzone/dist/min/dropzone.min.css">
    <link href="/cms/css/img-checkbox.css" rel="stylesheet">
@endsection

@section('scripts')
    {{-- Additional scripts for page: /create --}}
    <script src="/cms/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="/cms/js/plugin-config/dropzone-family.js"></script>
    <script src="/cms/js/img-add-remove-checkbox.js"></script>
@endsection

@section('content')
    <!-- Parents - read entry -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Parents - {{ $parent->family_name }}</h4></div>
                <div class="col-lg-3 col-sm-12">
                    <a href="/cms/parents" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Puppy parent list</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12"><b>Select the images you want to delete</b></div>
            </div>
            <br>
            <div class="row">
                @if(count($images) == 0) <div class="col-12">There are no images set for this entry.</div>@endif
                @php
                    $cbCtr = 1;
                @endphp
                @foreach ($images as $image)
                    <div class="col-lg-4 col-sm-12">
                        <div class="text-center">
                            <ul>
                                <li><input class="img-checkbox-data" type="checkbox" id="cb{{ $cbCtr }}" data-ext-id="{{ $image->id }}" />
                                  <label for="cb{{ $cbCtr }}"><img class="img-fluid" style="width: 25rem;"
                                    src="/images/parents/{{ $image->family_image_name }}" alt=""></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @php
                        $cbCtr++;
                    @endphp
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="/cms/parents/{{ $parent->id }}/update/gallery" method="POST">
                        @csrf
                        <input type="text" id="ext_image_name" name="ext_image_name" value="" hidden>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="label-emphasis" for="dropzone-gallery"><b>Upload new images to parent gallery</b></label>
                                <div id="dropzone-gallery" class="dropzone">
                                    <div class="dz-default dz-message"><h3>Drop images here or click to upload</h3></div>
                                </div>
                                <input type="text" id="image_name" name="image_name" value="" hidden>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT PARENT GALLERY UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection