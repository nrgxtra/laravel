@extends('base')
@section('content')

    <div class="clearfix"></div>

    <!-- CONTENT WRAP -->
    <div class="makeup_fl_content_wrap">

        <!-- COMMON -->
        <div class="makeup_fl_common">

            <div class="makeup_fl_title_holder">
                <div class="line"></div>
                <span>About Our Salon</span>
            </div>
            <div class="common_img">
                <img src="{{asset('storage/img/about/about_img.jpg')}}" alt=""/>
                <div class="overlay"></div>
            </div>
            <div class="common_full_info">
                <div class="common_info">
                    <p>The secret to the motion and the breathtaking volume of this long hair look is purely in the
                        styling. Cut with gentle layers and long tapering on the sides, all the action is blow dried and
                        hot ironed into the long tresses, strand by strand. </p>
                </div>
            </div>
            <!-- OUR TEAM -->
            <div class="makeup_fl_about_team">
                <div class="title_holder">
                    <h3>Our Dedicated Team</h3>
                </div>
                <div class="team_holder makeup_fl_masonry">
                    @if($members)
                        @foreach($members as $member)
                            <!-- SPECIALIST #1 -->
                            <div class="specialist makeup_fl_masonry_in">
                                <div class="spc_img">
                                    <img src="{{$member->image ? asset('storage/' . $member->image) : asset('storage/img/empti-staff.jpg')}}" alt=""/>
                                    <div class="overlay"></div>
                                </div>
                                <div class="spc_name">
                                    <h3>{{$member->name}}</h3>
                                    <span>{{$member->specialty}}</span>
                                    <p>{{$member->bio}}</p>
                                </div>
                                <div class="makeup_fl_social_icons">
                                    <ul>
                                        <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                        <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                        <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /SPECIALIST #1 -->
                        @endforeach

                    @else

                    @endif



                </div>
            </div>
            <!-- /OUR TEAM -->
        </div>
        <!-- /COMMMON -->

    </div>
    <!-- /CONTENT WRAP -->
@endsection
