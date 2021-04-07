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
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Puppy Litters - New Litter</h4></div>
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
            <form class="needs-validation" action="/cms/litters/create" method="POST" novalidate>
                @csrf
                <div class="row mb-1">
                    <div class="col-lg-6 col-sm-12">
                        <label class="label-emphasis" for="litter_name">Litter Name *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-tag"></i>
                                </span>
                            </div>
                            <input type="text" id="litter_name" name="litter_name" class="form-control clear-border @error('litter_name') is-invalid @enderror" value="{{ old('litter_name') }}" required>
                            <div class="invalid-feedback">@error('litter_name'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
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
                <div class="row mb-1">
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="female_select">Litter Mother *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-venus"></i>
                                </span>
                            </div>
                            <select id="mother_select" name="mother_select" class="form-control clear-border custom-select" required>
                                <option value="" disabled selected hidden>Mother options</option>
                                @foreach($females as $female)
                                    <option value="{{ $female->id }}">{{ $female->family_name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">@error('mother_select'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="father_select">Litter Father *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-mars"></i>
                                </span>
                            </div>
                            <select id="father_select" name="father_select" class="form-control clear-border custom-select" required>
                                <option value="" disabled selected hidden>Father options</option>
                                @foreach($males as $male)
                                    <option value="{{ $male->id }}">{{ $male->family_name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">@error('father_select'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <label class="label-emphasis" for="litter_dob">Litter DOB</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                            </div>
                            <input type="date" value="{{ date('Y-m-d') }}" max="{{ date('Y-m-d') }}" id="litter_dob" name="litter_dob" class="form-control clear-border @error('litter_dob') is-invalid @enderror" required>
                            <div class="invalid-feedback">@error('litter_dob'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                        <p class="font-12 small mb-0"><b>Note:</b> Leaving this empty will automatically set the date of birth to the current date.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="label-emphasis" for="litter_info">Litter Information *</label>
                        <textarea id="litter_info" name="litter_info" class="form-control clear-border-textarea @error('litter_info') is-invalid @enderror" required>{{ old('litter_info') }}</textarea>
                        <div class="invalid-feedback">@error('litter_info'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT NEW LITTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
