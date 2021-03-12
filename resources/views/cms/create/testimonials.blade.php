@extends('layouts.app')

@section('scripts')
    {{-- Additional scripts for page: /create --}}
    <script src="/cms/js/plugin-config/form.js"></script>
@endsection

@section('content')
    <!-- Testimonials - create entry -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-9 col-sm-12"><h4 class="m-0 font-weight-bold text-primary">Testimonials - New Entry</h4></div>
                <div class="col-lg-3 col-sm-12">
                    <a href="/cms/testimonials" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="text">Testimonial list</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="needs-validation" action="/cms/testimonials/create" method="POST" novalidate>
                @csrf
                <div class="row mb-1">
                    <div class="col-lg-6 col-sm-12">
                        <label class="label-emphasis" for="testimonial_name">Name *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" id="testimonial_name" name="testimonial_name" class="form-control clear-border @error('testimonial_name') is-invalid @enderror" value="{{ old('testimonial_name') }}" required>
                            <div class="invalid-feedback">@error('testimonial_name'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label class="label-emphasis" for="testimonial_date">Testimonial Date *</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                            </div>
                            <input type="date" value="{{ date('Y-m-d') }}" max="{{ date('Y-m-d') }}" id="testimonial_date" name="testimonial_date" class="form-control clear-border @error('testimonial_date') is-invalid @enderror" required>
                            <div class="invalid-feedback">@error('testimonial_date'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                        <p class="font-12 small mb-0"><b>Note:</b> Leaving this empty will automatically set the date to the current date.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="label-emphasis" for="testimonial_desc">Testimonial *</label>
                        <textarea id="testimonial_desc" name="testimonial_desc" class="form-control clear-border-textarea @error('testimonial_desc') is-invalid @enderror" required>{{ old('testimonial_desc') }}</textarea>
                        <div class="invalid-feedback">@error('testimonial_desc'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-lg btn-block" value="submit">SUBMIT NEW ENTRY</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
