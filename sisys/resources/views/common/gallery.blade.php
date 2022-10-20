{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3> Gallery</h3>
                        <ul>
                            <li>
                                <a href="../index1.blade.php">Home</a>
                            </li>
                            <li> Gallery </li>
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

    <!-- Gallery Area -->
    <div class="gallery-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-content">
                        <div class="title">
                            <h2>Follow Us On Instagram</h2>
                        </div>
                                <div class="gallery-all-img">
                                    {% if pic1 %}
                                    <div class="img">
                                        <img src="{{ pic1.imageURL }}" style="object-fit: cover" alt="Gallery" width="420" height="380"/>
                                        <div class="follow-btn-area">
                                            <a href="https://www.instagram.com/?hl=en" target="_blank"
                                               class="follow-btn">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    {% endif %}
                                {% if pic2 %}
                                    <div class="img2">
                                        <img src="{{ pic2.imageURL }}" style="object-fit: cover" width="300" height="205" alt="Gallery" />
                                    </div>
                                {% endif %}
                                {% if pic3 %}
                                    <div class="img3">
                                        <img src="{{ pic3.imageURL }}" style="object-fit: cover" alt="Gallery" width="300" height="200"/>
                                    </div>
                                {% endif %}
                                    <div class="vector-img">
                                        <img src="{% static 'images/gallery/vector-img2.png' %}" alt="Gallery"/>
                                    </div>
                                </div>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="gallery-all-img-two">
                                    {% if pic4 %}
                                <div class="img">
                                    <img src="{{ pic4.imageURL }}" style="object-fit: fill" width="420" height="380" alt="Gallery"  />
                                    <div class="follow-btn-area">
                                        <a href="https://www.instagram.com/?hl=en" target="_blank" class="follow-btn">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </div>
                                </div>
                                {% endif %}
                                    {% if pic5 %}
                                <div class="img2">
                                    <img src="{{ pic5.imageURL }}" style="object-fit: fill" width="300" height="200" alt="Gallery" />
                                </div>
                                {% endif %}
                                    {% if pic6 %}
                                <div class="img3">
                                    <img src="{{ pic6.imageURL }}" style="object-fit: fill"  width="300" height="200" alt="Gallery" />
                                </div>
                                    {% endif %}
                        <div class="vector-img">
                            <img src="{% static 'images/gallery/vector-img.png' %}" alt="Gallery"/>
                        </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

{% endblock %}
