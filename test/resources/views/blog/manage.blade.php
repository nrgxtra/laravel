@extends('base')
@section('content')
    <div>
        <header>
            <h4 class="text-3xl text-center font-bold my-6 ">
                Manage Posts
            </h4>
        </header>

        <table class="w-full">
            <tbody>
            @unless($posts->isEmpty())
                @foreach($posts as $post)
                    <tr class="border-gray-800">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/blog/{{$post->id}}"> {{$post->title}} </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <button class="xcon-pencil text-green-500" ><a href="/blog/{{$post->id}}/edit">Edit</a></button>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form method="post" action="/blog/{{$post->id}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-500"><i class="xcon-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No Listings Found</p>
                    </td>
                </tr>
            @endunless

            </tbody>
        </table>
    <div>
@endsection
