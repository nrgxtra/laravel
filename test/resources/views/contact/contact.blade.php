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

                        <form action="/contact" method="post" class="contact_form" id="contact_form">
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
                                    <input type="text" name="email" value="{{$email}}"/>
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

                                <div class="footer_btn">
                                    <button type="submit" class="text-center text-grey-100 rounded mt-4 py-1 px-3 hover:bg-violet-500" style="background: #371352">Message us</button>
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
