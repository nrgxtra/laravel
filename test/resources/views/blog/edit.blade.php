@extends('base')
@section('content')

    <form method="POST" action="/blog/{{$post->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <input type="text" class="bg-transparent border border-gray-200 rounded p-2 w-full" name="title"
                   value="{{$post->title}}" />

            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="bg-transparent border border-gray-200 rounded p-2 w-full" name="tags"
                   placeholder="Example: Fashion, Style, Hair Dress, Nails Art" value="{{$post->tags}}" />

            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="category" class="inline-block text-lg mb-2">Category</label>
            <input type="text" class="bg-transparent border border-gray-200 rounded p-2 w-full" name="category"
                   placeholder="Example: Fashion, Style, Hair, Hands Care" value="{{$post->category}}" />

            @error('category')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="picture" class="inline-block text-lg mb-2">
                Picture
            </label>
            <input type="file"  name="picture" />
            @error('picture')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            <img src="{{$post->picture ? asset('storage/' . $post->picture) : asset('storage/img/blog/empty-post.png')}}" alt=""/>
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Content
            </label>
            <textarea class="bg-transparent border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                      placeholder="Your text here ...">{{$post->description}}</textarea>

            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="float-right text-grey-100 rounded py-2 px-4 bg-violet-900 hover:bg-violet-500">
                UPDATE
            </button>
            <a href="/blog" class="xcon-angle-left text-grey"> Back </a>
        </div>
    </form>
@endsection
