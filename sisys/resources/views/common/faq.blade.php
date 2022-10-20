{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>FAQ</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner4.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- FAQ Area -->
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    WHY DO I NEED A MAKEUP ARTIST?
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                        1. to look your best, in person and on camera
                                    </p>
                                    <p>
                                        2. to have access to the top products in the beauty industry without having to
                                        purchase them, and
                                    </p>

                                    <p>
                                    3. to relieve any stress that may come with your beauty routine or with makeup
                                    needs for a special event.
                                    </p>


                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    WHAT IS YOUR MAKEUP SPECIALTY AND AREA OF EXPERTISE?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        Many of my clients initially contact me because they like the client photos on my website.
                                        They often use the word “natural,” and that is how they want to look. To me, natural means that your skin looks evened out and more youthful. Your makeup looks fresh and polished, and it accentuates your best features. My favorite makeup approach is an overall natural
                                        look with some special accents, such as a pop of color on the lips or defined eyes.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    WHAT PRODUCTS DO YOU USE?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        I use different products, depending on the situation or event.
                                        For clients who will be interacting both in person and on camera,
                                        I use specialty foundations and powders that exactly match skin tone and provide a
                                        flawless finish that looks impeccable, both in person and on camera.
                                        I use high-definition foundation, powders, and contouring products for people
                                        appearing only on camera. I also research and curate the best products from top
                                        health conscious makeup brands to ensure that I have top-shelf and safe products
                                        in my makeup kit—products that have been tried and tested, and are trusted by
                                        professional makeup artists. I carry products not only for special events,
                                        but for everyday makeup wearers, health-conscious individuals who are interested
                                        in safer products, people with allergies and sensitivities, and vegans.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    HOW DID YOU COME UP WITH YOUR BUSINESS NAME?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        I was getting lots of requests for services and I knew I had to come up with a name
                                        pretty quickly. What about "Sisy`s Nails?" I went with, "Sisy`s Nails" as a play on words.
                                        My company has evolved to hone in on my niche clientele base.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    HOW FAR IN ADVANCE DO I HAVE TO BOOK?
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                        My bridal makeup services require advance booking,
                                        and I recommend that you contact me between six and twelve months in advance
                                        for these services. Although the makeup industry can accommodate last-minute
                                        needs—and I have worked within two weeks of booking at times—a month
                                        or two out for booking non-bridal services is not the norm.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    WHAT IS THE BOOKING PROCESS?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        Once the date of service, time frame, and price are confirmed,
                                        I require a signed contract.
                                        For weddings, I also require an up-front deposit.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    HOW DO I PAY?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        For nearly all makeup clients, I accept a check or credit card payment.
                                        For wedding clients, I require final payment be made two weeks before the wedding.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-fill"></i>
                                    WHAT ARE YOUR RATES?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        My rates are pretty consistent with other professional makeup artists in our area.
                                        I tend to be slightly more from what I am told.
                                        I am a boutique company. Typically, when I book a wedding,
                                        I only book one-a-day, so I feel relaxed and focused without being rushed.
                                        I also use a lot of high-end natural skincare and makeup products.
                                        These high-end natural companies are independent and create their
                                        lines in small batches in the Spain, so the product can be pricey even for
                                        professional makeup artists.

                                        I also prefer to provide personalized quotes because I offer many specific,
                                        tailored services, and because travel costs can be different.
                                        For an estimated price per service, please contact me with the type of makeup service needed
                                        and location information.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area End -->
{% endblock %}