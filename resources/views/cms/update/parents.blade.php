@extends('layouts.app')

@section('scripts')
    {{-- Additional scripts for page: /update --}}
    <script src="/cms/js/plugin-config/form.js"></script>
@endsection

@section('content')
    <!-- Parents - update entry -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Parents - Update Parent</h4></div>
                <div class="col-lg-3 col-sm-12">
                    <a href="/cms/parents" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Puppy parent list</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="needs-validation" action="/cms/parents/{{ $parent->id }}/update/form" method="POST" novalidate>
                @csrf
                <div class="row mb-1">
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="parent_name">Parent Name *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-dog"></i>
                                </span>
                            </div>
                            <input type="text" id="parent_name" name="parent_name" class="form-control clear-border @error('parent_name') is-invalid @enderror" value="{{ $parent->family_name }}" required>
                            <div class="invalid-feedback">@error('parent_name'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="gender_select">Parent Gender</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-transgender"></i>
                                </span>
                            </div>
                            <select id="gender_select" name="gender_select" class="form-control clear-border custom-select">
                                <option hidden value="{{ $parent->family_gender }}">{{ $parent->family_gender }}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <p class="font-12 small mb-0"><b>Note:</b> Leaving this empty will automatically set the gender to "Male".</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="parent_dob">Parent DOB</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                            </div>
                            <input type="date" value="{{ $parent->family_dob->format('Y-m-d') }}" max="{{ date('Y-m-d') }}" id="parent_dob" name="parent_dob" class="form-control clear-border @error('parent_dob') is-invalid @enderror" required>
                            <div class="invalid-feedback">@error('parent_dob'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                        <p class="font-12 small mb-0"><b>Note:</b> Leaving this empty will automatically set the date of birth to the current date.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="label-emphasis" for="parent_info">Parent Information *</label>
                        <textarea id="parent_info" name="parent_info" class="form-control clear-border-textarea @error('parent_dob') is-invalid @enderror" required>{{ $parent->family_desc }}</textarea>
                        <div class="invalid-feedback">@error('parent_dob'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT PARENT UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
