@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Edit Service
                        <a href="{{url('admin/service')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/service/{{$service->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col md-3 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$service->name}}"/>
                                <span class="text text-danger">
                            @error('name')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{$service->slug}}"/>
                                <span class="text text-danger">
                            @error('slug')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Category Id</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">
                            @error('category_id')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="10"
                                >{{$service->description}}</textarea>
                                <span class="text text-danger">
                            @error('description')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Price</label>
                                <input type="text" name="original_price" class="form-control"
                                       value="{{$service->original_price}}"/>
                                <span class="text text-danger">
                            @error('original_price')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Discount Price</label>
                                <input type="text" name="discount_price" class="form-control"
                                       value="{{$service->discount_price}}"/>
                                <span class="text text-danger">
                            @error('discount_price')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Duration</label>
                                <input type="text" name="duration" class="form-control" value="{{$service->duration}}"/>
                                <span class="text text-danger">
                            @error('duration')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label for="images" class="inline-block text-lg mb-2">
                                    Picture
                                </label>
                                <input type="file" multiple name="images[]"/>

                                @error('images')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

                             </div>
                            <div class="col md-3 mt-3">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                    <div class="col md-3 mb-3">
                        <label>Recent Pictures</label>
                        <div>
                            @if($service->images())
                                @foreach($service->images as $image)
                                    <div class="mb-4" style="max-width: 80px; max-height: 80px">
                                        <img src="/service_images/{{$image->image}}" alt="">
                                        <form method="post" action="/admin/service/{{$image->id}}/pic">
                                            @csrf
                                            <button class="btn-danger ">Delete</button>
                                        </form>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


