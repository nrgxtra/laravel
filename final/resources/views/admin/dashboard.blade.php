@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="fl-col-6 ">
                <h4>Dashboard</h4>
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$LoggedUserInfo['name']}}</td>
                            <td>{{$LoggedUserInfo['email']}}</td>
                            <td><a href="{{route('auth.logout')}}" style="text-decoration-line: none">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li><a href="/admin/dashboard">Dashboard</a></li>
                    <li><a href="/admin/profile">Profile</a></li>
                    <li><a href="/admin/settings">Settings</a></li>
                    <li><a href="/admin/staff">Staff</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection
