@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Packages
                        <a href="/admin/package/create" class="btn btn-primary btn-sm float-end">Add
                            Package</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if(count($packages)>0)
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($packages as $package)
                                <tr>
                                    <td>{{$package->name}}</td>
                                    <td>{{$package->discount}}%</td>
                                    <td>{{$package->total}}</td>
                                    <td class="text-center"><a href="/admin/package/{{$package->id}}/edit"
                                                               class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="/admin/package/{{$package->id}}">
                                            @csrf
                                            <button class="text-center btn btn-danger btn-sm ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Packages</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

