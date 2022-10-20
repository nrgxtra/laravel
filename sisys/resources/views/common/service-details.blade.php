{% extends 'base.html' %}
{% load static %}
{% block content %}


        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="inner-title">
                            <h3>Service Details</h3>
                            <ul>
                                <li>
                                    <a href="{% url 'home' %}">Home</a>
                                </li>
                                <li>Service Details</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <div class="inner-img">
                            <img src="{% static 'images/inner-banner/inner-banner11.png' %}" alt="Inner Banner" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services Details Area -->
        <div class="services-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar-area pr-20">
                            <div class="services-catagory">
                                <ul>
                                    {% for cat in category %}
                                    <li>
                                        <a href="{% url 'service_category' cat%}" >
                                            {{ cat }}
                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                    </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <div class="services-preview-img">
                                <img src="{{ service.imageURL }}" alt="Services Details" style="object-fit: cover" width="810" height="700"/>
                            </div>
                            <h2 class="title">{{ service.name}}</h2>
                            <p>{{ service.description | truncatewords:5}}</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="services-preview-img">
                                        <img src="{{ service.pic1URL }}" alt="Services Details" style="object-fit: cover" width="370" height="370"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="services-preview-img">
                                        <img src="{{ service.pic2URL }}" alt="Services Details" style="object-fit: cover" width="370" height="370"/>
                                    </div>
                                </div>
                            </div>
                            <h3>About This Service</h3>
                            <p>{{ service.description }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details Area End -->
{% endblock %}