@extends('admin.admin')
@section('admin')
    <div class="container">
        <h5 class="text-left">Users</h5> <h5 class="text-right ">Roles</h5>
    </div>
    <x-flash-success/>
    <x-flash-fail/>
    <div class=" grid grid-cols-2 gap-4">
        <table class="table table-bordered table-active w-1/2">
            <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Roles</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                       {{$user->getRoleNames()}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <table class="table table-bordered w-1/2 float-right">
            <tbody>
            @foreach($roles as $role)
                <tr class="border-gray-800">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        {{$role->id}}  {{$role->name}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="w-1/2 grid-cols-2 ">
        <div class="float-md-start">
            <form class="form-control" action="/admin/role/set" method="post">
                @csrf
                <div class="mb-sm-2">
                    <label for="category" class="inline-block text-lg mb-2">User id</label>
                    <input type="text" class=" border border-gray-200 rounded p-2 w-1/2" name="user_id"
                           placeholder="enter User id" value="{{old('user_id')}}"/>

                    @error('user_id')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-sm-2 float-right">
                    <label for="category" class="inline-block text-lg mb-2">Role id</label>
                    <input type="text" class=" border border-gray-200 rounded p-2 w-1/2" name="role_id"
                           placeholder="enter Role id" value="{{old('role_id')}}"/>

                    @error('role_id')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-sm-2">
                    <button class="bg-green-500 text-grey-100 rounded py-2 px-4">
                        SET
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="float-md-end">
            <form class="form-control" action="/admin/role/remove" method="post">
                @csrf
                <div class="mb-sm-2">
                    <label for="category" class="inline-block text-lg mb-2">User id</label>
                    <input type="text" class=" border border-gray-200 rounded p-2 w-1/2" name="user_id"
                           placeholder="enter User id" value="{{old('user_id')}}"/>

                    @error('user_id')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-sm-2 float-right">
                    <label for="category" class="inline-block text-lg mb-2">Role id</label>
                    <input type="text" class=" border border-gray-200 rounded p-2 w-1/2" name="role_id"
                           placeholder="enter Role id" value="{{old('role_id')}}"/>

                    @error('role_id')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-sm-2">
                    <button class="bg-red-500 text-grey-100 rounded py-2 px-4">
                        Remove
                    </button>
                </div>
            </form>
        </div>
        <div class="makeup_fl_pagination">
            <div class="makeup_fl_pagination_in">
                <div class="pg_number">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
