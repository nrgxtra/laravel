@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Add Picture
                        <a href="{{url('admin/gallery')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/gallery" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col md-3 mb-3">
                                <label for="image" class="inline-block text-lg mb-2">
                                    Picture
                                </label>
                                <input type="file" name="image" class="form-control" accept="image/*" />
                                @error('image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col md-3 mt-5">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


