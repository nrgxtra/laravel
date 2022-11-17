@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Team
                        <a href="/admin/team/create" class="btn btn-primary btn-sm float-end">Add
                            Team Member</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if(count($members)>0)
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Specialty</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->specialty}}</td>
                                    <td class="text-center"><a href="/admin/team/{{$member->id}}/edit"
                                                               class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="/admin/team/{{$member->id}}">
                                            @csrf
                                            <button class="text-center btn btn-danger btn-sm ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Team Members</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
