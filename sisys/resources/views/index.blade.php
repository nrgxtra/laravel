@extends('layouts.base')
@section('content')
        <!-- Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-slider owl-carousel owl-theme">
                            <div class="banner-content">
                                <span>Nail and Beauty Salon</span>
                                <h1>Experience In Nail Care</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>
                                <a href="about.html" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>

                            <div class="banner-content">
                                <span>Nail and Beauty Salon</span>
                                <h1>Your Nail is Our Best Advert</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>
                                <a href="about.html" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>

                            <div class="banner-content">
                                <span>Nail and Beauty Salon</span>
                                <h1>Your Best Nail Affair Salon</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>
                                <a href="about.html" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img" data-speed="0.05" data-revert="true">
                            <div class="woman">
                                <img src="{{asset('/storage/assets/images/home-one/woman.png')}}" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Banner" />
                                <div class="vector" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <img src="{{asset('/storage/assets/images/home-one/home-vector.png')}}" alt="vector" />
                                </div>
                            </div>
                            <div class="nail-img" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                <img src="{{asset('/storage/assets/images/home-one/nail-img.jpg')}}" alt="Nail" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Features Area -->
        <div class="features-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="features-card">
                            <div class="img">
                                <img src="{{asset('/storage/assets/images/features/features-img1.jpg')}}" alt="features" />
                            </div>
                            <div class="content">
                                <div class="top-icon">
                                    <i class="flaticon-make-up"></i>
                                </div>
                                <h3>LED Cured Gel Polish</h3>
                                <div class="more-btn">
                                    <i class="flaticon-arrow-pointing-to-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="features-card">
                            <div class="img">
                                <img src="{{asset('/storage/assets/images/features/features-img2.jpg')}}" alt="features" />
                            </div>
                            <div class="content">
                                <div class="top-icon">
                                    <i class="flaticon-relax"></i>
                                </div>
                                <h3>No Damaging Acrylics</h3>
                                <div class="more-btn">
                                    <i class="flaticon-arrow-pointing-to-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="features-card">
                            <div class="img">
                                <img src="{{asset('/storage/assets/images/features/features-img3.jpg')}}" alt="features" />
                            </div>
                            <div class="content">
                                <div class="top-icon">
                                    <i class="flaticon-makeup"></i>
                                </div>
                                <h3>Nail Experts Burlington</h3>
                                <div class="more-btn">
                                    <i class="flaticon-arrow-pointing-to-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Area End -->

