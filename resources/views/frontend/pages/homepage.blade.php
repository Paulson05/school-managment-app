@extends('frontend.template.master')
@section('body')
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="{{secure_asset('frontend/images/slider.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Creative Thinking &amp; Innovation</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-default">SEE Programs</a>
                                <a href="#" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{secure_asset('frontend/images/slider-2.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>We foster wisdom</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-default">SEE Programs</a>
                                <a href="#" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{secure_asset('frontend/images/slider-3.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Campus life @ Unisco</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="campus-life.html" class="btn btn-default">Campus Life</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries</p>
                <img src="images/welcom_sign.png" class="img-fluid" alt="welcom-img">
            </div>
            <div class="col-md-4">
                <img src="images/campus/campus-img_05.jpg" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>


<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Courses</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="images/courses_1.jpg" class="img-fluid" alt="courses-img">
                        <div class="courses_box-img">
                            <div class="courses-link-wrap">
                                <a href="course-detail.html" class="course-link"><span>course Details </span></a>
                                <a href="admission-form.html" class="course-link"><span>Join today </span></a>
                            </div>

                        </div>
                    </div>

                    <div class="courses_icon">
                        <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                    </div>
                    <a href="course-detail.html" class="course-box-content">
                        <h3>Biochemistry</h3>
                        <p>When an unknown printer took a galley...</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="images/courses_2.jpg" class="img-fluid" alt="courses-img">
                        <div class="courses_box-img">
                            <div class="courses-link-wrap">
                                <a href="course-detail.html" class="course-link"><span>course Details </span></a>
                                <a href="admission-form.html" class="course-link"><span>Join today </span></a>
                            </div>

                        </div>
                    </div>

                    <div class="courses_icon">
                        <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                    </div>
                    <a href="course-detail.html" class="course-box-content">
                        <h3>History</h3>
                        <p>When an unknown printer took a galley...</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="images/courses_3.jpg" class="img-fluid" alt="courses-img">
                        <div class="courses_box-img">
                            <div class="courses-link-wrap">
                                <a href="course-detail.html" class="course-link"><span>course Details </span></a>
                                <a href="admission-form.html" class="course-link"><span>Join today </span></a>
                            </div>

                        </div>
                    </div>

                    <div class="courses_icon">
                        <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                    </div>
                    <a href="course-detail.html" class="course-box-content">
                        <h3>Human Sciences</h3>
                        <p>When an unknown printer took a galley...</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="images/courses_4.jpg" class="img-fluid" alt="courses-img">
                        <div class="courses_box-img">
                            <div class="courses-link-wrap">
                                <a href="course-detail.html" class="course-link"><span>course Details </span></a>
                                <a href="admission-form.html" class="course-link"><span>Join today </span></a>
                            </div>

                        </div>
                    </div>

                    <div class="courses_icon">
                        <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                    </div>
                    <a href="course-detail.html" class="course-box-content">
                        <h3>Earth Sciences</h3>
                        <p>When an unknown printer took a galley...</p>
                    </a>
                </div>
            </div>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-default btn-courses">View all courses</a>
            </div>
        </div>
    </div>
</section>


<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                    <div class="row">
                        <div class="col-sm-3"> <img src="images/upcoming-event-img.jpg" class="img-fluid" alt="event-img"></div>
                        <div class="col-sm-9"> <h3>Grace and Academic Life </h3>
                            <span>06-Nov-17</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#">Read More</a></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-3"> <img src="images/upcoming-event-img.jpg" class="img-fluid" alt="event-img"></div>
                        <div class="col-sm-9"> <h3>Are Drugs Really Dangerous? </h3>
                            <span>14-Nov-17</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem has been...</p>
                            <a href="#">Read More</a></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-3"> <img src="images/upcoming-event-img.jpg" class="img-fluid" alt="event-img"></div>
                        <div class="col-sm-9"> <h3>Annual Day Celebrations</h3>
                            <span>25-Dec-17</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum...</p>
                            <a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p>06</p>
                                <span>Nov.17</span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3>Eestibulum sodales metus.</h3>
                            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
                            <hr class="event_line">
                        </div>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p>06</p>
                                <span>Nov.17</span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3>There are many variations</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <hr class="event_line">
                        </div>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p>10</p>
                                <span>Nov.17</span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3>Integer faucibus nulla a ligula.</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter">39</span> Teachers
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter">2600</span> Students
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter">56</span> Courses
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter">13</span> Years Exp.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="blog-post.html" class="home_blog_link">
                    <div class="blog-img_box">
                        <img src="images/blog-img_1.jpg" class="img-fluid blog_display" alt="blog-img">
                        <div class="blogtitle blogtitle-rtl">
                            <h3>Eestibulum sodales metus</h3>
                            <i class="icon-user fa-common" aria-hidden="true"></i>
                            <p>by: admin</p>
                            <i class="icon-speedometer fa-common" aria-hidden="true"></i>
                            <p>9- Nov-2016</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="blog-post.html" class="home_blog_link">
                    <div class="blog-img_box">
                        <img src="images/blog-img_3.jpg" class="img-fluid blog_display" alt="blog-img">
                        <div class="blogtitle blogtitle-rtl">
                            <h3>Contrary to popular belief</h3>
                            <i class="icon-user fa-common" aria-hidden="true"></i>
                            <p>by: admin</p>
                            <i class="icon-speedometer fa-common" aria-hidden="true"></i>
                            <p>9- Nov-2016</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="blog-post.html" class="home_blog_link">
                    <div class="blog-img_box">
                        <img src="images/blog-img_2.jpg" class="img-fluid blog_display" alt="blog-img">
                        <div class="blogtitle blogtitle-rtl">
                            <h3>pains to avoidworse pains</h3>
                            <i class="icon-user fa-common" aria-hidden="true"></i>
                            <p>by: admin</p>
                            <i class="icon-speedometer fa-common" aria-hidden="true"></i>
                            <p>9- Nov-2016</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="blog-post.html" class="home_blog_link">
                    <div class="blog-img_box">
                        <div class="blog-video">
                            <div class="blog-play_btn"> <img src="images/play-btn.png" alt="play-btn"> </div>
                            <img src="images/blog-img_4.jpg" class="img-fluid blog_display" alt="blog-img">
                        </div>

                        <div class="blogtitle blogtitle-rtl">
                            <h3>principle selection rejects</h3>
                            <i class="icon-user fa-common" aria-hidden="true"></i>
                            <p>by: admin</p>
                            <i class="icon-speedometer fa-common" aria-hidden="true"></i>
                            <p>9- Nov-2016</p>
                        </div>
                    </div>
                </a>
            </div>
</section>


<div id="instafeed"></div>
@endsection
