@extends('base')
@section('content')

    <div class="clearfix"></div>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <div class="makeup_fl_title_holder">
            <div class="line"></div>
            <span>Amazing Services</span>
        </div>
        <div class="clearfix"></div>

        <!-- SERVICES -->
        <div class="makeup_fl_services makeup_fl_masonry">
            @foreach($services as $service)
                <!-- SERVICE #1 -->
                @php
                    $image = $service->images->first();
                @endphp

                <div class="service makeup_fl_masonry_in">
                    <div class="srv_img">
                        @if($image)
                            <img src="/service_images/{{$image->image}}" alt="">
                            <a href="/services/{{$service->id}}">
                                <div class="overlay"></div>
                            </a>
                        @else
                            <img src="{{asset('/storage/img/services/empty-product.png')}}" alt="">
                            <a href="/services/{{$service->id}}">
                                <div class="overlay"></div>
                            </a>
                        @endif
                        @if($service->discount_price)
                            <div class="discount">
                                <span>${{$service->original_price}}</span></div>
                            <div class="newprice"><span>${{$service->discount_price}}</span></div>
                        @else
                            <div class="price"><span>${{$service->original_price}}</span></div>
                        @endif
                    </div>
                    <div class="title_holder">
                        <h3><a href="/services/{{$service->id}}">{{$service->name}}</a></h3>
                        <span>Time Duration : {{$service->duration}} min</span>
                    </div>
                </div>
                <!-- /SERVICE #1 -->
            @endforeach
        </div>
        <!-- /SERVICES -->

        <!-- PAGINATION -->
        <div class="makeup_fl_pagination lessmargin">
            <div class="makeup_fl_pagination_in">
                <div class="pg_number">
                    <ul>
                        {{$services->links()}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- /PAGINATION -->
@endsection
