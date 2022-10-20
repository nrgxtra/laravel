{% extends 'base.html' %}
{% load static %}
{% block content %}

    <!-- Modal Start -->
    <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="modal-search-form">
                        <input type="search" class="search-field" placeholder="Search...">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Post Details </h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Post Details</li>
                            {% if post.author == user %}
                                <li>
                                    <a href="{% url 'post_update' post.id post.slug %}">UPDATE</a>
                                </li>
                                <li>
                                    <a href="{% url 'post_delete' post.id post.slug %}">DELETE</a>
                                </li>
                            {% endif %}
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

    <!-- Blog Details Area -->
    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <h2 class="title">{{ post.title }}</h2>
                        <div class="blog-preview-img">
                            <img src="{{ post.imageURL }}" alt="Blog Details" style="object-fit: cover" width="616" height="375"/>
                        </div>
                        <ul class="tag-list">
                            <li class="active"><a href="{% url 'author_posts' post.author %}"> <i
                                    class='flaticon-user'></i>{{ post.author }}</a></li>
                            <li><i class='flaticon-clock'></i> {{ post.created_on | date }} </li>
                            {% if likes.count == 0 %}
                                <li>
                                    <a href="{% url 'like' post.id post.slug %}"><i
                                            class="ri-heart-line">{{ likes.count }}</i></a>
                                </li>
                            {% else %}
                                <li>
                                    <a href="{% url 'like' post.id post.slug %}"><i
                                            class="ri-heart-fill">{{ likes.count }}</i></a>
                                </li>
                            {% endif %}

                        </ul>

                        <div class="blog-article-content">
                            <ul>

                                <li>
                                tags:
                                    {% for t in tags %}
                                        {{ t }},
                                    {% endfor %}
                                </li>
                                <li>
                                    {{ post.content }}
                                </li>
                            </ul>
                        </div>
                        <div class="blog-comments-area">
                            <div class="comments-wrap">
                                <div class="comment-title">
                                    <h4>Comments {{ comments.count }}</h4>
                                </div>
                                {% if comments %}
                                    <ul class="comment-form">
                                        {% for comment in comments %}
                                            <li>
                                                <h3>{{ comment.name }}</h3>
                                                <span>{{ comment.created | date }}</span>
                                                <p>
                                                    {{ comment.content }}
                                                </p>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </div>

                            <div class="comments-form">
                                <div class="contact-form">
                                    <h3>Leave A Reply</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form id="contactForm" method="POST">
                                        {% csrf_token %}
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <span class="ml-2"></span>{{ form.name.label_tag }}
                                                    <input type="text"
                                                           class="form-control {% if form.name.errors %}is-invalid{% endif %}"
                                                           id="id_name"
                                                           name="name" value="{{ form.name.value|default:'' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <span class="ml-2"></span>
                                                    {{ form.email.label_tag }}
                                                    <span class="text-muted"><small>(Your email address will not be published)</small></span>
                                                    <input type="text"
                                                           class="form-control {% if form.email.errors %}is-invalid{% endif %}"
                                                           id="id_email"
                                                           name="email" value="{{ form.email.value|default:'' }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="ml-2"></span>{{ form.content.label_tag }}
                                                <textarea
                                                        class="form-control {% if form.content.errors %}is-invalid{% endif %}"
                                                        id="id_content"
                                                        name="content"
                                                        rows="4">{{ form.content.value|default:'' }}</textarea>
                                            </div>


                                            <div class="col-lg-12 col-md-12">
                                                <div class="agree-label">
                                                    <input type="checkbox" id="chb1">
                                                    <label for="chb1">
                                                        Save my name, email, and website in this browser for the next
                                                        time I comment.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->
{% endblock %}