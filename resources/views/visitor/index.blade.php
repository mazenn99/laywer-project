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
    <li> <a href="order5.html">أطلب استشارتك</a> </li>
</ul>
<!-- End mobile Menu -->

<!--================Header Area End =================-->

<!--================Slider Area =================-->
<section class="slider_area mr_top" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="slide">
                            <img src="{{asset('visitor')}}/img/home-slider/slide-1.jpg" alt="">
                            <div class="slide-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="carousel-captions caption-align-center">
                                <div class="caption-align-center-wrap">
                                            <span class="small-heading">
                                                مكتب المحامي</span>
                                    <h2 class="heading">
                                        عبد الرحمن <br> السبيعي</h2>
                                    <a href="order5.html" class="btn btn-outline  lighter">
                                        مرحبا بكم</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /item -->

                    <div class="item">
                        <div class="slide">
                            <img src="{{asset('visitor')}}/img/home-slider/slide-2.jpg" alt="">
                            <div class="slide-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="carousel-captions caption-align-center">
                                <div class="caption-align-center-wrap">
                                    <span class="small-heading">استشارات قانونية</span>
                                    <h2 class="heading">نقدم أفضل الاستشارات <br> القانونية</h2>
                                    <a href="order6.html" class="btn btn-outline  lighter"> ابدا اليوم</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /item -->

                    <div class="item">
                        <div class="slide">
                            <img src="{{asset('visitor')}}/img/home-slider/slide-3.jpg" alt="">
                            <div class="slide-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="carousel-captions caption-align-center">
                                <div class="caption-align-center-wrap">
                                    <span class="small-heading">أخر الاخبار</span>
                                    <h2 class="heading">تابع اخبارنا القانونية في<br>السعودية</h2>
                                    <a href="blog-5.html" class="btn btn-outline  lighter"> ابدأ اليوم</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Slider Area =================-->
