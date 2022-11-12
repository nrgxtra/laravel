@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Edit Category
                        <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/category/{{$category->id}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col md-3 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}"/>
                                <span class="text text-danger">
                            @error('name')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{$category->slug}}"/>
                                <span class="text text-danger">
                            @error('slug')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mt-3">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
