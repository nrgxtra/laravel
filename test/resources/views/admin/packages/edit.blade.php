@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Add Package
                        <a href="{{url('admin/package')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/package" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col md-3 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{$package->name}}"/>
                                <span class="text text-danger">
                            @error('name')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Service</label>
                                <div>
                                    <select class="selectpicker" multiple data-live-search="true" name="services[]">
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <span class="text text-danger">
                            @error('service_id')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Discount</label>
                                <input type="text" name="discount" class="form-control"
                                       value="{{$package->discount}}"/>
                                <span class="text text-danger">
                            @error('discount')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label for="image" class="inline-block text-lg mb-2">
                                    Picture
                                </label>
                                <input type="file" name="image" class="form-control" accept="image/*"/>
                                <img src="{{asset('storage/' . $package->image)}}" alt=""/>
                                @error('image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col md-3 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
