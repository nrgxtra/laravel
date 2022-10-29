@extends('base')
@section('content')

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <!-- BLOG #1 -->
        <div class="makeup_fl_blog_list">
            <div class="common_img">
                <img src="{{asset('storage/img/blog/1.jpg')}}" alt=""/>
                <a href="blog_single.blade.php">
                    <div class="overlay"></div>
                </a>
            </div>
            <div class="common_full_info">
                <div class="title_holder">
                    <h3><a href="blog_single.blade.php">Latest Make-up Trends for Weddings</a></h3>
                    <span><a href="#">Fashion</a> / <a href="#">Feb 17, 2017</a></span>
                </div>
                <div class="common_info">
                    <p>The secret to the motion and the breathtaking volume of this long hair look is purely in the
                        styling. Cut with gentle layers and long tapering on the sides, all the action is blow dried and
                        hot ironed into the long tresses, strand by strand. </p>
                </div>
                <div class="makeup_fl_btn">
                    <a href="blog_single.blade.php">Read More</a>
                </div>
            </div>
        </div>
        <!-- /BLOG #1 -->

    </div>
    <!-- /COMMON -->

    <!-- PAGINATION -->
    <div class="makeup_fl_pagination">
        <div class="makeup_fl_pagination_in">
            <div class="pg_number">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="xcon-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="pages">
                <span>Viewing page 1 of 2</span>
            </div>
        </div>
    </div>
    <!-- /PAGINATION -->

@endsection
