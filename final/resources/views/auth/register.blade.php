@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <h4>Register</h4>
                <form action="{{route('auth.save')}}" method="post">
                    @if(Session::get('success'))
                        <div class="success" style="margin-left: 22px">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="danger" style="margin-left: 22px">
                            {{Session::get('fail')}}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name" style="margin-left: 22px">Name</label>
                        <input class="form-control" style="background: transparent; color: whitesmoke" type="text"
                               name="name" placeholder="enter Your name" value="{{ old('name') }}">
                        <span class="danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email" style="margin-left: 23px">Email</label>
                        <input class="form-control" style="background: transparent; color: whitesmoke" type="text"
                               name="email" placeholder="enter email address" value="{{ old('email') }}">
                        <span class="danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input class="form-control" style="background: transparent; color: whitesmoke" type="password"
                               name="password" placeholder="enter your password">
                        <span class="danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" style="background: transparent; color: darkgray">
                        Register
                    </button>
                    <a href="{{route('auth.login')}}" style="text-decoration-line: none; color: darkgrey">already have
                        an account, log in</a>
                </form>

            </div>
        </div>
    </div>
    <div class="row">

@endsection
