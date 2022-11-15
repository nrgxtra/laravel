@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Services
                        <a href="/admin/service/create" class="btn btn-primary btn-sm float-end">Add
                            Service</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if(count($services)>0)
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service->name}}</td>
                                    <td>{{$service->slug}}</td>
                                    <td class="text-center"><a href="/admin/service/{{$service->id}}/edit"
                                                               class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="/admin/service/{{$service->id}}">
                                            @csrf
                                            <button class="text-center btn btn-danger btn-sm ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Services Yet</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
