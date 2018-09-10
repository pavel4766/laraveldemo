@extends('layouts.app')

@section('content')


<div class="container">
    <div class="profile-header">
        User Profile
    </div>
    <form method="post" action="/update">
        {{ csrf_field() }}
        {{--{{ method_field('patch') }}--}}

        <label>Name</label>
        <input type="text" name="name"  value="{{ $user->name }}" />
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
        @endif
        <label>Surname</label>
        <input type="text" name="surname"  value="{{ $user->surname }}" />
        @if ($errors->has('surname'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
        @endif
        <label>Email</label>
        <input type="text" name="email"  value="{{ $user->email }}" />
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
        @endif
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