<!--================whoweare-section-Start=================-->
<section>
    <div class="whoweare-section" >
        <div class="inner-overlay">
            <!--================processwork-section-Start=================-->
            <!-- <div class="processwork-section">
                 <div class="container">
                     <div class="page-heading">
                         <h2>كيف نقدم خدماتنا</h2>
                         <p>
                             يمكننا توفير حوكمة الشركات ، ومساعدة العملاء على إدارة مسؤوليات <br> إدارة شركة في المجال المالي.</p>
                     </div>
                     <div class="processwork-main">
                         <div class="row">
                             <div class="col-md-4 col-sm-4 col-xs-12">
                                 <div class="processwork-panel animated wow fadeInUp" data-wow-delay="100ms">
                                     <div class="processwork-step">
                                         <span>1</span>
                                         <h3>قدم طلبك</h3>
                                     </div>
                                     <div class="processwork-contents">
                                         <div class="processwork-icon">
                                             <span><img src="img/icon/apply.png" alt="apply"></span>
                                         </div>
                                         <h4>إتصل او راسلنا</h4>
                                         <p>تواصل معنا <strong>مجانا</strong> وبدون <strong>اي </strong> تكاليف
                                             ولكن لا يمكننا مساعدتك الا بعد تواصلك معنا
                                             </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-4 col-xs-12">
                                 <div class="processwork-panel active animated wow fadeInUp" data-wow-delay="100ms">
                                     <div class="processwork-step">
                                         <span>2</span>
                                         <h3>سنراجع طلبك</h3>
                                     </div>
                                     <div class="processwork-contents">
                                         <div class="processwork-icon">
                                             <span><img src="img/icon/review.png" alt="review"></span>
                                         </div>
                                         <h4>دعنا نفهم طلبك</h4>
                                         <p>
                                             سنقوم بمراجعة طلبك ونتأكد من امكانية مساعدتك ثم سنقدم  <strong> الموافقة</strong>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-4 col-xs-12">
                                 <div class="processwork-panel animated wow fadeInUp" data-wow-delay="100ms">
                                     <div class="processwork-step">
                                         <span>3</span>
                                         <h3>سنرسل لك التكاليف</h3>
                                     </div>
                                     <div class="processwork-contents">
                                         <div class="processwork-icon">
                                             <span><img src="img/icon/funds.png" alt="funds"></span>
                                         </div>
                                         <h4>إتصل بنا او راسلنا</h4>
                                         <p>بعد موافقتك سنرسل لك حسابنا البنكي او يمكنك ان تكتب لنا شيكا مصرفيا في كلتا الحالتين سندعمك ونقف معك
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>-->

            <!--================processwork-section-End=================-->
            <div class="whoweare-main" style="direction: rtl;padding-top: 0px;">

                <div class="row">
                    <!--<div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="videoworklist-main">
                            <!--<div class="mediavideo-group">
                                <div class="mediavideo-inlinepanel">
                                    <figure class="mediavideo-poster"><img src="img/about.jpg" alt="about"></figure>
                                    <div class="overlay">
                                        <div class="video-grid">
                                            <a href="https://www.youtube.com/watch?v=aQ2ZnyvtV5w" class="video-fancybox  lightbox-image">
                                                <span class="play-video">PL<i class=" fa fa-play"></i>AY</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="worklist-grid">
                                <h3>العمل معنا سهل جدا</h3>
                                <ul class="worklist-panel">
                                    <li>
                                        <div class="worklist-icon">
                                            <span>
                                                <small class="number">1</small>
                                                <img src="img/icon/contract.png" alt="contract">
                                            </span>
                                        </div>
                                        <div class="worklist-content">
                                            <h5>
                                                تعاقد معنا</h5>
                                            <p>Nor again is there anyone who loves or
                                                pursues or desires to obtain pain.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="worklist-icon">
                                            <span>
                                                <small class="number">2</small>
                                                <i><img src="img/icon/protection.png" alt="protection"></i>
                                            </span>
                                        </div>
                                        <div class="worklist-content">
                                            <h5>
                                                الحماية القانونية</h5>
                                            <p>Nor again is there anyone who loves
                                                or pursues or desires to obtain pain.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="worklist-icon">
                                            <span>
                                                <small class="number">3</small>
                                                <i><img src="img/icon/win.png" alt="win"></i>
                                            </span>
                                        </div>
                                        <div class="worklist-content">
                                            <h5>لا توجد رسوم إلا إذا فزنا</h5>
                                            <p>Nor again is there anyone who
                                                loves or pursues or desires to obtain pain.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="whoweare-group">
                            <div class="whoweare-contents">
                                <h2>عن مكتب المحامي<br> عبدالرحمن السبيعي</h2>
                                <h4><strong>محامون - مستشارون - موثقون</strong><span></span></h4>
                                <div class="fullwidth-gapper">
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
                                    <!--    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                                    <!--    Ut enim ad minim veniam, quis nostrud exercitation-->
                                    <!--    ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
                                    <!--    Duis aute irure dolor in reprehenderit in voluptate -->
                                    <!--    velit esse cillum dolore eu fugiat nulla pariatur.-->
                                    <!--    <br><br>-->
                                    <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incidition ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur.</span>
                                </p>
                                <h3>Our mission is to connect law firms with Nemo enimpsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                    sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem or injustice.
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>-->
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

