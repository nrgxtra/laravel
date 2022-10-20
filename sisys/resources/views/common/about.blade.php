{% extends 'base.html' %}
{% load static %}
{% load crispy_forms_tags %}
{% load crispy_forms_field %}
{% load crispy_forms_filters %}
{% load crispy_forms_utils %}
{% block content %}

    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>About Us</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner1.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-slider owl-carousel owl-theme">
                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{% static 'images/about/about-img1.jpg' %}" style="object-fit: cover" alt="About" />
                                <div class="bottom-border bottom-border-color"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{% static 'images/about/about-img2.jpg' %}" style="object-fit: cover" alt="About" />
                                <div class="bottom-border bottom-border-color"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{% static 'images/about/about-img3.jpg' %}" style="object-fit: cover" alt="About" />
                                <div class="bottom-border bottom-border-color"></div>
                            </div>
                        </div>
                        <div class="about-vector">
                            <img src="{% static 'images/about/about-vector.png' %}" alt="About"/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Look Awesome Everyday</h2>
                            <p>You may follow our blog updates for everyday tips and tricks. </p>

                        </div>
                        <a href="{% url 'blog_home' %}" class="default-btn border-radius-5">Learn More <i
                                class="flaticon-arrow-pointing-to-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Services Area -->
    <div class="services-area section-bg ptb-100">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>Our Services</span>
                <h2>What We Offer</h2>
            </div>
            <div class="row">
                 {% for servis in services %}
                    <div class="col-lg-4 col-6">
                        <div class="services-card">
                            <a href="{% url 'service_details' servis.id %}">
                                <img src="{{ servis.imageURL }} " alt="Services" style="object-fit: cover" width="550" height="430"/>
                            </a>
                            <div class="content">
                                <h3><a href="{% url 'service_details' servis.id %}">{{ servis.name }}t</a></h3>
                                <a href="{% url 'service_details' servis.id %}" class="more-btn">
                                    <i class="flaticon-arrow-pointing-to-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                <div class="col-lg-12 text-center mt-20">
                    <a href="{% url 'services' %}" class="default-btn two border-radius-5">See All Service <i
                            class="flaticon-arrow-pointing-to-right"></i></a>
                </div>
            </div>
            <div class="services-vector">
                <img src="{% static 'images/services/services-vector.png' %}" alt="vector"/>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Intro Video Area -->
    <div class="intro-video-area section-bg pb-100" style="object-fit: cover">
        <div class="container" style="object-fit: cover">
            <div class="video-content" style="object-fit: cover">
                <a href="https://www.youtube.com/watch?v=ri-BM1i4WSs" class="play-btn">
                    <i class="ri-play-fill"></i>
                </a>
            </div>
            <div class="section-title text-center pt-100">
                <span class="color1">You're Welcomed!</span>
                <h2 class="color1">We Care About Your Look And Your well-Being</h2>
            </div>
        </div>
    </div>
    <!-- Intro Video Area End -->

    <!-- Team Area -->
    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>Our Staff</span>
                <h2>Our Excellent & Expert Staff</h2>
                <div class="section-vector">
                    <img src="{% static 'images/shape/section-vector.png' %}" alt="vector"/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <a href="#">
                                <img src="{% static 'images/team/team-img1.jpg' %}" style="object-fit: cover" alt="Team"/>
                            </a>
                            <ul class="social-links-btn">
                                <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>
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
                                    <a href="https://www.facebook.com/silvia.dimitrova.355" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#" style="text-align: center">
                                    Silviya
                                </a>
                            </h3>
                            <span style="text-align: center">Nail Art & Makeup Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End -->

    <!-- Booking Area -->
    <div class="booking-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="book-img">
                        <img src="{% static 'images/book/book-img1.jpg' %}" style="object-fit: cover"  width="750" height="730" alt="Book"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="booking-form pl-20">
                        <div class="section-title mb-45">
                            <span>For Your Service</span>
                            <h2>Make An Appointment</h2>
                        </div>
                        <form method="post">
                            {% csrf_token %}
                            <div class="row">
                                {% for field in form %}
                                    {% if field.name == 'message' %}
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            {{ field | as_crispy_field }}
                                        </div>
                                    </div>
                                    {% else %}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ field | as_crispy_field }}
                                        </div>
                                    </div>
                                    {% endif %}
                                {% endfor %}
                                <div class="help-block with-errors">
                                    {{ form.errors | as_crispy_errors }}
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Area End -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70 section-bg">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>News Feeds</span>
                <h2>Our Latest Blog Update</h2>
            </div>
            <div class="row justify-content-center">
                {% for post in resent_posts %}
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="{% url 'post_details' post.id post.slug %}" class="img">
                                <img src="{{ post.imageURL }}" alt="Blog" style="object-fit: cover" width="350" height="250"/>
                            </a>
                            <div class="content">
                                <ul>
                                    <li>
                                        <i class="flaticon-user"></i>
                                        {{ post.author_name }}
                                    </li>
                                    <li>
                                        <i class="flaticon-clock"></i>
                                        {{ post.created_on | date }}
                                    </li>
                                </ul>
                                <h3><a href="{% url 'post_details' post.id post.slug %}">{{ post.title }}</a></h3>
                                <a href="{% url 'post_details' post.id post.slug %}"
                                   class="default-btn two border-radius-5">Read More <i
                                        class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Gallery Area -->
    <div class="gallery-area pt-100">
        <div class="container-fluid p-0">
            <div class="gallery-width">
                <div class="follow-area">
                    <a href="https://www.instagram.com/?hl=en" target="_blank" class="follow-btn">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <h3>Follow Our Instagram</h3>
                </div>
                <div class="row">
                    {% for image in picks %}
                        <div class="col-lg-3 col-6">
                            <div class="gallery-img">
                                <img src="{{ image.imageURL }}" style="object-fit: cover" width="450" height="290" alt="Gallery"/>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

{% endblock %}
