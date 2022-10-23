@extends('base')
@section('content')
    <div class="container" >
        <div class="row" >
            <div class="col-md-4 col-md-offset-2" >
                    <h4>Login</h4>
                    <form action="{{route('auth.check')}}" method="post">
                        @if(Session::get('fail'))
                            <div class="danger" style="margin-left: 23px">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf
                            <br>
                        <div class="form-group">
                            <label for="name" style="margin-left: 23px">Email</label>
                            <input class="form-control" style="background: transparent; color: whitesmoke" type="text" name="email" placeholder="enter email address" value="{{ old('email') }}">
                            <span class="danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Password</label>
                            <input class="form-control" style="background: transparent; color: whitesmoke" type="password" name="password" placeholder="enter your password" >
                            <span class="danger">@error('password'){{$message}}@enderror</span>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="background: transparent; color: darkgray">Login</button>
                        <a href="{{route('auth.register')}}" style="text-decoration-line: none; color: darkgrey">I don't have an account, create one</a>
                    </form>

                </div>
            </div>
        </div>
        <div class="row">

@endsection
