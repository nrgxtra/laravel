@extends('base')
@section('content')

    <div class="clearfix"></div>
    <button class="xcon-angle-left"><a href="/blog">Back</a></button>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <div class="makeup_fl_common">
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
                            at {{$post->created_at->format('d-m-y')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="/blog?author={{$post->author->id}}">by {{$post->author->name}}</a></h5>
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
                <!--  COMMENT- SECTION -->
                <div>
                    <form method="post" action="/blog/comment/create/{{$post->id}}">
                        @csrf
                        <label for="content" class="inline-block text-lg mb-2">
                            Comment
                        </label>
                        <textarea class="bg-transparent border border-gray-200 rounded p-2 w-full" name="content"
                                  rows="5"
                                  placeholder="Your opinion here ...">{{old('content')}}</textarea>
                        @error('content')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        <button type="submit" class="float-right">Submit Comment</button>
                    </form>
                    <div class="mt-6 bg-transparent shadow-sm rounded-lg divide-y">
                        @foreach($comments as $comment)
                        @php
                            $user = \App\Models\User::find($comment->user_id)
                        @endphp
                            <div class="p-6 flex space-x-2 bg-transparent">
                                <div class="flex-1 bg-transparent">
                                    <div class="flex justify-between items-center bg-transparent " >
                                        <div>
                                            <span class="text-grey-100">{{ $user->name }}</span>
                                            <small class="ml-2 text-sm text-gray-400">{{ $comment->created_at->format('j M Y, g:i a') }}</small>
                                        </div>
                                        @if(auth()->user()->id == $user->id)
                                            <a href="/blog/comment/{{$comment->id}}/edit"><i class="xcon-pencil text-green-500"></i>Edit</a>
                                            <form method="post" action="/blog/comment/delete/{{$comment->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"><i class="xcon-trash text-red-500"></i>Delete</button>
                                            </form>
                                        @endif
                                    </div>
                                    <p class="mt-4 text-lg text-gray-400">{{ $comment->content }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /CONTENT WRAP -->

@endsection
