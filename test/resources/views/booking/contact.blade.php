@extends('base')
@section('content')
    <div class="clearfix"></div>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>Get In Touch With Us</span>
            </div>
            <div class="clearfix"></div>

            <!-- BOOK ONLINE -->
            <div id="book_online" class="booking_popup">
                <div class="book_online">
                    <div class="makeup_fl_form">

                        <form action="/booking" method="post" class="contact_form" id="contact_form">
                            @csrf

                            <div class="fl-col-6">
                                <div class="your-name">
                                    <label>Name<span>*</span></label>
                                    <input type="text" name="name" placeholder="Name"/>
                                </div>
                            </div>
                            <div class="fl-col-6 last">
                                <div class="your-email">
                                    <label>Email<span>*</span></label>
                                    <input type="text" name="email" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="fl-col-12">
                                <div class="your-phone">
                                    <label>Subject</label>
                                    <input type="text" name="subject" placeholder="Subject"/>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="your-message">
                                <label>Message: <span>*</span></label>
                                <textarea name="message" placeholder="Message" cols="3" rows="15"></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn-dark">Book Online</button>
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
            <!-- /BOOK ONLINE -->

        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->

@endsection
