@extends('layouts.app')

@section('content')
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf

                <input id="email" type="email" class="form-control-email" name="email" value="" placeholder="username" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <input id="password" type="password" class="form-control-password" name="password" value="" placeholder="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
    </form>
</div>
@endsection
