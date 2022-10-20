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
                        <h3>Appointment</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner5.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Booking Area -->
    <div class="booking-area-two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="book-img-two">
                        <img src="{% static 'images/book/book-img2.jpg' %}" alt="Book"/>
                        <div class="book-shape1">
                            <img src="{% static 'images/book/book-shape.png' %}" alt="Book"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="booking-form pl-20">
                        <div class="section-title mb-45">
                            <span>For Your Service</span>
                            <h2 style="text-align: center">Your reservation has been made</h2>
                            <h3 style="text-align: center">You will receive email confirmation shortly.</h3>
                        </div>
                        <div class="default-btn">
                            <a href= "{% url 'about' %}" style="text-align: center; color: white">BACK</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Area End -->
{% endblock %}
