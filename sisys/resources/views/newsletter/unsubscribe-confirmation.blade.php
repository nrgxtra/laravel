{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Subscribe</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Subscribe</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner6.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <div style="display: flex; justify-content: center; align-items: center">
        <div class="contact-form">
            <h3 class="user-title"> Are You Sure?</h3>
            <form id="contactForm" method="post">
                {% csrf_token %}
                <div class="row">
                    <button class="default-btn" type="submit">
                        Unsubscribe <i class="flaticon-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}