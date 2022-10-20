{% extends 'base.html' %}
{% load static %}
{% block content %}
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="inner-title">
                            <h3>404 Error Page</h3>
                            <ul>
                                <li>
                                    <a href="{% url 'home' %}">Home</a>
                                </li>
                                <li>404 Error Page</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <div class="inner-img">
                            <img src="{% static 'images/inner-banner/inner-banner1.png' %}" alt="Inner Banner" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start 404 Error -->
		<div class="error-area ptb-100">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<h1>4 <span>0</span> 4</h1>
						<h3>Oops! Page Not Found</h3>
						<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
						<a href="{% url 'home' %}" class="default-btn">
							Return To Home Page
						</a>
					</div>
				</div>
			</div>
		</div>
        <!-- End 404 Error -->
{% endblock %}