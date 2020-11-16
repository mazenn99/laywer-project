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
            <h3>تقارير سوق المحاماة</h3>
        </div>
        <div class="banner_link">
            <div class="abnner_link_inner">
                <a class="active" href="index.html">الرئيسية</a>
                <a href="blog.html">تقارير سوق العمل</a>
            </div>
        </div>
    </div>
</section>


<!--================End Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog-page" style="direction: rtl;">
    <div class="container">
        <div class="row main_blog_inner">
            <div class="col-md-12 showReport"></div>
            <!-- show repsort -->
        </div>
    </div>

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
    <!-- <section>
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
</section>
<!--================End Blog Area =================-->
@section('script')
    <script>
        $(document).ready(function(){
            getData()
            function getData(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: 'https://law.apis.dokan.notjustapage.com/api/site/reports',
                    type: 'get',
                    /* send the csrf-token and the input to the controller */
                    // data: {_token: CSRF_TOKEN, name:$("#name").val(),date:$("#date").val(),time:$("#time").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (response) {
                        var result =''
                        for (var item in response.data) {
                            result +='<div class="col-md-3 col-sm-6 col-xs-12">';
                            result +='<div class="service_box_item">';
                            result +='<a href="single-service.html" class="service_image" style="margin: auto;width: 50%;">';
                            result +='<img src="{{asset("visitor")}}/img/report.png" class="center" style="width: 100px;height: 100px;" alt=""></a>';
                            result +='<div class="service_text" style="width: 100%;">';
                            result +='<a href="single-service.html"><h4>'+ response.data[item].date +'</h4></a>';
                            result +='<p>'+ response.data[item].text +'</p>';
                            result +='</div></div></div>';

                        }
                        $('.showReport').html(result)


                    }
                });
            }


        });
    </script>
@endsection

@endsection
