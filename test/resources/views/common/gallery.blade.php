@extends('base')
@section('content')

    <div class="clearfix"></div>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Our Makeup Gallery</span>
            </div>
            <div class="clearfix"></div>
            <ul class="makeup_fl_gallery_list gallery makeup_fl_masonry">
                @if($galleries->count()>0)
                    @foreach($galleries as $gallery)
                        <li class="makeup_fl_masonry_in">
                            <a href="{{asset('storage/' . $gallery->image)}}">
                                <img src="{{asset('storage/' . $gallery->image)}}" alt=""/>
                            </a>
                        </li>
                    @endforeach
                @else
                    <li class="makeup_fl_masonry_in">
                        <a href="{{asset('storage/img/gallery/gallery-empty.jpg')}}">
                            <img src="{{asset('storage/img/gallery/gallery-empty.jpg')}}" alt=""/>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->
@endsection
