@extends('base')
@section('content')
    <!-- FOTORAMA -->
    <div class="makeup_fl_fotorama">
        <div class="fotorama" data-nav="thumbs"  data-autoplay="4000" data-loop="true" data-keyboard="true"  data-arrows="true" data-click="true" data-swipe="true" data-stopautoplayontouch="false" data-transition="slide" data-fit="cover" data-width="100%">
            <a href="{{asset('storage/img/fotorama/full1.jpg')}}">
                <img src="{{asset('storage/img/fotorama/thumb1.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('storage/img/fotorama/full2.jpg')}}" >
                <img src="{{asset('storage/img/fotorama/thumb2.jpg')}} " width="144" height="96" alt="" />
            </a>
            <a href="{{asset('storage/img/fotorama/full3.jpg')}}" >
                <img src="{{asset('storage/img/fotorama/thumb3.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('storage/img/fotorama/full4.jpg')}}" >
                <img src="{{asset('storage/img/fotorama/thumb4.jpg')}}" width="144" height="96" alt="" />
            </a>
            <a href="{{asset('storage/img/fotorama/full5.jpg')}}" >
                <img src="{{asset('storage/img/fotorama/thumb5.jpg')}}" width="144" height="96" alt="" />
            </a>
        </div>
    </div>
    <!-- /FOTORAMA -->

    <!-- TESTIMONIALS -->
    <div class="makeup_fl_content_testimonials">
        <div class="testimonials">
            <div class="quote"><i class="xcon-quote-right-alt"></i></div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <p>Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit
                        amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate.
                        Curabitur eleifend.</p>
                    <br/>
                    <span>Laura Brandon</span>
                </div>
                <div class="item">
                    <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec
                        diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque
                        malesuada molestie.</p>
                    <br/>
                    <span>Britney Spears</span>
                </div>
                <div class="item">
                    <p>Integer viverra non eros ac sollicitudin. Nunc lorem erat, finibus at consectetur in,
                        vestibulum tristique ligula. Fusce nunc tortor, gravida fermentum diam in, dictum vestibulum
                        libero.</p>
                    <br/>
                    <span>Selena Gomez</span>
                </div>
                <div class="item">
                    <p>Praesent in augue in purus iaculis scelerisque. Etiam at gravida neque. Proin nulla magna,
                        tempus in leo non, maximus efficitur purus. Mauris vel mollis est. Suspendisse maximus
                        cursus feugiat.</p>
                    <br/>
                    <span>Paula Samry</span>
                </div>
                <div class="item">
                    <p>Curabitur eget varius augue, non feugiat nisl. Duis fermentum est vel quam pharetra accumsan.
                        Nulla sodales leo nisl, vel dignissim lacus finibus sit amet. Pellentesque elementum lacinia
                        leo eget pulvinar.</p>
                    <br/>
                    <span>Wendy Clifford</span>
                </div>
            </div>
            <div class="prev_next_btn">
                <a href="#" class="prev"><i class="xcon-angle-left"></i></a>
                <a href="#" class="next"><i class="xcon-angle-right"></i></a>
            </div>
        </div>

    </div>
    <!-- /TESTIMONIALS -->

    <!-- PACKAGE LIST -->
    <div class="makeup_fl_package_list makeup_fl_masonry">
        @foreach($packages as $package)
            <!-- PACKAGE LIST #1 -->
            <div class="makeup_fl_package_list_in makeup_fl_masonry_in">
                <div class="pckg_img" >
                    <img src="{{$package->picture ? asset('storage/' . $package->picture) : asset('storage/img/package1.jpg')}}" style=" max-height: 200px; object-fit: scale-down" alt=""/>
                </div>
                <div class="pckg_info">
                    <div class="title_holder">
                        <h3>{{$package->name}}</h3>
                        <span>Time Duration : 2 - 3 hours</span>
                    </div>
                    <div class="price_list">
                        <ul>
                            @foreach($package->services as $sId)
                                @php
                                    $service = \App\Models\Service::find($sId);
                                @endphp
                                <li>
                                    <div class="price_li">
                                        <span class="span1">{{$service->name}}</span>
                                        <span class="span2">${{$service->original_price}}</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="total"><span>Your discount: {{$package->discount}}%</span></div>
                    <div class="total"><span>Total: ${{$package->total}}</span></div>
                    <div class="footer">
                        <div class="footer_btn">
                            <form id="serv">
                                <input type="hidden" id="tvae" value="{{$package->name}}" />
                                <a href="{{ route('booking-form.index') }}" class="ajax-popup-link">Book Online</a>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    const btn = document.getElementById('serv');
                    btn.addEventListener('click', function (e) {
                        e.preventDefault();
                        const service = document.getElementById('tvae');
                        const serviceValue = service.value;
                        localStorage.setItem('service-name', serviceValue);
                    });
                </script>
            </div>
            <!-- /PACKAGE LIST #1 -->
        @endforeach
    </div>
    <div class="makeup_fl_pagination">
        <div class="makeup_fl_pagination_in">
            <div class="pg_number">
                {{$packages->links()}}
            </div>
        </div>
    </div>
    <!-- /PACKAGE LIST -->

@endsection


