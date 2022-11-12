@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Categories
                        <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Add
                            Category</a>
                    </h3>
                </div>
                <div class="card-body">
                    @unless(!$categories)
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
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td class="text-center"><a href="/admin/category/{{$category->id}}/edit"
                                                               class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="/admin/category/{{$category->id}}">
                                            @csrf
                                            <button class="text-center btn btn-danger btn-sm ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No Categories Yet</h4>
                    @endunless
                </div>
            </div>
        </div>
    </div>
@endsection
