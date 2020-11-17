<!--================Header Area Start =================-->
<header class="main_header_area color_menu">
    <!--<div class="header_top">
      <div class="container">
          <div class="header_top_inner">
              <div class="row">
                  <div class="col-md-3 col-sm-3">
                      <ul class="header_social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                  </div>
                 <div class="col-md-5 col-sm-4">
                      <div class="free-consult">
                          <h3>
                              استشارات مجانية / بدون رسوم حتى نفوز</h3>
                      </div>
                  </div>
                 <div class="col-md-4 col-sm-5">
                      <div class="short-nav">
                          <ul>
                              <li><a href="#">الأسأله الشائعة</a></li>
                              <li><a href="#">الوظائف</a></li>
                              <li><a href="#">الخدمات</a></li>
                              <li><a href="#">لماذا عليك إختيارنا ؟</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>-->
    <div class="heademiddle-main">
        <div class="container">
            <div class="heademiddle-inner">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <ul class="contact-shortinfo" style="direction: rtl;">
                            <li>
                                <a href="#" class="display-table">
                                            <span class="table-cell">
                                                <i><img src="{{asset('visitor')}}/img/icon/phone.png" alt="phone"></i>
                                            </span>
                                    <p class="table-cell">
                                        <small>إتصل بنا</small>
                                        <strong>00966505200053</strong>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@bighorn.com" class="display-table">
                                            <span class="table-cell">
                                                <i><img src="{{asset('visitor')}}/img/icon/mail.png" alt="mail"></i>
                                            </span>
                                    <p class="table-cell">
                                        <small>الإيميل</small>
                                        <strong>info@bighorn.com</strong>
                                    </p>
                                </a>
                            </li>
                            <!--<li>
                                <span class="search-icon"><i class="icon icon-Search"></i></span>
                            </li>-->
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a class="navbar-brand" href="index.html"><img src="{{asset('visitor')}}/img/logo.png" alt="logo" style="width: 90%;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">
                                    تبديل التنقل</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/logo-black.png" alt=""></a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="submenu dropdown">
                        <li><a href="{{route('order')}}">لقاء محامي </a></li>
                        <!--  <li><a href="blog-5.html">أخبار المنشأة</a></li>  -->
                        <li><a href="{{route('report')}}"> تقارير سوق المحاماة </a></li>
                        <li><a href="{{route('services')}}"> خدمات قانونية </a></li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المدونة القانونية
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('blogs')}}">المقالات</a></li>
                                <li><a href="{{route('lawNews')}}">أخبار قانونية</a></li>
                                <li><a href="{{route('laws')}}">أنظمة وقوانين</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('services')}}">خدماتنا</a></li>
                        <li><a href="{{route('about')}}">من نحن</a></li>
                        <li><a href="{{route('home')}}">الرئيسية</a></li>

                    </ul>
                    <span class="getin-touch">
                                <a href="{{route('ask-consulting')}}">
                                    <strong>أطلب إستشارتك</strong>
                                </a>
                            </span>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
