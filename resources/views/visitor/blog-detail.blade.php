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
                <h3>{{$article->subject}}</h3>
            </div>
            <div class="banner_link">
                <div class="abnner_link_inner">
                    <a class="active" href="index.html">الرئيسية</a>
                    <a href="blog.html">التفاصيل</a>
                </div>
            </div>
        </div>
    </section>

    <!--================Blog Area =================-->
    <section class="blog-page single_blog_details" style="direction: rtl;">
        <div class="container">
            <div class="row main_blog_inner">
                <div class="col-md-12">
                    <div class="main_blog_items">
                        <div class="main_blogpost_item">
                            <div class="main_blogpost_item">
                                <div class="blog_image" style="height: 360px;width: 840px;"><img
                                        src="http://law.apis.dokan.notjustapage.com/article/6a00e7df15cba45bdf7b447e1df4f90c.jpeg" alt=""></div>



                                <div class="main_blog_text"><a href="#"><h2>{{$article->subject}}</h2></a>'

                                    <div class="blog_author_area"><a href="#"><i class="fa fa-user"></i>بواسطة : <span>{{$article->author}}</span></a>

                                        <a href="#"><i class="fa fa-calendar"></i><span>{{$article->created_at}}</span></a>

                                    </div>

                                    <p> {{$article->text}} </p>';

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog_sidebar_area">
                        <!-- <aside class="mrgn_widget search_widget">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Enter Search Keywords">
                                 <span class="input-group-btn">
                                     <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                                 </span>
                             </div><!-- /input-group
                         </aside>-->
                        <!-- <aside class="mrgn_widget categories_widget">
                             <div class="blog_widget_title">
                                 <h3>Categories</h3>
                             </div>
                             <ul>
                                 <li><a href="#">Bidding-and-procurement <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 <li><a href="#">Remodeling <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 <li><a href="#">Tools and Resources <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 <li><a href="#">Management <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 <li><a href="#">Materials <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                 <li><a href="#">Design <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                             </ul>
                         </aside>-->
                        <!--<aside class="mrgn_widget recent_news_widget">
                            <div class="blog_widget_title">
                                <h3>Recent Blog Posts</h3>
                            </div>
                            <div class="recent_inner">
                                <div class="recent_item">
                                    <a href="#"><h4>Whether you enjoy reading about construction from a design.</h4></a>
                                    <h5> <i class="fa fa-calendar"></i> 05 March 2018</h5>
                                </div>
                                <div class="recent_item">
                                    <a href="#"><h4>For those more in tune with the architectural side of building and design.</h4></a>
                                    <h5> <i class="fa fa-calendar"></i> 05 March 2018</h5>
                                </div>
                                <div class="recent_item">
                                    <a href="#"><h4>Whether you enjoy reading about construction from a design.</h4></a>
                                    <h5> <i class="fa fa-calendar"></i> 05 March 2018</h5>
                                </div>
                                <div class="recent_item">
                                    <a href="#"><h4>For those more in tune with the architectural side of building and design,</h4></a>
                                    <h5> <i class="fa fa-calendar"></i> 08 March 2017</h5>
                                </div>
                            </div>
                        </aside>-->
                        <!--<aside class="mrgn_widget recent_news_widget">
                            <div class="blog_widget_title">
                                <h3>Tages</h3>
                            </div>
                            <ul>
                                <li><a href="#">Engineers</a></li>
                                <li><a href="#">Sales</a></li>
                                <li><a href="#">Mechanical</a></li>
                                <li><a href="#">construcion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                            </ul>
                        </aside>-->
                    </div>
                </div>
            </div>
        </div>

        <!--================weprovide-section-End=================-->
        <!--<section>
            <div class="weprovide-section">
                <div class="weprovide-main">
                    <div class="weprovide-img">
                        <div class="overlay"></div>
                        <img src="img/provide.jpg" alt="provide">
                    </div>
                    <div class="weprovide-group">
                        <h2><strong>We Provide Service <br> 24/7 <span></span></strong></h2>
                        <ul class="weprovide-list">
                            <li>
                                <div class="weprovide-icon">
                                    <span>
                                        <img src="img/icon/callus.png" alt="callus">
                                    </span>
                                </div>
                                <div class="weprovide-content">
                                    <h5>CALL US</h5>
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
                                    <h5>QUALIFIED TEAM</h5>
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
                                    <h5>qualified claimants</h5>
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
    <script>
        $(document).ready(function () {
            function getParams(url) {
                var params = {};
                var parser = document.createElement('a');
                parser.href = url;
                var query = parser.search.substring(1);
                var vars = query.split('&');
                for (var i = 0; i < vars.length; i++) {
                    var pair = vars[i].split('=');
                    params[pair[0]] = decodeURIComponent(pair[1]);
                }
                return params;
            };

            var articleId = getParams(window.location.href).article
            getAboutData(articleId)

            function getAboutData(articleId) {
                $.ajax({
                    /* the route pointing to the post function */
                    url: 'http://localhost/laywerMujahid/apis/public/api/site/getArticle/' + articleId,
                    type: 'get',
                    /* send the csrf-token and the input to the controller */
                    // data: {_token: CSRF_TOKEN, name:$("#name").val(),date:$("#date").val(),time:$("#time").val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (response) {
                        var result = ''
                        console.log(response.data)
                        result += '<div class="main_blogpost_item"><div class="blog_image" style="height: 360px;width: 840px;"> <img src="' + response.data.image + '" alt=""></div>';
                        // result+='<div class="date"><h5> 05 <span>March</span></h5></div>';
                        result += '<div class="main_blog_text"><a href="#"><h2>' + response.data.subject + '</h2></a>';
                        result += '<div class="blog_author_area"> <a href="#"><i class="fa fa-user"></i>بواسطة :  <span>' + response.data.author + '</span></a> ';
                        result += '<a href="#"><i class="fa fa-calendar"></i><span> ' + response.data.date + '</span></a>';
                        result += '</div>';
                        result += ' <p> ' + response.data.text + ' </p>';
                        result += '</div></div>';
                        $('.main_blog_items').html(result)
                    }
                });
            }


        });
    </script>
@endsection
