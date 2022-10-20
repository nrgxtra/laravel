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
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static 'images/inner-banner/inner-banner2.png' %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Contact Information Area -->
    <div class="contact-information-area pt-100 pb-70">
        <div class="container">
            <div class="contact-information-max">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-email"></i>
                            <h3>Send Email</h3>
                            <p><a href="mailto:sisyeyebrows@gmail.com">sisi.eyebrows@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-telephone"></i>
                            <h3>Call Center</h3>
                            <p><a href="tel:+34123456789">+34 123 456 789</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="contact-info-card">
                            <i class="flaticon-pin"></i>
                            <h3>Visit Anytime</h3>
                            <p> 19, calle de viejo, Algesiras, Spain </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Area -->

    <!-- Contact Widget Area -->
    <div class="contact-widget-area pb-70">
        <div class="container">
            <div class="contact-widget-max">
                <div class="contact-form">
                    <div class="section-title text-center">
                        <h2>Do You’ve Any Question?</h2>
                    </div>
                    <form id="contactForm" method="post">
                        {% csrf_token %}
                        <div class="row">
                            {% for field in form %}
                                {% if field.name == 'message' %}
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            {{ field |as_crispy_field }}
                                        </div>
                                    </div>
                                {% else %}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ field |as_crispy_field }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                            <div class="help-block with-errors">
                                {{ errors | as_crispy_errors }}
                            </div>
                            <div class="col-lg-12">
                                <div class="agree-label">
                                    <label for="chb1">
                                        By Pressing Send Message You accept our <a href="{% url 'terms' %}">Terms & Conditions</a> And <a
                                            href="{% url 'privacy' %}">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Widget Area End -->
{% endblock %}