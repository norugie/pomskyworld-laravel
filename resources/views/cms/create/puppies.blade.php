@extends('layouts.app')

@section('scripts')
    {{-- Additional scripts for page: /create --}}
    <script src="/cms/js/plugin-config/form.js"></script>
@endsection

@section('content')
    <!-- Litters - create entry -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Litters - New Puppy</h4></div>
                <div class="col-lg-3 col-sm-12">
                    <a href="/cms/litters" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Puppy litter list</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(!session()->exists('ctr'))
                {{-- For giving value to session('ctr') --}}
                <form class="needs-validation" action="/cms/ctradd" method="POST" novalidate>
                    @csrf
                    <div class="row mb-1">
                        <div class="col-lg-12 col-sm-12">
                            <label class="label-emphasis" for="litter_number">Litter Number *</label>
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-tag"></i>
                                    </span>
                                </div>
                                <input type="number" id="litter_number" name="litter_number" min="1" value="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control clear-border @error('litter_number') is-invalid @enderror" value="{{ old('litter_number') }}" required>
                                <div class="invalid-feedback">@error('litter_number'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                            </div>
                            <p class="font-12 small mb-0"><b>Note:</b> Minimum valid value is 1</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            @else
                <form class="needs-validation" action="/cms/litters/{{ Request::route('id') }}/puppies/create" method="POST" novalidate>
                    @csrf
                    @for( $ctr = 1; $ctr <= session('ctr'); $ctr++)
                        <div class="row mb-1">
                            <div class="col-lg-4 col-sm-12">
                                <label class="label-emphasis" for="puppy_name_{{ $ctr }}">Puppy {{ $ctr }} Name *</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-tag"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="puppy_name_{{ $ctr }}" name="puppy_name_{{ $ctr }}" class="form-control clear-border @error('puppy_name_{{ $ctr }}') is-invalid @enderror" value="{{ old('puppy_name_'.$ctr) }}" required>
                                    <div class="invalid-feedback">@error('puppy_name_{{ $ctr }}'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="label-emphasis" for="gender_select_{{ $ctr }}">Puppy Gender</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-transgender"></i>
                                        </span>
                                    </div>
                                    <select id="gender_select_{{ $ctr }}" name="gender_select_{{ $ctr }}" class="form-control clear-border custom-select">
                                        <option hidden value="Male">Gender options</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <p class="font-12 small mb-0"><b>Note:</b> Leaving this empty will automatically set the gender to "Male".</p>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="label-emphasis" for="puppy_info_{{ $ctr }}">Puppy Information *</label>
                                <textarea id="puppy_info_{{ $ctr }}" name="puppy_info_{{ $ctr }}" class="form-control clear-border-textarea @error('puppy_info_{{ $ctr }}') is-invalid @enderror" required>{{ old('puppy_info_'.$ctr) }}</textarea>
                                <div class="invalid-feedback">@error('puppy_info_{{ $ctr }}'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                            </div>
                        </div>
                        <hr>
                    @endfor
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT NEW PUPPY</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection
