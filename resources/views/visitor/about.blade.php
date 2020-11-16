@extends('template.master')
@section('content')
    <!-- Start mobile memu -->
    <header class="hidden-lg hidden-md">
        <div class="logo-port"><img src="{{asset('visitor')}}/img/logo.png" alt="logo-mobile"></div>
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
        <li><a href="order5.html">أطلب استشارتك</a></li>
    </ul>
    <!-- End mobile Menu -->

    <!--================Header Area End =================-->

    <!--================Banner Area =================-->
    <section class="banner_area banner_one" style="direction: rtl;">
        <div class="container">
            <div class="banner_content">
                <h3>من نحن</h3>
            </div>
            <div class="banner_link">
                <div class="abnner_link_inner">
                    <a class="active" href="index.html">الرئيسية</a>
                    <a href="about-us.html">من نحن</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Banner Area =================-->

    <!--================faq-page Area =================-->
    <div class="about-page">
        <!--================whoweare-section-Start=================-->
        <section>
            <div class="whoweare-section">
                <div class="inner-overlay">

                    <div class="whoweare-main about-history" style="direction: rtl;">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="abouthistroy-img">
                                    <img src="{{asset('visitor')}}/img/about-history.jpg" alt="about-history">
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="whoweare-group">
                                    <div class="whoweare-contents">
                                        <h2>من نحن</h2>
                                        <h4><strong> </strong><span></span></h4>
                                        <div class="fullwidth-gapper">
                                            <!-- show about us -->
                                            <span class="signature"><i>Johan Martin</i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================whoweare-section-Start=================-->

        <!--================howwork-section-Start=================-->
        <!-- <section style="direction: rtl;">
             <div class="howwork-section">
                 <div class="howwork-top">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="howwork-disc">
                                 <div class="styled-heading">
                                     <h2><span><strong>كيف<br> نؤدي عملنا</strong> <i class="styled-line"></i></span></h2>
                                     <p>
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                         eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                         in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="howwork-img">
                                 <img src="img/how-work.jpg" alt="how-work.jpg">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <div class="howwork-grid">
                         <div class="row">
                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <div class="howwork-panel">
                                     <div class="howwork-icon">
                                         <img src="img/icon/lead.png" alt="healthcare">
                                         <div class="howwork-content">
                                             <h3>LEAD <br> GENERATION</h3>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit, sed do eiusmod tempor  labore.
                                             </p>
                                             <a href="#" class="circle-btn">
                                                 <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <div class="howwork-panel">
                                     <div class="howwork-icon">
                                         <img src="img/icon/aquition.png" alt="healthcare">
                                         <div class="howwork-content">
                                             <h3>case-aquition <br>platform</h3>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit, sed do eiusmod tempor  labore.
                                             </p>
                                             <a href="#" class="circle-btn">
                                                 <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <div class="howwork-panel">
                                     <div class="howwork-icon">
                                         <img src="img/icon/inhouse.png" alt="healthcare">
                                         <div class="howwork-content">
                                             <h3>in-house <br> CALLING</h3>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit, sed do eiusmod tempor  labore.
                                             </p>
                                             <a href="#" class="circle-btn">
                                                 <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <div class="howwork-panel">
                                     <div class="howwork-icon">
                                         <img src="img/icon/finalwork.png" alt="healthcare">
                                         <div class="howwork-content">
                                             <h3>Do <br> Final Work</h3>
                                             <p>
                                                 Lorem ipsum dolor sit amet, consect etur adipiscing
                                                 elit, sed do eiusmod tempor  labore.
                                             </p>
                                             <a href="#" class="circle-btn">
                                                 <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>-->
        <!--================howwork-section-End=================-->

        <!--================award-section-Start=================-->
        <!--<section style="direction: rtl;">
           <div class="award-section">
               <div class="award-main">
                   <div class="row flex-panel">
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="award-content">
                               <div class="styled-heading">
                                   <h2><span><strong>الجوائز<br> والاوسمة</strong> <i class="styled-line"></i>
                                       </span></h2>
                                   <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                       eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                       Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                       laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                       in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                   </p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="award-grid">
                               <div class="award-group">
                                   <div class="award-panel"><img src="img/awards/award-1.png" alt="award-1"></div>
                                   <div class="award-panel"><img src="img/awards/award-2.png" alt="award-2"></div>
                                   <div class="award-panel"><img src="img/awards/award-3.png" alt="award-3"></div>
                               </div>
                               <div class="award-group">
                                   <div class="award-panel"><img src="img/awards/award-4.png" alt="award-4"></div>
                                   <div class="award-panel"><img src="img/awards/award-5.png" alt="award-5"></div>
                                   <div class="award-panel"><img src="img/awards/award-6.png" alt="award-6"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>-->
        <!--================award-section-End=================-->

        <!--================Testimonials Start =================-->
        <!--<section>
            <div class="testimonials-section">
                <div class="container">
                    <div class="page-heading">
                        <h2>أراء عملاؤئنا عنا</h2>
                    </div>
                    <div class="testimonials-mainpanel">
                        <div class="testimonials-slider owl-carousel">
                            <div class="testimonials-details">
                                <p>
                                    <img class="comma" src="img/comma.png" alt="comma">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute iruredolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</span>
                                </p>
                                <div class="testimonials-grid">
                                    <div class="testimonials-img">
                                        <img src="img/testimonial/Sandra-William.jpg" alt="Sandra-William">
                                    </div>
                                    <div class="testimonials-content">
                                        <h3>Sandra William</h3>
                                        <h6>Taxtion Excepteur</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-details">
                                <p>
                                    <img class="comma" src="img/comma.png" alt="comma">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute iruredolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</span>
                                </p>
                                <div class="testimonials-grid">
                                    <div class="testimonials-img">
                                        <img src="img/testimonial/David-Howell.jpg" alt="David-Howell">
                                    </div>
                                    <div class="testimonials-content">
                                        <h3>David Howell</h3>
                                        <h6>Taxtion Excepteur</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonials-details">
                                <p>
                                    <img class="comma" src="img/comma.png" alt="comma">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute iruredolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</span>
                                </p>
                                <div class="testimonials-grid">
                                    <div class="testimonials-img">
                                        <img src="img/testimonial/Glenn-Maxwell.jpg" alt="Glenn-Maxwell">
                                    </div>
                                    <div class="testimonials-content">
                                        <h3>Maxwell</h3>
                                        <h6>Taxtion Excepteur</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================Testimonials Start =================-->

        <!--================myteam-section-Start=================-->
        <!--<section>
            <div class="myteam-section">
                <div class="page-heading animated wow fadeInDown" data-wow-delay="100ms">
                    <h5>اكتشف فريفنا</h5>
                    <h2>فريق عملنا</h2>
                </div>
                <div class="container">
                    <div class="myteam-main">
                        <div class="myteam-gridpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <figure class="myteam-group animated wow fadeIn" data-wow-delay="100ms">
                                        <div class="myteam-img">
                                            <div class="myteam-inlineimg">
                                                <img src="img/team/team-1.jpg" alt="team-1">
                                                <div class="overlay">
                                                    <div class="social-media">
                                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="myteam-content">
                                            <h3>Jannie Allan</h3>
                                            <h5>Family Lawyer</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <figure class="myteam-group animated wow fadeIn" data-wow-delay="200ms">
                                        <div class="myteam-img">
                                            <div class="myteam-inlineimg">
                                                <img src="img/team/team-2.jpg" alt="team-1">
                                                <div class="overlay">
                                                    <div class="social-media">
                                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="myteam-content">
                                            <h3>James Milner</h3>
                                            <h5>Family Lawyer</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <figure class="myteam-group animated wow fadeIn" data-wow-delay="200ms">
                                        <div class="myteam-img">
                                            <div class="myteam-inlineimg">
                                                <img src="img/team/team-3.jpg" alt="team-1">
                                                <div class="overlay">
                                                    <div class="social-media">
                                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <figcaption class="myteam-content">
                                            <h3>Jannie Allan</h3>
                                            <h5>Family Lawyer</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================myteam-section-End=================-->
        <!--================homefaq-section-Start=================-->
        <!--<div class="homefaq-section">
                 <div class="container">
                     <div class="page-heading">
                         <h2>الأسألة الأكثر شيوعا</h2>
                     </div>
                     <div class="homefaq-mainpanel">
                         <div class="homefaq-listmain">
                             <div class="row">
                                 <div class="col-lg-6 col-sm-12 col-xs-12">
                                     <div class="panel-group faq_ques" id="accordion" role="tablist" aria-multiselectable="true">
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq1">
                                                 <h4 class="panel-title">
                                                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq_c1" aria-expanded="true" aria-controls="company_c1">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq1">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq2">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq_c2" aria-expanded="false" aria-controls="company_c2">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq3">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq_c3" aria-expanded="false" aria-controls="company_c3">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq4">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq_c4" aria-expanded="false" aria-controls="company_c4">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq4">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 col-xs-12">
                                     <div class="panel-group faq_ques" id="accordion-2" role="tablist" aria-multiselectable="true">
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq5">
                                                 <h4 class="panel-title">
                                                     <a role="button" data-toggle="collapse" data-parent="#accordion-2" href="#faq_c5" aria-expanded="true" aria-controls="company_c1">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq5">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq6">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#faq_c6" aria-expanded="false" aria-controls="company_c2">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq6">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq7">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#faq_c7" aria-expanded="false" aria-controls="company_c3">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq7">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="faq8">
                                                 <h4 class="panel-title">
                                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#faq_c8" aria-expanded="false" aria-controls="company_c4">
                                                         <strong>Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                                                         <span><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                                                     </a>
                                                 </h4>
                                             </div>
                                             <div id="faq_c8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq8">
                                                 <div class="panel-body">
                                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                     Proin frinneque ut varius lobortis, turpis nisi maximus erat, eget sodales quat.
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="parent-btn">
                             <a href="#" class="common-btn">المزيد من الأسأله</a>
                         </div>
                     </div>
                 </div>
             </div>-->
        <!--================homefaq-section-End=================-->
        <!--================weprovide-section-End=================-->
        <!--<section style="direction: rtl;">
            <div class="weprovide-section">
                <div class="weprovide-main">
                    <div class="weprovide-img">
                        <div class="overlay"></div>
                        <img src="img/provide.jpg" alt="provide">
                    </div>
                    <div class="weprovide-group">
                        <h2><strong>
                            نحن نقدم خدماتنا <br> 24/7<span></span></strong></h2>
                        <ul class="weprovide-list">
                            <li>
                                <div class="weprovide-icon">
                                    <span>
                                        <img src="img/icon/callus.png" alt="callus">
                                    </span>
                                </div>
                                <div class="weprovide-content">
                                    <h5>اتصل بنا</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        dolor in reprehenderit in  fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="weprovide-icon">
                                    <span>
                                        <i><img src="img/icon/qualified.png" alt="qualified"></i>
                                    </span>
                                </div>
                                <div class="weprovide-content">
                                    <h5>فريق مؤهل</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        dolor in reprehenderit in  fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="weprovide-icon">
                                    <span>
                                        <i><img src="img/icon/claimant.png" alt="claimant"></i>
                                    </span>
                                </div>
                                <div class="weprovide-content">
                                    <h5>محامين مؤهلين</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        dolor in reprehenderit in  fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </section>-->
        <!--================weprovide-section-End=================-->

        <!--================Our Partner Start =================-->
        <!--<section>
            <div class="ourpartner-section">
                <div class="container">
                    <div class="ourpartner-gridmain">
                        <div class="ourpartner-group">
                            <div class="ourpartner-panel">
                                <img src="img/partner/partner-1.png" alt="partner-1">
                            </div>
                        </div>
                        <div class="ourpartner-group">
                            <div class="ourpartner-panel">
                                <img src="img/partner/partner-2.png" alt="partner-2">
                            </div>
                        </div>
                        <div class="ourpartner-group">
                            <div class="ourpartner-panel">
                                <img src="img/partner/partner-3.png" alt="partner-3">
                            </div>
                        </div>
                        <div class="ourpartner-group">
                            <div class="ourpartner-panel">
                                <img src="img/partner/partner-4.png" alt="partner-4">
                            </div>
                        </div>
                        <div class="ourpartner-group">
                            <div class="ourpartner-panel">
                                <img src="img/partner/partner-5.png" alt="partner-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================Our Partner End =================-->
    </div>
    <!--================End About-Us-page Area =================-->

@endsection
