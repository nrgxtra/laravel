{% extends 'base.html' %}
{% load static %}
{% block content %}
    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Checkout</h3>
                        <ul>
                            <li>
                                <a href="{% url 'home' %}">Home</a>
                            </li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{% static "images/inner-banner/inner-banner3.png" %}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Checkout Area -->
    <section class="checkout-area pt-100 pb-70">
        <div class="container">
            {% if not user.is_authenticated %}
                <div class="row">
                    <div class="checkout-user mb-45">
                        <h3 style="text-align: center">You must have a registration to place an order</h3>
                    </div>
                </div>
            {% else %}
                <div class="row">
                    <div class="col-lg-7" id="form-wrapper">
                        {% if not user.is_authenticated %}
                            <div class="row">

                                <div class="col-lg-7">
                                    <div class="checkout-user mb-45" style="align-content: center; text-align: center">
                                        <span> Already Have an Account? <a
                                                href="{% url 'login' %}">Click here to Log In</a></span>
                                        <span>  <a href="{% url 'register' %}">Or Register</a></span>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="checkout-coupon-form-area">
                                        <form class="checkout-coupon-form">
                                            <input type="text" class="form-control" placeholder="Coupon Code">
                                            <button class="subscribe-btn" type="submit">
                                                Apply
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box-element" id="form-wrapper">
                                    <form id="form">
                                        <div id="user-info">
                                            <div class="form-field">
                                                <input required class="form-control" type="text" name="name"
                                                       placeholder="Name..">
                                            </div>
                                            <div class="form-field">
                                                <input required class="form-control" type="email" name="email"
                                                       placeholder="Email..">
                                            </div>
                                        </div>

                                        <div id="shipping-info">
                                            <hr>
                                            <p>Shipping Information:</p>
                                            <hr>
                                            <div class="form-field">
                                                <input class="form-control" type="text" name="address"
                                                       placeholder="Address..">
                                            </div>
                                            <div class="form-field">
                                                <input class="form-control" type="text" name="city"
                                                       placeholder="City..">
                                            </div>
                                            <div class="form-field">
                                                <input class="form-control" type="text" name="province"
                                                       placeholder="Province..">
                                            </div>
                                            <div class="form-field">
                                                <input class="form-control" type="text" name="postcode"
                                                       placeholder="Post Code..">
                                            </div>
                                            <div class="form-field">
                                                <input class="form-control" type="text" name="phone"
                                                       placeholder="Phone..">
                                            </div>
                                        </div>

                                        <hr>
                                        <input id="form-button" class="btn btn-success btn-block" type="submit"
                                               value="Continue">
                                        <br>
                                    </form>
                                </div>
                                <div class="payment-box hidden" id="payment-info" style="display: none">
                                    <small>Paypal Options</small>
                                     <div id="paypal-button-container"></div>
                                    <div id="cod-payment">
                                    <small>Order With Cash On Delivery</small>
                                    <button class="default-btn" type="submit" id="cod">Order with COD</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="box-element">
                                    <a class="btn btn-outline-dark" href="{% url 'shopping-cart' %}">&#x2190; Back to
                                        Cart</a>
                                    <hr>
                                    <div class="checkout-table ml-20 mb-30">
                                        <h3>Your Order</h3>
                                        <div class="cart-wraps">
                                            <div class="cart-table table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    {% for item in items %}
                                                        <tr>
                                                            <td class="product-thumbnail">
                                                                <a href="cart.blade.php">
                                                                    <img src="{{ item.product.pictureURL }}"
                                                                         alt="Image">
                                                                </a>
                                                            </td>

                                                            <td class="product-name">
                                                                <a href="{% url 'shopping-cart' %}">{{ item.product.name }}</a>

                                                            </td>

                                                            <td class="product-quentaty">
                                                                x {{ item.quantity }}
                                                            </td>

                                                            <td class="product-price">
                                                                <span class="unit-amount">${{ item.get_total }}</span>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            Total
                                                        </td>

                                                        <td class="product-name">


                                                        </td>

                                                        <td class="product-quentaty">
                                                            {{ order.get_cart_quantity }}
                                                        </td>

                                                        <td class="product-price">
                                                            <span class="unit-amount">${{ order.get_cart_total }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            {% endif %}
        <script src="https://www.paypal.com/sdk/js?client-id=AX4FQrTraefkuHlH0I3D9FJI9j2UnojPRqIKq7neU_06KVKBQLm0oO1sZa0zibw7-SQDp1IMrhnF73eK&currency=USD"></script>

        <script>
            var total = '{{ order.get_cart_total }}'
            var cart_items = '{{ order.get_cart_quantity }}'
            if (cart_items !== '0') {
                // Render the PayPal button into #paypal-button-container
                paypal.Buttons({

                        // Set up the transaction
                        createOrder: function (data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: parseFloat(total).toFixed(2)
                                    }
                                }]
                            });
                        },

                        // Finalize the transaction
                        onApprove: function (data, actions) {
                            return actions.order.capture().then(function (orderData) {
                                // Successful capture! For demo purposes:
                                submitFormData()
                            });
                        }


                    }
                ).render('#paypal-button-container');
            }
        </script>
    <script>
    document.getElementById('cod').addEventListener('click', function (ev){
        payment = "COD"
        submitFormData()
    })
    </script>

    <script type="text/javascript">
        var shipping = '{{ order.shipping }}'
        var payment = 'PayPal'
        if (shipping === 'False') {
            document.getElementById('shipping-info').innerHTML = ''
            document.getElementById('cod-payment').innerHTML = ''
        }

        var form = document.getElementById('form')
        csrftoken = form.getElementsByTagName("input")[0].value
        form.addEventListener('submit', function (e) {
            e.preventDefault()
            document.getElementById('form-button').style.display = "none"
            document.getElementById('payment-info').style.display = "block"
        })
        /*
        document.getElementById('make-payment').addEventListener('click', function (e) {
            submitFormData()
        })

         */

        function submitFormData() {
            var userFormData = {
                'name': null,
                'email': null,
                'total': total,
                'payment':payment
            }
            var shippingInfo = {
                'address': null,
                'city': null,
                'province': null,
                'postcode': null,
                'phone': null,
            }
            if (shipping !== 'False') {
                shippingInfo.address = form.address.value
                shippingInfo.city = form.city.value
                shippingInfo.province = form.province.value
                shippingInfo.postcode = form.postcode.value
                shippingInfo.phone = form.phone.value
            }
            if (user !== 'AnonymousUser') {
                userFormData.name = form.name.value
                userFormData.email = form.email.value
            }


            var url = 'process-order'
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRFToken': csrftoken,
                },
                body: JSON.stringify({'form': userFormData, 'shipping': shippingInfo}),
            })
                .then((response) => response.json())

                .then((data) => {
                        console.log('success', data);
                        alert('Transaction completed');
                        cart = {}
                        document.cookie = 'cart=' + JSON.stringify(cart) + ";domain=;path=/"
                        window.location.href = "{% url 'shop-home' %}"
                    }
                )
        }
    </script>
    <!-- Checkout Area End -->
{% endblock %}
