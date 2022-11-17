@extends('base')
@section('content')

    <div class="clearfix"></div>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">
            @php
                $images = $service->images;
            @endphp
            <div class="makeup_fl_services makeup_fl_masonry">
                @foreach($images as $image)
                    <div class="service makeup_fl_masonry_in">
                        <img src="/service_images/{{$image->image}}" alt="">
                    </div>
                @endforeach
            </div>

            <div class="common_full_info">
                <div class="title_holder">
                    <div class="common_name">
                        <h3>{{$service->name}}</h3>
                        <span>Time Duration : {{$service->duration}} min</span>
                    </div>
                    @if($service->discount_price)
                        <div class="common_price">
                            <span>${{$service->discount_price}}</span>
                        </div>
                    @else
                        <div class="common_price">
                            <span>${{$service->original_price}}</span>
                        </div>
                    @endif
                </div>
                <div class="common_info">
                    {{$service->description}}
                </div>
                <div class="makeup_fl_btn">
                    <a href="{{asset('storage/modal/booking.blade.php')}}" class="ajax-popup-link">Book Online</a>
                    <a href="/services" class="float-right"><i class="xcon-angle-double-left"></i>Back</a>
                </div>
            </div>
        </div>
        <!-- /COMMON -->


    </div>
    <!-- /CONTENT WRAP -->
@endsection
