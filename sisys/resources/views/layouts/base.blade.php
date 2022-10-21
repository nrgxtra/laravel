<!doctype html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/storage/assets/css/plugins.css')}}">
    <!-- Icon Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/storage/assets/css/iconplugins.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/storage/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('/storage/assets/css/responsive.css')}}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{asset('/storage/assets/css/theme-dark.css')}}">

    <!-- Title -->
    <title>Sisy's - Nail & Beauty</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('/storage/assets/images/favicon.png')}}">
</head>
<body>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<!-- Top Header -->
<header class="top-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="header-left">
                    <ul>
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:info@naon.com">info@naon.com</a>
                        </li>
                        <li>
                            <i class="flaticon-telephone"></i>
                            <a href="tel:+123-456-778">+123 456 778</a>
                        </li>
                        <li>
                            <i class="flaticon-clock"></i>
                            Everyday 7 AM to 7 PM Sunday Off
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-3">
                <div class="header-right">
                    <ul class="social-links">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://vimeo.com/" target="_blank">
                                <i class="flaticon-vimeo"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->

<!-- Start Navbar Area -->
<div class="navbar-area naon-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{route('landing')}}">
                        <img src="{{asset('/storage/assets/images/logos/logo-small.png')}}" class="logo-one" alt="logo">
                        <img src="{{asset('/storage/assets/images/logos/logo-white-small.png')}}" class="logo-two" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{route('landing')}}">
                    <img src="{{asset('/storage/assets/images/logos/logo-small.png')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('/storage/assets/images/logos/logo-white-small.png')}}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                User
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">
                                        Register
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forgot-password.html" class="nav-link">
                                        Forgot Password
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="about.html" class="nav-link">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="appointment.html" class="nav-link">
                                        Appointment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="gallery-1.html" class="nav-link">
                                        Gallery
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="services.html" class="nav-link">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="shop.html" class="nav-link">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-details.html" class="nav-link">Shop Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tracking-order.html" class="nav-link">Tracking Order</a>
                                </li>
                                <li class="nav-item">
                                    <a href="compare.html" class="nav-link">Compare</a>
                                </li>
                                <li class="nav-item">
                                    <a href="customer-services.html" class="nav-link">Customer Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="my-account.html" class="nav-link">My Account</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="blog-2.html" class="nav-link">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="optional-item">
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                    <i class='flaticon-search'></i>
                                </a>
                            </div>
                        </div>
                        <div class="optional-item">
                            <a class="optional-item-cart" href="cart.html">
                                <i class='flaticon-shopping-cart-empty-side-view'></i>
                                <span>2</span>
                            </a>
                        </div>
                    </div>

                    <div class="mobile-nav">
                        <div class="mobile-other d-flex align-items-center">
                            <div class="optional-item">
                                <div class="search-btn">
                                    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                        <i class='flaticon-search'></i>
                                    </a>
                                </div>
                            </div>

                            <div class="optional-item">
                                <a class="optional-item-cart" href="cart.html">
                                    <i class='flaticon-shopping-cart-empty-side-view'></i>
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Modal Start -->
<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

@yield('content')

<!-- Footer Area -->
<footer class="footer-area footer-bg">
    <div class="container pt-100 pb-70">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget pe-5">
                    <div class="footer-logo">
                        <a href="{{route('landing')}}">
                            <img src="{{asset('/storage/assets/images/logos/logo-small.png')}}" class="footer-logo1" alt="Images">
                        </a>
                        <a href="{{route('landing')}}">
                            <img src="{{asset('/storage/assets/images/logos/logo-white-small.png')}}" class="footer-logo2" alt="Images">
                        </a>
                    </div>
                    <p>
                        You always can make appointment trough contact form, direct call or get in place...
                        <br>
                        Find more about us in social media:
                    </p>
                    <ul class="social-link">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://vimeo.com/" target="_blank">
                                <i class="ri-vimeo-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pe-2">
                    <h3>Our Newsletter</h3>
                    <form class="newsletter-form" data-toggle="validator" method="POST">
                        <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
                        <button class="subscribe-btn" type="submit">
                            Subscribe Now  <i class="flaticon-paper-plane"></i>
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget ps-4">
                    <h3>Salon Hours</h3>
                    <ul class="salon-hours">
                        <li>
                            <div class="content">
                                <h3>Monday - Friday</h3>
                                <span>09:00 AM - 10:00 PM </span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <h3>Saturday - Sunday</h3>
                                <span>10:00 AM - 08:00 PM </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget ps-3">
                    <h3>Get In Touch</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="flaticon-telephone"></i>
                            <div class="content">
                                <h4>Contact Us</h4>
                                <span><a href="tel:+34123456789" target="_blank">+34 123 456 789</a></span>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="content">
                                <h4>Email:</h4>
                                <span><a href="mailto:sisi.eyebrows@gmail.com" target="_blank">sisi.eyebrows@gmail.com</a></span>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-pin"></i>
                            <div class="content">
                                <h4>Address</h4>
                                <span>19, calle de viejo, Algesiras, Spain</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Copyright Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                Copyright @2022 <b>Sisy`s</b> All Rights Reserved
                <a href="http://sisi.eyebrows.es" target="_blank">By Kiko</a>
            </p>
        </div>
    </div>
</div>
<!-- Copyright Area End -->

<!-- QuickView Modal Area -->
<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close-on" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='flaticon-close'></i></span>
            </button>
            <div class="product-details-desc">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="products-quickView-image">
                            <img src="{{asset('/storage/assets/images/products/product-details.png')}}" alt="Product Details">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-desc mb-30 pl-20">
                            <h3>Nail Polish Removers </h3>
                            <div class="price">
                                <span class="old-price">$140.00 </span>
                                <span class="new-price">- $110.00</span>
                            </div>
                            <div class="product-review">
                                <div class="rating">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>
                                </div>
                                <div class="rating-count">255 Reviews</div>
                            </div>
                            <p>
                                Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
                            </p>
                            <ul class="product-category-list">
                                <li>Availablity: <span>In Stock</span></li>
                                <li>Tags: <span>Nail, Lover</span> </li>
                            </ul>
                            <div class="input-counter-area">
                                <h4>Quantity</h4>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="ri-add-fill"></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class="ri-subtract-line"></i></span>
                                </div>
                            </div>

                            <div class="product-add-btn">
                                <button type="submit" class="default-btn border-radius-5">
                                    Add To Cart <i class="flaticon-shopping-cart-empty-side-view"></i>
                                </button>
                                <ul class="products-action">
                                    <li><a href="compare.html"> <i class="ri-arrow-left-right-line"></i></a></li>
                                    <li><a href="wishlist.html"><i class="ri-heart-line"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-share">
                                <ul>
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://vimeo.com/" target="_blank">
                                            <i class="ri-vimeo-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- QuickView Modal Area End -->

<!-- Jquery Min JS -->
<script src="{{asset('/storage/assets/js/jquery.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('/storage/assets/js/plugins.js')}}"></script>
<!-- Custom  JS -->
<script src="{{asset('/storage/assets/js/custom.js')}}"></script>
</body>
</html>
