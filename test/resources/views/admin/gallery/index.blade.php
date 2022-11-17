@extends('admin.admin')
@section('admin')
    <div class="row">
        <x-flash-success/>
        <x-flash-fail/>
        <div class="col-md-12">
            <div class="card">
                <div class="cart-header">
                    <h3>Gallery
                        <a href="/admin/gallery/create" class="btn btn-primary btn-sm float-end">Add
                            Pictures</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if(count($galleries)>0)
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Picture</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{$gallery->id}}</td>
                                    <td>
                                        <img src="{{asset('storage/' . $gallery->image)}}" alt=""/>
                                    </td>
                                    <td class="text-center"><a href="/admin/gallery/{{$gallery->id}}/edit"
                                                               class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="/admin/gallery/{{$gallery->id}}">
                                            @csrf
                                            <button class="text-center btn btn-danger btn-sm ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4>No pictures in gallery</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
