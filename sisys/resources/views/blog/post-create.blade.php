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
                        <h3>Create Post </h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Create Post</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner3.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="contact-form">
                    <div class="section-title text-center">
                        <h2>You can create Your post Here</h2>
                    </div>
                    <form id="contactForm" method="post" enctype="multipart/form-data">
                        {% csrf_token %}
                        <div class="row">
                            {% for line in form %}
                                {% if line.name == 'content' %}
                                    <div class="col-lg-12">
                                        {{ line |as_crispy_field}}{{ line.errors |as_crispy_errors}}
                                    </div>
                                {% else %}
                                    <div class="col-lg-6">
                                        {{ line |as_crispy_field}}{{ line.errors |as_crispy_errors}}
                                    </div>
                                {% endif %}
                            {% endfor %}

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Publish
                                </button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Area End -->

{% endblock %}