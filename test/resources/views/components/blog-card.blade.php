@props(['post'])
<div class="makeup_fl_blog_list">
    <div class="common_img">
        <img src="{{$post->picture ? asset('storage/' . $post->picture) : asset('storage/img/blog/empty-post.png')}}" alt=""/>
        <a href="/blog/{{$post->id}}">
            <div class="overlay"></div>
        </a>
    </div>
    <div class="common_full_info">
        <div class="title_holder">
            <h3><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
            <h5>in {{$post->category}}   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  at {{$post->created_at->format('d-m-y')}}</h5>
            <div class="mfp-inline-holder flex">
            <x-post-tags :tagsCsv="$post->tags"/>
            </div>
        </div>
        <div class="common_info">
            <p>{{$post->description}}</p>
        </div>
        <div class="makeup_fl_btn">
            <a href="/blog/{{$post->id}}">Read More</a>
        </div>
    </div>
</div>
