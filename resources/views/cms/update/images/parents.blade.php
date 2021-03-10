@extends('layouts.app')

@section('header')
    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
        }

        input[type="checkbox"][id^="cb"] {
            display: none;
        }

        label {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        label::before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid #4e73df;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        label img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked+label {
            border-color: #ddd;
        }

        :checked+label::before {
            content: "✓";
            background-color: #4e73df;
            transform: scale(1);
        }

        :checked+label img {
            transform: scale(0.95);
            z-index: -1;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).on('click', '.img-checkbox-data', function (e) {
            var id = $(this).data('ext-id');
            var existingImageNameList = $('#ext_image_list').val();
            if(existingImageNameList.includes(id + ",") ? existingImageNameList = existingImageNameList.replace(id + ',', '') : existingImageNameList = existingImageNameList + id + ",");
            
            $('#ext_image_list').attr('value', existingImageNameList);
        });
    </script>
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
                            <p>{{ $image->id }}</p>
                        </div>
                    </div>
                    @php
                        $cbCtr++;
                    @endphp
                @endforeach
                <input type="text" id="ext_image_list" value="">
            </div>
        </div>
    </div>
@endsection