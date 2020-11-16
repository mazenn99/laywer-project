@extends('template.master')
@section('content')
<!-- Start mobile memu -->
<header class="hidden-lg hidden-md">
    <div class="logo-port"><img src="img/logo.png" alt="logo-mobile"></div>
</header>
<ul class="mobile_menu ">
    <li>
        <a href="index.html">الرئيسية</a>
    </li>
    <li>
        <a href="about.html">من نحن</a>
    </li>
    <li>
        <a href="blog-2.html">تقارير سوق المحاماة</a>
    </li>
    <li><a href="#">خدماتنا</a></li>
    <li>
        <a href="#">المدونة القانونية</a>
        <ul class="submenu">
            <li>
                <a href="blog-4.html">المقالات</a>
                <a href="blog.html">أخبار قانونية</a>
                <a href="blog-3.html">أنظمة وقوانين</a>
            </li>
        </ul>
    </li>
    <li><a href="blog-2.html"> خدمات قانونية </a></li>
    <li>
        <a href="order6.html">لقاء محامي</a>

    </li>
    <li> <a href="order5.html">أطلب استشارتك</a> </li>
</ul>
<!-- End mobile Menu -->

<!--================Header Area End =================-->

<!--================Banner Area =================-->
<section class="banner_area banner_one" style="direction: rtl;">
    <div class="container">
        <div class="banner_content">
            <h3>اطلب استشارتك </h3>
        </div>
        <div class="banner_link">
            <div class="abnner_link_inner">
                <a class="active" href="index.html">الرئيسية</a>
                <a href="contact-us.html">اطلب استشارتك  </a>
            </div>
        </div>
    </div>
</section>


<!--================End Banner Area =================-->

<!--================Contact Us Area =================-->
<section class="contact_us_area" style="direction: rtl;">
    <div class="container">
        <div class="contact_us_inner">
            <div class="sec_middle_title">
                <h1>طلب استشاره</h1>
                <!--  <p>Lorem ipsum dolor sit amet cons ectetur elit Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis consectetur elit Vesti bulum nec odio ipsum ons ectetur elit. </p> -->
            </div>




            <div class="row">
                <div class="col-md-4">
                    <div class="contact_us_details">
                        <div class="row">

                            <div class="c_details_item">
                                <div class="media">
                                    <a href="https://wa.me/+96687568758">
                                        <div class="media-left">
                                            <i class="fa fa-whatsapp"></i>
                                        </div>
                                        <div class="media-body">
                                            <p> أضغط هنا للتواصل معنا عبر الواتساب لارسال استشارتك لنا</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!--  <div class="c_details_item">
                                  <div class="media">
                                      <div class="media-left">
                                          <i class="fa fa-envelope-o"></i>
                                      </div>
                                      <div class="media-body">
                                          <a href="#">sales@brooks.com</a>
                                          <a href="#">support@brooks.com</a>
                                      </div>
                                  </div>
                              </div>


                              <div class="c_details_item">
                                  <div class="media">
                                      <div class="media-left">
                                          <i class="fa fa-phone"></i>
                                      </div>
                                      <div class="media-body">
                                          <a href="#">91 120 4255611</a>
                                          <a href="#">91 120 4255611</a>
                                      </div>
                                  </div>
                              </div>-->

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <span class="errorMessage" style="display: none;" id="info">  </span>
                    <span class="successMessage" id="successMessage">  </span>
                    <div class="row">
                        <form class="contact_us_form" id="contactform" novalidate="novalidate">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="الاسم">
                                <span class="errorMessage" style="display: none;" id="errorName">  </span>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="البريد الالكتروني">
                                <span class="errorMessage" style="display: none;" id="errorEmail">  </span>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="رقم الجوال ">
                                <span class="errorMessage" style="display: none;" id="errorPhone">  </span>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="text" id="text" rows="1" placeholder="ملخص الاستشاره"></textarea>
                                <span class="errorMessage" style="display: none;" id="errorText">  </span>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="button" id="send-btn-order5" value="submit" class="theme-btn btn-lg">أطلب استشاراتك</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--================weprovide-section-End=================-->


    <!--================Our Partner End =================-->
</section>
<!--================End Contact Us Area =================-->


@endsection
