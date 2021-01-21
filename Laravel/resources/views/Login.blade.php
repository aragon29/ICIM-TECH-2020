@extends('Templates.Default')

@section('title')
    Login
@endsection

@section('body')
    <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}">
        </div>
{{--        @error('username')--}}
{{--            <div class="alert alert-danger">--}}
{{--                <small>Username or Password is not match</small>--}}
{{--            </div>--}}
{{--        @enderror--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
