{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Shop Details</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Shop Details</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static "images/inner-banner/inner-banner7.png" %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Product Details Area -->
    <div class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="product-details-desc">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="products-quickView-image">
                            <img src="{{ product.picture.url }}" alt="Product Details" style="object-fit: cover" width="450" height="450">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-desc mb-30 pl-20">
                            <h3>{{ product.name }} </h3>
                            <div class="price">
                                <span class="new-price">${{ product.price }} </span>
                            </div>
                            <p>
                                {{ product.description }}
                            </p>
                            <div class="product-add-btn">
                                <button data-product="{{ product.id }}" data-action="add"
                                        class="default-btn border-radius-5 update-cart">
                                    Add To Cart <i class="flaticon-shopping-cart-empty-side-view"></i>
                                </button>

                                <a href="{% url 'shop-home' %}" class="default-btn two">
                                Continue Shopping
                                </a>
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
    <!-- Product Details Area End -->
{% endblock %}
