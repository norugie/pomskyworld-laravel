@extends('layouts.auth')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pomskyworld Site Panel</h1>
                            </div>
                            <form class="user needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                                @csrf
                                <div class="form-group">
                                    <input id="login-username" type="username" class="form-control form-control-user clear-border @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username...">
                                    <div class="invalid-feedback">@error('username'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" class="form-control form-control-user clear-border @error('username') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    <div class="invalid-feedback">@error('password'){{ $message }}@else You cannot leave this section empty. @enderror</div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
