@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form class="needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                        @csrf        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input id="name" type="name" class="form-control clear-border @error('name') is-invalid @enderror" name="name" value="{{ old( 'name' ) }}" required autocomplete="name" placeholder="Name...">  
                            <div class="invalid-feedback">@error('name'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ion-ios-at"></i>
                                </span>
                            </div>
                            <input id="username" type="username" class="form-control clear-border @error('username') is-invalid @enderror" name="username" value="{{ old( 'username' ) }}" required autocomplete="username" placeholder="Username...">
                            <div class="invalid-feedback">@error('username'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ion-ios-lock"></i>
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control clear-border @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Password...">
                            <div class="invalid-feedback">@error('password'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                        </div>
                    
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="ion-ios-checkmark-circle"></i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control clear-border @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
                            <div class="invalid-feedback">You cannot leave this section empty.</div>
                        </div>
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-dark">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