{{--        <!-- About Area -->--}}
{{--        <div class="about-area section-bg pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="about-item">--}}
{{--                            <div class="about-slider owl-carousel owl-theme">--}}
{{--                                <div class="about-img">--}}
{{--                                    <div class="top-border"></div>--}}
{{--                                    <img src="{{asset('/storage/assets/images/about/about-img1.jpg')}}" alt="About" />--}}
{{--                                    <div class="bottom-border"></div>--}}
{{--                                </div>--}}

{{--                                <div class="about-img">--}}
{{--                                    <div class="top-border"></div>--}}
{{--                                    <img src="{{asset('/storage/assets/images/about/about-img2.jpg')}}" alt="About" />--}}
{{--                                    <div class="bottom-border"></div>--}}
{{--                                </div>--}}

{{--                                <div class="about-img">--}}
{{--                                    <div class="top-border"></div>--}}
{{--                                    <img src="{{asset('/storage/assets/images/about/about-img3.jpg')}}" alt="About" />--}}
{{--                                    <div class="bottom-border"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="about-vector">--}}
{{--                                <img src="{{asset('/storage/assets/images/about/about-vector.png')}}" alt="About" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="about-content pl-20">--}}
{{--                            <div class="section-title">--}}
{{--                                <span>About us</span>--}}
{{--                                <h2>Moisturize Your Hands Everyday</h2>--}}
{{--                                <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled but also the leap into electronic typesetting. </p>--}}
{{--                                <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>--}}
{{--                            </div>--}}
{{--                            <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-arrow-pointing-to-right" ></i> </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- About Area End -->--}}

{{--        <!-- Services Area -->--}}
{{--        <div class="services-area ptb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>Our Services</span>--}}
{{--                    <h2>What We Offer</h2>--}}
{{--                    <div class="section-vector">--}}
{{--                        <img src="{{asset('/storage/assets/images/shape/section-vector.png')}}" alt="vector" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img1.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Glitter For Nail Art</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img2.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Classic Nail Pedicure</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img3.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Paraffin For Nail Hands</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img4.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Deep Paraffin Waxing</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img5.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Classic Nail Manicure</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-6">--}}
{{--                        <div class="services-card">--}}
{{--                            <a href="service-details.html">--}}
{{--                                <img src="{{asset('/storage/assets/images/services/services-img6.jpg')}}" alt="Services" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="service-details.html">Art Nail & Effects</a></h3>--}}
{{--                                <a href="service-details.html" class="more-btn">--}}
{{--                                    <i class="flaticon-arrow-pointing-to-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12 text-center mt-20">--}}
{{--                        <a href="services.html" class="default-btn two border-radius-5">See All Service <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="services-vector">--}}
{{--                    <img src="{{asset('/storage/assets/images/services/services-vector.png')}}" alt="vector" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Services Area End -->--}}

{{--        <!-- Intro Video Area -->--}}
{{--        <div class="intro-video-area pb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="video-content">--}}
{{--                    <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn">--}}
{{--                        <i class="ri-play-fill"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="section-title text-center pt-100">--}}
{{--                    <span class="color1">You're Welcomed!</span>--}}
{{--                    <h2 class="color1">We Care About Your Nail And Your well-Being</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Intro Video Area End -->--}}

{{--        <!-- Products Area -->--}}
{{--        <div class="products-area ptb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>Our Products</span>--}}
{{--                    <h2>Our Nail Products</h2>--}}
{{--                    <div class="section-vector">--}}
{{--                        <img src="{{asset('/storage/assets/images/shape/section-vector.png')}}" alt="vector" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="products-card">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="shop-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/products/product-img1.png')}}" alt="Products" />--}}
{{--                                </a>--}}
{{--                                <ul class="products-action">--}}
{{--                                    <li><a href="cart.html"><i class="ri-shopping-cart-line"></i></a></li>--}}
{{--                                    <li><a href="compare.html"> <i class="ri-arrow-left-right-line"></i></a></li>--}}
{{--                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class="ri-eye-line"></i></a></li>--}}
{{--                                    <li><a href="wishlist.html"><i class="ri-heart-line"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="shop-details.html">Nail Polish Removers</a></h3>--}}
{{--                                <span>21.00$</span>--}}
{{--                                <div class="rating">--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="products-card">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="shop-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/products/product-img2.png')}}" alt="Products" />--}}
{{--                                </a>--}}
{{--                                <ul class="products-action">--}}
{{--                                    <li><a href="cart.html"><i class="ri-shopping-cart-line"></i></a></li>--}}
{{--                                    <li><a href="compare.html"> <i class="ri-arrow-left-right-line"></i></a></li>--}}
{{--                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class="ri-eye-line"></i></a></li>--}}
{{--                                    <li><a href="wishlist.html"><i class="ri-heart-line"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="shop-details.html">Nail Care Tools Premium</a></h3>--}}
{{--                                <span>31.00$</span>--}}
{{--                                <div class="rating">--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="products-card">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="shop-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/products/product-img3.png')}}" alt="Products" />--}}
{{--                                </a>--}}
{{--                                <ul class="products-action">--}}
{{--                                    <li><a href="cart.html"><i class="ri-shopping-cart-line"></i></a></li>--}}
{{--                                    <li><a href="compare.html"> <i class="ri-arrow-left-right-line"></i></a></li>--}}
{{--                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class="ri-eye-line"></i></a></li>--}}
{{--                                    <li><a href="wishlist.html"><i class="ri-heart-line"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h3><a href="shop-details.html">Nail Nourishing Oil</a></h3>--}}
{{--                                <span>28.00$</span>--}}
{{--                                <div class="rating">--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-fill"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                    <i class="ri-star-line"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-12 col-md-12 text-center mt-20">--}}
{{--                        <a href="shop.html" class="default-btn two border-radius-5">View All Product <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Products Area End -->--}}

{{--        <!-- Pricing Area -->--}}
{{--        <div class="pricing-area section-bg pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>Best Deals</span>--}}
{{--                    <h2>Our Best Price Packages</h2>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="pricing-card">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img1.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Gel Coloring <span>$15.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img2.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Pedicure <span>$25.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img3.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Manicure <span>$15.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="pricing-card">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img4.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Nail Polishing  <span>$50.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img5.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Nail Trim <span>$30.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{asset('/storage/assets/images/pricing/pricing-img6.jpg')}}" alt="Pricing" />--}}
{{--                                    <div class="content">--}}
{{--                                        <h3>Sticker Deco  <span>$25.00</span></h3>--}}
{{--                                        <p>Donec pretium egestas sapien mollis. Pellen tesqueet dolor elem entum etos </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Pricing Area End -->--}}

{{--        <!-- Team Area -->--}}
{{--        <div class="team-area pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>Our Staff</span>--}}
{{--                    <h2>Our Excellent & Expert Staff</h2>--}}
{{--                    <div class="section-vector">--}}
{{--                        <img src="{{asset('/storage/assets/images/shape/section-vector.png')}}" alt="vector" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="team-card">--}}
{{--                            <div class="team-img">--}}
{{--                                <a href="team-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/team/team-img1.jpg')}}" alt="Team" />--}}
{{--                                </a>--}}
{{--                                <ul class="social-links-btn">--}}
{{--                                    <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://vimeo.com/" target="_blank">--}}
{{--                                            <i class="ri-vimeo-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://twitter.com/" target="_blank">--}}
{{--                                            <i class="ri-twitter-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.linkedin.com/" target="_blank">--}}
{{--                                            <i class="ri-linkedin-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.facebook.com/" target="_blank">--}}
{{--                                            <i class="ri-facebook-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h3>--}}
{{--                                    <a href="team-details.html">--}}
{{--                                        Lorenzo Diego--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <span>Nail Specialist</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="team-card">--}}
{{--                            <div class="team-img">--}}
{{--                                <a href="team-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/team/team-img2.jpg')}}" alt="Team" />--}}
{{--                                </a>--}}
{{--                                <ul class="social-links-btn">--}}
{{--                                    <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://vimeo.com/" target="_blank">--}}
{{--                                            <i class="ri-vimeo-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://twitter.com/" target="_blank">--}}
{{--                                            <i class="ri-twitter-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.linkedin.com/" target="_blank">--}}
{{--                                            <i class="ri-linkedin-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.facebook.com/" target="_blank">--}}
{{--                                            <i class="ri-facebook-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}

{{--                                <h3>--}}
{{--                                    <a href="team-details.html">--}}
{{--                                        Gabriele Edoardo--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <span>Senior Stylist</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="team-card">--}}
{{--                            <div class="team-img">--}}
{{--                                <a href="team-details.html">--}}
{{--                                    <img src="{{asset('/storage/assets/images/team/team-img3.jpg')}}" alt="Team" />--}}
{{--                                </a>--}}
{{--                                <ul class="social-links-btn">--}}
{{--                                    <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://vimeo.com/" target="_blank">--}}
{{--                                            <i class="ri-vimeo-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://twitter.com/" target="_blank">--}}
{{--                                            <i class="ri-twitter-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.linkedin.com/" target="_blank">--}}
{{--                                            <i class="ri-linkedin-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="https://www.facebook.com/" target="_blank">--}}
{{--                                            <i class="ri-facebook-fill"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h3>--}}
{{--                                    <a href="team-details.html">--}}
{{--                                        Matteo Lorenzo--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <span>Pedicure Specialist</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Team Area End -->--}}

{{--        <!-- Testimonial Area -->--}}
{{--        <div class="testimonial-area section-bg pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>Our Testimonial</span>--}}
{{--                    <h2>What Our Clients Feedback</h2>--}}
{{--                </div>--}}
{{--                <div class="testimonial-slider owl-carousel owl-theme">--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <img src="{{asset('/storage/assets/images/testimonial/testimonial-img1.jpg')}}" alt="Testimonial" />--}}
{{--                        <h3>Emanuele Ebrew</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus  netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-item">--}}
{{--                        <img src="{{asset('/storage/assets/images/testimonial/testimonial-img2.jpg')}}" alt="Testimonial" />--}}
{{--                        <h3>Giovanni Loren</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus  netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-item">--}}
{{--                        <img src="{{asset('/storage/assets/images/testimonial/testimonial-img3.jpg')}}" alt="Testimonial" />--}}
{{--                        <h3>Massimo Pasquale</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus  netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-item">--}}
{{--                        <img src="{{asset('/storage/assets/images/testimonial/testimonial-img4.jpg')}}" alt="Testimonial" />--}}
{{--                        <h3>Gabriele Edoardo </h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus  netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Testimonial Area End -->--}}

{{--        <!-- Booking Area -->--}}
{{--        <div class="booking-area pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="book-img">--}}
{{--                            <img src="{{asset('/storage/assets/images/book/book-img1.jpg')}}" alt="Book" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="booking-form pl-20">--}}
{{--                            <div class="section-title mb-45">--}}
{{--                                <span>For Your Service</span>--}}
{{--                                <h2>Make An Appointment</h2>--}}
{{--                            </div>--}}
{{--                            <form>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control" required data-error="Please Enter Your Name" placeholder="Your Name">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Your Email">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="email" class="form-control" required data-error="Please Enter Your Phone number" placeholder="Phone number">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <select class="form-select form-control">--}}
{{--                                                <option selected>2 Person</option>--}}
{{--                                                <option value="1">1 Person</option>--}}
{{--                                                <option value="2">4 Person</option>--}}
{{--                                                <option value="3">7 Person</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" id="datetimepicker" class="form-control" required data-error="Please Enter Date" placeholder=" Enter Date">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control" required data-error="Please Enter Address" placeholder="Address">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <textarea name="message" class="form-control" id="message" cols="30" rows="7" required data-error="Write your message" placeholder="Your Message"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-lg-12 col-md-12">--}}
{{--                                        <button type="submit" class="default-btn">--}}
{{--                                            Book Now--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Booking Area End -->--}}

{{--        <!-- Blog Area -->--}}
{{--        <div class="blog-area pt-100 pb-70 section-bg">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title mb-45 text-center">--}}
{{--                    <span>News Feeds</span>--}}
{{--                    <h2>Our Latest Blog Update</h2>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="blog-card">--}}
{{--                            <a href="single-blog-1.html" class="img">--}}
{{--                                <img src="{{asset('/storage/assets/images/blog/blog-img1.jpg')}}" alt="Blog" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-user"></i>--}}
{{--                                        <a href="author.html">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-clock"></i>--}}
{{--                                        Jan 14,2022--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h3><a href="single-blog-1.html">Happy Hands Nail Polish And Exclusive Collection</a></h3>--}}
{{--                                <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="blog-card">--}}
{{--                            <a href="single-blog-1.html" class="img">--}}
{{--                                <img src="{{asset('/storage/assets/images/blog/blog-img2.jpg')}}" alt="Blog" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-user"></i>--}}
{{--                                        <a href="author.html">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-clock"></i>--}}
{{--                                        Jan 15,2022--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h3><a href="single-blog-1.html">Why You Should Use Non-Toxic Nail Polish</a></h3>--}}
{{--                                <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="blog-card">--}}
{{--                            <a href="single-blog-1.html" class="img">--}}
{{--                                <img src="{{asset('/storage/assets/images/blog/blog-img3.jpg')}}" alt="Blog" />--}}
{{--                            </a>--}}
{{--                            <div class="content">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-user"></i>--}}
{{--                                        <a href="author.html">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="flaticon-clock"></i>--}}
{{--                                        Jan 16,2022--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h3><a href="single-blog-1.html">Organize Your Nail Polishes! 5 Creative Ways To Do Polish</a></h3>--}}
{{--                                <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Blog Area End -->--}}

{{--        <!-- Gallery Area -->--}}
{{--        <div class="gallery-area pt-100">--}}
{{--            <div class="container-fluid p-0">--}}
{{--                <div class="gallery-width">--}}
{{--                    <div class="follow-area">--}}
{{--                        <a href="https://www.instagram.com/?hl=en" target="_blank" class="follow-btn">--}}
{{--                            <i class="ri-instagram-line"></i>--}}
{{--                        </a>--}}

{{--                        <h3>Follow Our Instagram</h3>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img1.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img2.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img3.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img4.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img5.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img6.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img7.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-6">--}}
{{--                            <div class="gallery-img">--}}
{{--                                <img src="{{asset('/storage/assets/images/gallery/gallery-img8.jpg')}}" alt="Gallery" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Gallery Area End -->--}}

@endsection
