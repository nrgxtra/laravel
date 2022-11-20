<!-- BOOK ONLINE BOXLIGHT -->
<div id="book_online" class="booking_popup">

    <div class="book_online">
        <div class="makeup_fl_form">
            <h3>Book Online</h3>

            <form class="contact_form" id="booking-form" action="{{ route('booking-form.store') }}" method="post">
                <input type="hidden" id="token" value="{{csrf_token()}}"/>
                <div id="res"></div>
                <div class="fl-col-6">
                    <div class="your-name">
                        <label>Name<span>*</span></label>
                        <input type="text" id="name" placeholder="Name"/>
                    </div>
                </div>
                <div class="fl-col-6 last">
                    <div class="your-email">
                        <label>Email<span>*</span></label>
                        <input type="text" id="email" placeholder="Email"/>
                    </div>
                </div>
                <div class="fl-col-6">
                    <div class="your-phone">
                        <label>Phone<span>*</span></label>
                        <input type="text" id="phone" placeholder="Phone Number"/>
                    </div>
                </div>
                <div class="fl-col-6 last">
                    <div class="fl-col-8">
                        <div class="datepicker-input" data-date-format="dd / mm / yy" data-first-day="1">
                            <label>Date: <span>*</span></label>
                            <input type="datetime" id="reservation-date" name="reservation-date">
                        </div>
                    </div>
                    <div class="fl-col-4 last">
                        <div class="your-time">
                            <label>Time: <span>*</span></label>
                            <input id="time" type="text" class="time"/>
                        </div>
                    </div>

                </div>
{{--                <div class="fl-col-4 last">--}}
{{--                    <div class="your-time">--}}
{{--                        <label>Service: <span>*</span></label>--}}
{{--                        <input id="service" type="text" class="time"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="clearfix"></div>
                <div class="your-message">
                    <label>Message: <span>*</span></label>
                    <textarea id="message" placeholder="Message" cols="3" rows="5"></textarea>
                </div>
                <div class="button">
                    <button type="submit" id="btn"
                            class="text-center text-grey-100 rounded mt-4 py-1 px-3 hover:bg-violet-500"
                            style="background: #371352">
                        Book Online
                    </button>
                </div>
                <!-- RETURN MESSAGES -->
                <div class="returnmessage"
                     data-success="Your message has been received, We will contact you soon."></div>
                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                <!-- /RETURN MESSAGES -->
            </form>
        </div>
    </div>
</div>

<!-- /BOOK ONLINE BOXLIGHT -->
<script>

    $(document).ready(function () {
        $('#booking-form').submit(function (e) {
            e.preventDefault();
            let url = $(this).attr('action');
            const serviceName = localStorage.getItem("service-name")
            $("#btn").attr('disabled', true);
            $.post(url, {
                '_token': $("#token").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                date: $("#reservation-date").val(),
                time: $("#time").val(),
                message: $("#message").val(),
                service: serviceName,
            },  function (response) {
                if (response.code === 400){
                    $("#btn").attr('disabled', false);
                    let error = '<span class="alert alert-danger text-red-500">'+response.msg+'</span>'
                    $("#res").html(error)
                }else if(response.code === 200)
                {
                    $("#btn").attr('disabled', false);
                    let success = '<span class="alert alert-success text-green-500">'+response.msg+'</span>'
                    $("#res").html(success)
                }
                });

            setTimeout(function() {
                window.location.href =' /services'
            }, 3000);


        })
    })

</script>
