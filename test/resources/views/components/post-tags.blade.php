@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
        <li class="flex items-center justify-center text-grey-100 rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/blog?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</ul>
