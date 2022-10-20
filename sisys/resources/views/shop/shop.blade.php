{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Shop</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            {% if user.is_staff %}
                                <li>
                                    <a href="{% url 'add-item' %}">ADD ITEM</a>
                                </li>
                            {% endif %}
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static "images/inner-banner/inner-banner8.png" %}" alt="InnerBanner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Shop Area -->
    <div class="shop-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9" style="width:100%">
                    <div class="product-topper mb-45">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-6">
                                <div class="product-title">
                                    <h3>Showing 1-6 of {{ items.count }} results</h3>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        {% for item in page.object_list %}
                            <div class="col-lg-4 col-md-6">
                                <div class="products-card products-card-short-css" >
                                    <div class="product-img" >
                                        <a href="{% url 'item-details' item.id %}">
                                            <img src="{{  item.pictureURL }}" alt="Blog" style="object-fit: cover" width="305" height="305"/>
                                        </a>

                                    </div>
                                    <div class="content">
                                        <h2><a href="{% url 'item-details' item.id %}">{{ item.name }}</a></h2>
                                        <span style="font-size: larger; font-weight: bold">{{ item.price | floatformat:2 }} $</span>
                                        {% if user.is_staff %}
                                            <div>
                                                <a class="button" style="font-size: larger"
                                                   href="{% url 'update-item' item.id %}">Update</a>
                                            </div>
                                            <div>
                                                <a class="button" style="font-size: larger"
                                                   href="{% url 'delete-item' item.id %}">Delete</a>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    {% if page.object_list %}
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="pagination-area">
                                {% if page.has_previous %}
                                    <a href="{% url 'shop-home' %}?page={{ page.previous_page_number }}"
                                       class="prev page-numbers">
                                        <i class="flaticon-arrow-pointing-to-left"></i>
                                    </a>
                                {% endif %}
                                {% for i in products_paginator %}
                                    {% if i.number == page.number %}
                                        <span class="page-numbers current"
                                              aria-current="page">{{i.number}}</span>
                                    {% else %}
                                        <a href="{% url 'shop-home' %}?page={{ i.number }}" class="page-numbers">{{ i.number }}</a>
                                    {% endif %}
                                {% endfor %}

                                {% if page.has_next %}
                                    <a href="{% url 'shop-home' %}?page={{ page.next_page_number }}"
                                       class="next page-numbers">
                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Area End -->
{% endblock %}


