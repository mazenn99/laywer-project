@section('style')
    .link-style{
        box-shadow: none;
        border: 5px solid #E1E7F3;
        border-radius: 4px;
        padding: 1rem 1.5rem;
        transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -webkit-transition: all 0.2s linear;
        float: right;
        background: #cca858;
        margin-bottom: 30px;
        width: 95%;
    }
    .link-style:hover {
        background-color: white;
        font-size: 150%;
    }
@endsection
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
        <li><a href="order5.html">أطلب استشارتك</a></li>
    </ul>
    <!-- End mobile Menu -->

    <!--================Header Area End =================-->

    <!--================Banner Area =================-->
    <section class="banner_area banner_one" style="direction: rtl;">
        <div class="container">
            <div class="banner_content">
                <h3 style="padding: 100px 0 0 0;">خدمات قانونية</h3>
                <p style="color:#fff;padding: 30px;">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                    القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم
                    استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ</p>
            </div>
            <div class="banner_link">
                <div class="abnner_link_inner">
                    <a class="active" href="index.html">الرئيسية</a>
                    <a href="service.html">خدمات قانونية</a>
                </div>
            </div>

        </div>
    </section>

    <!--================End Banner Area =================-->

    <!--================Service Area =================-->
    <section class="service_page" style="direction: rtl;">
        <div class="container">
            <div class="row service_item_inner">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="newsblog-group" style="height: 500px;margin-bottom: 15px;">
                            <div class="newsblog-imgpanel">
                                <img src="{{$service->image}}" alt="camera-article"
                                     style="width:370px;height:259px">
                                <span class="newsblog-date" style="height: 40px;"><small>{{$service->created_at}}</small></span>
                            </div>
                            <div class="newsblog-conents">';
                                <ul class="newsblog-info">
                                    <li> {{$service->subject}}</li>

{{--                                    <li>{{$service->author}}</li>--}}
                                </ul>

                                <h3> {{substr($service->text , 0 , 30)}} ... <a
                                        href="api/site/getArticle/{{$service->id}}"
                                        class="theme-btn btn-sm"> اقرا المزيد</a></h3></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav aria-label="Page navigation" class="blog_pagination">
                <ul class="pagination">
                    <!-- show pagination -->
                </ul>
            </nav>

        </div>
    </section>

    <!--================weprovide-section-End=================-->
    <!-- <section style="direction: rtl;">
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


    <!--================End Service Area =================-->
@section('script')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            getData()--}}
{{--        });--}}

{{--        function getData(page = 1) {--}}
{{--            $.ajax({--}}
{{--                /* the route pointing to the post function */--}}
{{--                url: 'https://law.apis.dokan.notjustapage.com/api/site/links',--}}
{{--                type: 'get',--}}
{{--                /* send the csrf-token and the input to the controller */--}}
{{--                // data: {_token: CSRF_TOKEN, name:$("#name").val(),date:$("#date").val(),time:$("#time").val()},--}}
{{--                dataType: 'JSON',--}}
{{--                /* remind that 'data' is the response of the AjaxController */--}}
{{--                success: function (response) {--}}
{{--                    console.log(response.data)--}}
{{--                    var result = '';--}}
{{--                    var option = '';--}}
{{--                    for (var item in response.data) {--}}
{{--                        result += '<div class="col-md-4 col-sm-6 col-xs-12 " style="float: right;"><div class="link-style  animated wow fadeInUp">';--}}
{{--                        result += '<a href="' + response.data[item].link + '">';--}}
{{--                        result += '<h4>' + response.data[item].title + '</h4>';--}}
{{--                        result += '<p>' + response.data[item].text + '</p>';--}}
{{--                        result += '</a></div></div>';--}}
{{--                    }--}}

{{--                    $('.service_item_inner').html(result)--}}


{{--                    var i;--}}
{{--                    var pagination = '';--}}
{{--                    var checkCurrentPage = '';--}}
{{--                    for (i = 1; i <= response.data.last_page; i++) {--}}
{{--                        checkCurrentPage = response.data.current_page == i ? "active" : ""--}}
{{--                        pagination += '<li class=' + checkCurrentPage + '><a href="#" onclick="getData(' + i + ')" id=>' + i + '</a></li>';--}}
{{--                    }--}}
{{--                    $('.pagination').html(pagination);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
@endsection
@endsection