<!--================ourservice-section-Start=================-->
<section>
    <div class="ourservice-section">
        <div class="inner-overlay">
            <div class="container">
                <div class="page-heading">
                    <h2>إختصاصتنا</h2>
                    <p>يمكننا توفير حوكمة الشركات ، ومساعدة العملاء على إدارة
                        مسؤوليات إدارة شركة في المجال المالي.
                    </p>
                </div>
                <div class="ourservice-main">
                    <div class="ourservice-slider owl-carousel" style="margin-bottom: 30px;">
                        <!--<div class="ourservice-panel animated wow fadeInUp" data-wow-delay="100ms" style="background-image: url(img/about-history.jpg);">-->
                        <!--    <div class="ourservice-icon">-->
                        <!--        <div class="ourservice-content">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <h3 style="background-color: #fff;padding: 30px 30px 25px 30px;">Health Care Law</h3>-->
                        <!--</div>-->

                        <!--<div class="ourservice-panel animated wow fadeInUp" data-wow-delay="100ms" style="background-image: url(img/about-history.jpg);">-->
                        <!--    <div class="ourservice-icon">-->
                        <!--        <div class="ourservice-content">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <h3 style="background-color: #fff;padding: 30px 30px 25px 30px;">Health Care Law</h3>-->
                        <!--</div>-->

                        <!--<div class="ourservice-panel animated wow fadeInUp" data-wow-delay="100ms" style="background-image: url(img/about-history.jpg);">-->
                        <!--<div class="ourservice-icon">-->
                        <!--<img src="img/icon/insurance.png" alt="insurance">-->
                        <!--<div class="ourservice-content">-->
                        <!--<h3>insurance Law</h3>
                        <p>
                            Completly <strong>Free</strong> and <strong>No</strong> obligation
                            but we can’t help until you reach out to us.
                        </p>
                        <a href="#" class="circle-btn">
                            <img src="img/icon/right-arrow.png" alt="right-arrow">
                        </a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<h3 style="background-color: #fff;padding: 30px 30px 25px 30px;">Health Care Law</h3>-->
                        <!--</div>-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ourservice-section-End=================-->

<!--<div class="casestudy-section">
    <div class="inner-overlay">
        <div class="container">
            <div class="casestudy-main">
                <div class="row flex-panel">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="casestudy-content">
                            <span class="line-topleft"></span>
                            <span class="line-topright"></span>
                            <h2>
                                استعرض <br> دراسة الحالة الخاصة بنا</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt in voluptate sse .
                            </p>
                            <span class="line-bottomleft"></span>
                            <span class="line-bottomright"></span>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="casestudy-titlegrid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title active">
                                            <a href="#"><h3>حوادث السيارات</h3></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>الطلاق</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>التزوير</h3></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>
                                                العنف المنزلي</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>الاحتيال</h3></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>جرائم الأحداث
                                            </h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"> <h3>السرقات</h3></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="casestudy-gruop">
                                        <div class="casestudy-title">
                                            <a href="#"><h3>الجرائم الجنائية</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="clientsuccess-section">
                <div class="container">
                    <div class="clients-listgrid">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="project-experience">
                                    <span class="count">1000</span>+
                                    <h5>
                                        استشارات العملاء</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="project-experience">
                                    <span class="count">96</span>%
                                    <h5>حالات ناجحة</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="project-experience">
                                    <span class="count">10</span> دقيقة
                                    <h5>
                                        التكلفة المستردة للعملاء</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="project-experience">
                                    <span class="count">30</span>+
                                    <h5>
                                        محامون محترفون</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
</section>-->
<!--================casestudy-section-End=================-->

