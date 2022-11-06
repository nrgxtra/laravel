@extends('base')
@section('content')

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <x-flash-success />
        @role('writer|admin')
        <button class="xcon-pencil"><a href="/blog/create">Write Post</a></button>
        <button class="xcon-gauge text-green-500 float-right" ><a href="/blog/manage">Manage Posts</a></button>
        @endrole
        @include('partials._search')
        @unless(count($posts)==0)
            @foreach($posts as $post)
        <!-- BLOG #1 -->
        <x-blog-card :post="$post"/>
        <!-- /BLOG #1 -->
            @endforeach
                @else
            <h3>No posts yet ...</h3>
        @endunless


    </div>
    <!-- /COMMON -->

    <!-- PAGINATION -->
    <div class="makeup_fl_pagination">
        <div class="makeup_fl_pagination_in">
            <div class="pg_number">
                    {{$posts->links()}}
            </div>
            <div class="pages">
                <span>Viewing page 1 of 2</span>
            </div>
        </div>
    </div>
    <!-- /PAGINATION -->

@endsection
