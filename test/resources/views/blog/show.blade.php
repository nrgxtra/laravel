@extends('base')
@section('content')

    <div class="clearfix"></div>
    <button class="xcon-angle-left"><a href="/blog">Back</a></button>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <div class="makeup_fl_common">
            <x-flash-success />
            <div class="makeup_fl_blog_list">
                <div class="common_img">
                    <img
                        src="{{$post->picture ? asset('storage/' . $post->picture) : asset('storage/img/blog/empty-post.png')}}"
                        alt=""/>
                    <a href="/blog/{{$post->id}}">
                        <div class="overlay"></div>
                    </a>
                </div>
                <div class="common_full_info">
                    <div class="title_holder">
                        <h3><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
                        <h5>in {{$post->category}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            at {{$post->created_at->format('d-m-y')}}</h5>
                        <div class="mfp-inline-holder flex">
                            <x-post-tags :tagsCsv="$post->tags"/>
                        </div>
                        <div class="float-right">
                            <form action="/blog/like/{{$post->id}}" method="post">
                                @csrf
                                <span>{{$post->likes()->count()}}</span>
                                <i class="xcon-heart"></i>
                                <button type="submit">Like</button>
                            </form>
                        </div>
                    </div>
                    <div class="common_info">
                        <p>{{$post->description}}</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /CONTENT WRAP -->

@endsection