<!--================howwork-section-Start=================-->
<section style="direction: rtl;">
    <div class="howwork-section">
        <!-- <div class="howwork-top">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <div class="howwork-disc">
                         <div class="styled-heading">
                             <h2><span><strong>كيف<br> نقدم خدماتنا</strong> <i class="styled-line"></i></span></h2>
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
         </div>-->
        <div class="container">
            <div class="page-heading" style="padding-top: 66px;padding-bottom: 0px;">
                <h2>خدماتنا</h2>
            </div>
            <div class="howwork-grid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="howwork-panel">
                            <div class="howwork-icon">
                                <img src="{{asset('visitor')}}/img/icon/lead.png" alt="healthcare">
                                <div class="howwork-content">
                                    <h3>المرافعة</h3>
                                    <!--<p>
                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                        elit, sed do eiusmod tempor  labore.
                                    </p>
                                    <a href="#" class="circle-btn">
                                        <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>-->
                                    <a href="api/site/getArticle/12" class="circle-btn">
                                        <img src="{{asset('visitor')}}/img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="howwork-panel">
                            <div class="howwork-icon">
                                <img src="{{asset('visitor')}}/img/icon/aquition.png" alt="healthcare">
                                <div class="howwork-content">
                                    <h3>صياغة<br>العقود</h3>
                                    <!--<p>
                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                        elit, sed do eiusmod tempor  labore.
                                    </p>
                                    <a href="#" class="circle-btn">
                                        <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>-->
                                    <a href="api/site/getArticle/11" class="circle-btn">
                                        <img src="{{asset('visitor')}}/img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="howwork-panel">
                            <div class="howwork-icon">
                                <img src="{{asset('visitor')}}/img/icon/inhouse.png" alt="healthcare">
                                <div class="howwork-content">
                                    <h3>التمثيل <br>القانوني </h3>
                                    <!--<p>
                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                        elit, sed do eiusmod tempor  labore.
                                    </p>
                                    <a href="#" class="circle-btn">
                                        <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>-->
                                    <a href="api/site/getArticle/10" class="circle-btn">
                                        <img src="{{asset('visitor')}}/img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="howwork-panel">
                            <div class="howwork-icon">
                                <img src="{{asset('visitor')}}/img/icon/finalwork.png" alt="healthcare">
                                <div class="howwork-content">
                                    <h3>الإستشارات <br>القانونية</h3>
                                    <!--<p>
                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                        elit, sed do eiusmod tempor  labore.
                                    </p>
                                    <a href="#" class="circle-btn">
                                        <img src="img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>-->
                                    <a href="api/site/getArticle/9" class="circle-btn">
                                        <img src="{{asset('visitor')}}/img/icon/right-arrow-black.png" alt="right-arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('services')}}" class="btn btn-primary btn-block  lighter" style="background: #cca858;padding: 12px; color: #fff;border-color:#cca858;margin-top: 35px;"> اطلع علي المزيد من خدماتنا من هنا</a>
            </div>
        </div>
    </div>
</section>
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
<!--<section style="direction: rtl;">
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
            <h5>اكتشف فريقنا</h5>
            <h2>
                التق بفريقنا</h2>
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

<!--================weprovide-section-End=================-->
<section style="direction: rtl;">
    <div class="weprovide-section">
        <div class="weprovide-main">
            <div class="weprovide-img" style="width:40%">
                <div class="overlay"></div>
                <img src="{{asset('visitor')}}/img/provide.jpg" alt="provide">
            </div>
            <div class="weprovide-group" style="width: 60%;">
                <h2><strong>المقالات القانونية<span></span></strong></h2>
                <ul class="weprovide-list">
                    <li>
                        <!-- <div class="weprovide-icon">
                             <span>
                                 <img src="img/icon/callus.png" alt="callus">
                             </span>
                         </div>-->
                        <div class="weprovide-content">
                            <h5>تابع الاخبار</h5>
                            <p>تابع الاخبار القانونية اول بأول عن طريق موقعنا الألكتروني وتصفح الجديد من الاخبار في مجال القانون في المملكة العربية السعودية
                            </p>
                            <a href="blog-4.html" class="btn btn-outline  lighter" style="background: #cca858;padding: 12px; color: #fff;float: left;"> دخول</a>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>
