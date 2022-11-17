@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Edit Team Member
                        <a href="{{url('admin/team')}}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/team/{{$member->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col md-3 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$member->name}}"/>
                                <span class="text text-danger">
                            @error('name')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Specialty</label>
                                <input type="text" name="specialty" class="form-control" value="{{$member->specialty}}"/>
                                <span class="text text-danger">
                            @error('specialty')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label>Bio</label>
                                <textarea class="form-control" name="bio" rows="10"
                                >{{$member->bio}}</textarea>
                                <span class="text text-danger">
                            @error('bio')
                                    {{$message}}
                                    @enderror
                            </span>
                            </div>
                            <div class="col md-3 mb-3">
                                <label for="image" class="inline-block text-lg mb-2">
                                    Picture
                                </label>
                                <input type="file"  name="image"/>
                                @if($member->image)
                                    <div>
                                        <img src="{{asset('storage/' . $member->image)}}" alt="">
                                    </div>
                                @endif


                                @error('image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

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



