{% extends 'base.html' %}
{% load static %}
{% block content %}
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="inner-title">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <li>
                                    <a href="../index1.blade.php">Home</a>
                                </li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                        <div class="col-lg8" style="text-align: center">
                            <h1>Your Cart Is Empty</h1>
                            <h3 >You may want to add something from our
                                <a href="{% url 'shop-home' %}" style="color: #911439">SHOP</a>
                            </h3>
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

        <!-- Start Cart Area -->
		<section class="cart-wraps-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<form>
							<div class="cart-wraps">
                                <div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>

												<th scope="col">Total Quantity</th>
												<th scope="col">Total Amount</th>
											</tr>
										</thead>

										<tbody>
											<tr>
                                                 <td class="product-quantity">
													<span class="unit-amount">{{ order.get_cart_quantity }}</span>
												</td>
												<td class="product-price">
													<span class="unit-amount">${{ order.get_cart_total | floatformat:2}}</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>

												<th scope="col">Product</th>
												<th scope="col">Name</th>
												<th scope="col">Price</th>
												<th scope="col">Quantity</th>
												<th scope="col">SubTotal</th>
											</tr>
										</thead>

										<tbody>
                                        {% for item in items %}
											<tr>
												<td class="product-thumbnail">
													<a href="#">
														<img src="{{ item.product.pictureURL }}" alt="Image">
													</a>
												</td>

												<td class="product-name">
													<span class="item" style="font-size: larger">{{item.product.name}}</span>
                                                </td>

												<td class="product-price">
													<span class="unit-amount">${{ item.product.price | floatformat:2 }}</span>
												</td>

												<td class="product-quantity">
													<div class="input-counter">
														<span data-product="{{ item.product.id }}" data-action="remove" class="minus-btn update-cart">
															<i class="ri-subtract-line"></i>
														</span>
														<input type="text" value={{ item.quantity }}>
														<span data-product="{{ item.product.id }}" data-action="add" class="plus-btn update-cart">
															<i class="ri-add-fill"></i>
														</span>
													</div>
												</td>
                                            <td class="product-quantity">
													<span class="unit-amount">${{ item.get_total |floatformat:2 }}</span>
												</td>
											</tr>
                                        {% endfor %}
										</tbody>
									</table>
								</div>
                            </div>
						</form>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 text-end">
                                    <a href={% url 'shop-home' %} class="default-btn two">
                                        Continue Shopping
                                    </a>
                                    {% if cart_items > 0 %}
                                    <a href="{% url 'checkout' %}" class="default-btn">
                                        Checkout
                                    </a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cart Area -->
{% endblock %}
<script src="{% static 'js/refresh.js' %}"></script>