<!--================weprovide-section-End=================-->
<!--================weprovide-section-End=================-->
<section style="">
    <div class="weprovide-section" style="margin-top: 5px;">
        <div class="weprovide-main">
            <div class="weprovide-img" style="width:40%">
                <div class="overlay"></div>
                <img src="{{asset('visitor')}}/img/provide.jpg" alt="provide">
            </div>
            <div class="weprovide-group" style="width: 60%;direction: rtl;">
                <h2><strong>انظمة وقوانين<span></span></strong></h2>
                <ul class="weprovide-list">
                    <li>
                        <!-- <div class="weprovide-icon">
                             <span>
                                 <img src="img/icon/callus.png" alt="callus">
                             </span>
                         </div>-->
                        <div class="weprovide-content">
                            <h5>تابع الاخبار</h5>
                            <p>تابع الاخبار القانونية اول بأول عن طريق موقعنا الألكتروني وتصفح الجديد من الاخبار في مجال القانون في المملكة العربية السعودية
                            </p>
                            <a href="blog-3.html" class="btn btn-outline  lighter" style="background: #cca858;padding: 12px; color: #fff;float: left;"> دخول</a>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>
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

<!--================latestpost-section-Start=================-->
<div class="newsarticle-section" style="direction: rtl;">
    <div class="container">
        <div class="page-heading">
            <h2>الأخبار القانونية</h2>
        </div>
        <div class="newsblog-mainpanel">
            <div class="newsblog-gridpanel">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="newsblog-group">
                            <div class="newsblog-imgpanel">
                                <img src="{{asset('visitor')}}/img/blog/blog-1.jpg" alt="camera-article">
                                <span class="newsblog-date">
                                            <strong>25</strong><small>May</small><small>2020</small>
                                        </span>
                            </div>
                            <div class="newsblog-conents">
                                <ul class="newsblog-info">
                                    <li>Feb 28, 2019</li>
                                    <li>James Smith</li>
                                    <li>1 comment</li>
                                </ul>
                                <h3> Domestic Violence in California – How a Lawyer Can Help</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="newsblog-group">
                            <div class="newsblog-imgpanel">
                                <img src="{{asset('visitor')}}/img/blog/blog-2.jpg" alt="camera-article">
                                <span class="newsblog-date">
                                            <strong>25</strong><small>May</small><small>2020</small>
                                        </span>
                            </div>
                            <div class="newsblog-conents">
                                <ul class="newsblog-info">
                                    <li>Feb 28, 2019</li>
                                    <li>James Smith</li>
                                    <li>1 comment</li>
                                </ul>
                                <h3> Domestic Violence in California – How a Lawyer Can Help</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="newsblog-group">
                            <div class="newsblog-imgpanel">
                                <img src="{{asset('visitor')}}/img/blog/blog-3.jpg" alt="camera-article">
                                <span class="newsblog-date">
                                            <strong>25</strong><small>May</small><small>2020</small>
                                        </span>
                            </div>
                            <div class="newsblog-conents">
                                <ul class="newsblog-info">
                                    <li>Feb 28, 2019</li>
                                    <li>James Smith</li>
                                    <li>1 comment</li>
                                </ul>
                                <h3> Domestic Violence in California – How a Lawyer Can Help</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================latestpost-section-End=================-->

<!--================shortaddress-section-Start=================-->
<section>
    <div class="applyform-section" style="direction: rtl;">
        <div class="container">
            <div class="applyform-main">
                <div class="applyform-content">
                    <h3>  تواصل معنا  </h3>
                    <span class="successMessage" id="successMessage">  </span>
                    <form class="contact-us-form"  id="contactform" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="الاسم">
                                    <span class="errorMessage" style="display: none;" id="errorName">  </span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="البريد الالكتروني">
                                    <span class="errorMessage" style="display: none;" id="errorEmail">  </span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="رقم الهاتف">
                                    <span class="errorMessage" style="display: none;" id="errorPhone">  </span>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group message-textarea">
                                    <textarea class="form-control" name="text" id="text" rows="1" placeholder="الرسالة"></textarea>
                                    <span class="errorMessage" style="display: none;" id="errorText">  </span>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group parent-btn">
                                    <button type="button" id="send-btn-contact" value="submit" class="common-btn">ارسال</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="consultant-imgpanel">
                    <!--<img src="img/consultant.png" alt="consultant">-->
                </div>
            </div>
        </div>
    </div>
</section>

<!--================shortaddress-section-Start=================-->
@endsection
