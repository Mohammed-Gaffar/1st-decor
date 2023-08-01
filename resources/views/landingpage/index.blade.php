<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1st-decor test2 by MG</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('t3/css/bootstrap.css')}}">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="{{asset('t3/css/owl.carousel.css')}}">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="{{asset('t3/css/font-awesome.css')}}">
    <!-- lightbox -->
    <link href="{{asset('t3/css/prettyPhoto.css')}}" rel="stylesheet">

    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="{{asset('t3/css/animation.css')}}">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('t3/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('t3/js/html5shiv.js')}}"></script>
    <script src="{{asset('t3/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('t3/rs-plugin/css/settings.css')}}" media="screen" />

</head>

<body data-spy="scroll" data-offset="25">

<div class="animationload"><div class="loader">@lang('site.loading')</div></div> <!-- End Preloader -->

<!--/HEADER SECTION -->
<header class="header">
    <div class="container">
        <div class="navbar navbar-default" role="navigation" style="margin-bottom: 35px; ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <img src="{{asset('t3/images/logo.png')}}" width="70px" style="margin-top: -30px;">
                    </a>
                </div><!-- end navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a data-scroll href="#home" class="int-collapse-menu">@lang('site.main')</a></li>
                        <li><a data-scroll href="#about" class="int-collapse-menu">@lang('site.about us')</a></li>
                        <li><a data-scroll href="#services" class="int-collapse-menu">@lang('site.Products')</a></li>
                        <li><a data-scroll href="#pricing" class="int-collapse-menu">@lang('site.projects')</a></li>
                        <li><a data-scroll href="#works" class="int-collapse-menu">@lang('site.Portfolio')</a></li>
                        <li><a data-scroll href="#contact" class="int-collapse-menu">@lang('site.contact us')</a></li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li><a class="int-collapse-menu" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                        </a></li>
                        @endforeach
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </div>
    </div><!-- end container -->
</header><!-- end header -->

<!--/SLIDER SECTION -->
<section id="home" class="sliderwrapper clearfix">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('t3/demos/1.jpg')}}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="tp-dottedoverlay twoxtwo"></div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rev-video  customin customout start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="140"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endspeed="300"><hr class="topline"><h2>1st decor <br> Clean and unique <br> profisional works </h2><hr class="bottomline">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-video2 customin customout start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="340"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="2200"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endspeed="300"><p> Growth Your Business <br> With Us</p>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('t3/demos/2.jpg')}}"  alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="tp-dottedoverlay twoxtwo"></div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rev-video skewfromleft customout"
                         data-x="center"
                         data-y="140"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="1500"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="on"
                         style="z-index: 6"><hr class="topline"><h2>1st Decor <br> fast sempole </h2><hr class="bottomline">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-video2 skewfromright customout"
                         data-x="center" data-hoffset="0"
                         data-y="340"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="1700"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="on"
                         style="z-index: 7"><p>good to know</p>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('t3/demos/3.jpg')}}"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="tp-dottedoverlay twoxtwo"></div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rev-video skewfromleft customout"
                         data-x="center"
                         data-y="140"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="1500"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="on"
                         style="z-index: 6"><hr class="topline"><h2>1st decor<br> with you</h2><hr class="bottomline">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-video2 skewfromright customout"
                         data-x="center" data-hoffset="0"
                         data-y="340"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="1700"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="on"
                         style="z-index: 7"><p>-------------</p>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section><!-- end slider-wrapper -->


<br><br><br><br><br>
<section id="features" class="feature-wrapper">
    <div class="container">
        <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            <h2>@lang('site.Why Us ?')</h2>
            <p>@lang('site.we are commit to make 1st for decour has the trust trow butting the hiest othity in work')</p>
            <hr>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.4s" class="feature-img">
            <img class="img-responsive" src="{{asset('t3/demos/4.jpg')}}" alt="">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="widget">
                <h3>@lang('site.WHY Choose 1stdecor Creative ?')</h3>
                <p>  @lang('site.we are commit to make 1st for decour has the trust trow butting the hiest othity in work')  </p>
                <div id="accordion-second" class="clearfix">
                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    <em class="fa fa-plus icon-fixed-width"></em>@lang('site.Our vision')
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    @lang('site.vision')
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    <em class="fa fa-plus icon-fixed-width"></em>@lang('site.how are us')
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    @lang('site.who us')
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    <em class="fa fa-plus icon-fixed-width"></em>@lang('site.1st for decor')
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    @lang('site.firstfordecor')
                                </div>
                            </div>
                        </div>
                    </div><!-- end accordion -->
                </div><!-- end accordion first -->
            </div><!-- end widget -->
        </div><!-- end col-lg-6 -->

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="widget">
                <h3>@lang('site.LATEST NEWS')</h3>
                <div id="owl-blog" class="owl-carousel">
                    <div class="blog-carousel">
                        <div class="entry">
                            <img src="{{asset('t3/demos/5.jpg')}}" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="blog-single-sidebar.html"><i class="fa fa-link"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                            <div class="post-type">
                                <i class="fa fa-picture-o"></i>
                            </div><!-- end pull-right -->
                        </div><!-- end entry -->
                        <div class="blog-carousel-header">
                            <h3><a title="" href="#">@lang('site.New office desining around the world')</a></h3>
                            <div class="blog-carousel-meta">
                                <span><i class="fa fa-calendar"></i> AUGEST 02, 2023</span>
                                <span><i class="fa fa-comment"></i> <a href="#">20 @lang('site.Comments')</a></span>
                                <span><i class="fa fa-eye"></i> <a href="#">184 @lang('site.Views')</a></span>
                            </div><!-- end blog-carousel-meta -->
                        </div><!-- end blog-carousel-header -->

                    </div><!-- end blog-carousel -->
                    <div class="blog-carousel">
                        <div class="entry">
                            <img src="{{asset('t3/demos/3.jpg')}}" alt="" class="img-responsive">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><i class="fa fa-link"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                            <div class="post-type">
                                <i class="fa fa-picture-o"></i>
                            </div><!-- end pull-right -->
                        </div><!-- end entry -->
                        <div class="blog-carousel-header">
                            <h3><a title="" href="#">@lang('site.new materials in our stores')</a></h3>
                            <div class="blog-carousel-meta">
                                <span><i class="fa fa-calendar"></i> septemper 02, 2023</span>
                                <span><i class="fa fa-comment"></i> <a href="#">323 @lang('site.Comments')</a></span>
                                <span><i class="fa fa-eye"></i> <a href="#">184 @lang('site.Views')</a></span>
                            </div><!-- end blog-carousel-meta -->
                        </div><!-- end blog-carousel-header -->

                    </div><!-- end blog-carousel -->
                </div><!-- end owl-blog -->
            </div><!-- end widget -->
        </div><!-- end col-lg-6 -->
    </div><!-- end container -->
</section><!-- end grey-wrapper -->



<!--/ ABOUT SECTION -->
<section id="about" class="about-wrapper">
    <div class="container">
        <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
            <h2>@lang('site.Products')</h2>
            <p>@lang('site.products text')</p>
            <hr>
        </div><!-- end title -->

        <div class="row text-center">
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div data-scroll-reveal="enter from the bottom after 0.4s" class="about-box">
                    <div class="about-border">
                        <img src="{{asset('t3/images/wall papers.jpg')}}" width="150px" style="border-radius: 15px">
                    </div>
                    <h3>@lang('site.paper wall')</h3>
                    <p></p>
                </div>
            </div><!-- end column -->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
                    <div class="about-border">
                        <img src="{{asset('t3/images/sejad.jpg')}}" width="150px" style="border-radius: 15px">
                    </div>
                    <h3>@lang('site.sejad')</h3>
                    <p></p>
                </div>
            </div><!-- end column -->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
                    <div class="about-border">
                        <img src="{{asset('t3/images/clothes.jpg')}}" width="150px" style="border-radius: 15px">
                    </div>
                    <h3>@lang('site.qumash')</h3>
                    <p></p>
                </div>
            </div><!-- end column -->

        </div><!-- end row -->
    </div><!-- end container -->

    <div class="clearfix">
        <div class="widget-wrapper">
            <div class="container">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="widget">
                        <h3>@lang('site.a little about our products')</h3>
                        <p>
                            @lang('site.more_of_products')
                        <a href="#"> Read More </a> </p>

                    </div><!-- end widget -->
                </div><!-- end col-lg-6 -->

                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="widget">
                        <h2>@lang('site.our products power full comming from')</h2>
                        <div id="skills" class="skills_bar">
                            <small>@lang('site.mokeet')</small>
                            <div class="progress wow slideInLeft animated" style="visibility: visible;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    <span class="skill_count">90%</span>
                                </div>
                            </div><!-- end progress -->
                            <small>@lang('site.qutton')</small>
                            <div class="progress wow slideInLeft animated" style="visibility: visible;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="skill_count">80%</span>
                                </div>
                            </div><!-- end progress -->
                            <small>@lang('site.basic materials')</small>
                            <div class="progress wow slideInLeft animated" style="visibility: visible;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span class="skill_count">90%</span>
                                </div>
                            </div><!-- end progress -->
                            <small>@lang('site.Customer Support')</small>
                            <div class="progress wow slideInLeft animated" style="visibility: visible;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="skill_count">90%</span>
                                </div>
                            </div><!-- end progress -->
                            <small>@lang('site.after sale service')</small>
                            <div class="progress wow slideInLeft animated" style="visibility: visible;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                    <span class="skill_count">80%</span>
                                </div>
                            </div><!-- end progress -->
                        </div><!-- end skills_bar -->
                    </div><!-- end widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end container -->
        </div>
</section><!-- End About Section -->


<!--/ COUNT SECTION -->
<section id="count_parallax" class="parallax" style="background-image: url({{asset('t3/demos/2.jpg')}});" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
    <div class="overlay">
        <div class="container">
            <div class="stat f-container">
                <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <i class="fa fa-user fa-3x"></i>
                        <span class="stat-count highlight">122</span>
                        <div class="milestone-details">@lang('site.Happy Customers')</div>
                    </div>
                </div>
                <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <i class="fa fa-shield fa-3x"></i>
                        <span class="stat-count highlight">726</span>
                        <div class="milestone-details">@lang('site.Ordered completed')</div>
                    </div>
                </div>
                <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <i class="fa fa-trophy fa-3x"></i>
                        <span class="stat-count highlight">14</span>
                        <div class="milestone-details">@lang('site.Awards Win')</div>
                    </div>
                </div>
                <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <i class="fa fa-camera fa-3x"></i>
                        <span class="stat-count highlight">5</span>
                        <div class="milestone-details">@lang('site.show romes')</div>
                    </div>
                </div>
            </div><!-- stat -->
        </div><!-- end container -->
    </div><!-- end overlay -->
</section>



<!--PRICING SECTION  -->
<section id="pricing" class="dark-wrapper">
    <div class="container">
        <div class="title text-center">
            <h2>@lang('site.projects')</h2>
        </div><!-- end title -->
        <div class="row text-center">

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                <div class="pricing-box">
                    <span class="hideme"><i class="fa fa-star bigstar"></i></span>
                    <div class="title"><h3>@lang('site.offices and companies')</h3></div>
                    <div class="price">
                       <img src="{{asset('t3/images/offices.jpg')}}" width="150px" style="border-radius: 20px">
                    </div>
                    <a class="jtbtn" href="#">@lang('site.order now')</a>
                </div><!-- Pricing Box -->
            </div><!-- Column 1 -->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                <div class="pricing-box">
                    <span class="hideme"><i class="fa fa-star bigstar"></i></span>
                    <div class="title"><h3>@lang('site.hostels')</h3></div>
                    <div class="price">
                        <img src="{{asset('t3/images/villas.jpg')}}" width="150px" style="border-radius: 20px">
                    </div>
                    <a class="jtbtn" href="#">@lang('site.order now')</a>
                </div><!-- Pricing Box -->
            </div><!-- Column 1 -->

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12" data-effect="helix">
                <div class="pricing-box">
                    <span class="hideme"><i class="fa fa-star bigstar"></i></span>
                    <div class="title"><h3>@lang('site.places and towers')</h3></div>
                    <div class="price">
                        <img src="{{asset('t3/images/hotels.jpg')}}" width="150px" style="border-radius: 20px">
                    </div>
                    <a class="jtbtn" href="#">@lang('site.order now')</a>
                </div><!-- Pricing Box -->
            </div><!-- Column 1 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- End Pricing -->

<!--/ VIDEO PARALLAX SECTINO  -->
<section class="videobg clearfix text-center">
    <a id="volume" onclick="$('#bgndVideo').toggleVolume()"><i class="fa fa-volume-down"></i></a>
    <a id="bgndVideo" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=W7Las-MJnJo',containment:'body',autoPlay:true, mute:true, startAt:33, opacity:1}">youtube</a>
    <div class="videooverlay" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="container">
            <div class="general-title text-center">
                <h3>Video Background Support</h3>
                <p>This is an another awesome feature!</p>
            </div>
        </div><!-- end container -->
    </div><!-- end overlay -->
</section><!--/ Video Parallex  End -->


<!--/ PORTFOLIO SECTION -->
<section id="works" class="dark-wrapper">
    <div class="container">
        <div class="title text-center">
            <h2>@lang('site.Our Best Work')</h2>
            <p>@lang('site.from our best work')</p>
            <hr>
        </div><!-- end title -->

        <div class="text-center clearfix">
            <nav class="portfolio-filter">
                <ul>
                    <li><a class="btn btn-primary" href="#" data-filter="*"><span></span>All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".photography">@lang('site.projects')</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".app-design">@lang('site.parteners')</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".logo">Logo</a></li>
                </ul>
            </nav>
        </div>

        <div class="norow">
            <div class="masonry_wrapper" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="item entry item-h2 photography print">
                    <img src="{{asset('t3/demos/1.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/1.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

                <div class="item entry item-h2 webdesign print">
                    <img src="{{asset('t3/demos/2.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/2.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

                <div class="item entry item-h2 videos print">
                    <img src="{{asset('t3/demos/3.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/3.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

                <div class="item entry item-h2 photography">
                    <img src="{{asset('t3/demos/4.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/4.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

                <div class="item entry item-h2 videos">
                    <img src="{{asset('t3/demos/5.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/5.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

                <div class="item entry item-h2 webdesign">
                    <img src="{{asset('t3/demos/work_06.jpg')}}" alt="" class="img-responsive">
                    <div class="hovereffect">
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="{{asset('t3/demos/work_06.jpg')}}"><span class="icon"><i class="fa fa-plus"></i></span></a>
                        <div class="buttons">
                            <h4>@lang('site.Portfolio Work')</h4>
                            <h5>@lang('site.extra text')</h5>
                        </div><!-- end buttons -->
                    </div><!-- end hovereffect -->
                </div>

            </div><!-- end portfolio-masonry -->
        </div><!-- end row -->
    </div> <!-- end Container-->
</section><!-- end work -->

<!--/ FEATURE SECTION -->
<section id="featured_parallax" class="parallax" style="background-image: url({{asset('t3/demos/3.jpg')}});" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="20">
    <div class="overlay">
        <div class="container">
            <div class="featured-box" data-effect="slide-bottom">
                <h3>1st decor IS A FEATURED RICH CLEAN <br> & MODERN DESIGN</h3>
                <img class="img-respnsive" src="{{asset('t3/images/offices.png')}}" alt="">
            </div>
        </div><!-- end container -->
    </div><!-- end overlay -->
</section><!--/ Featured Parallex -->

<!--/ CONTACT AND MAP SECTION -->
<section id="contact" class="contact-wrapper">
    <div class="title text-center">
        <h2>@lang('site.contact us')</h2>
        <p>@lang('site.contact us section')</p>
        <hr>
    </div><!-- end title -->
    <div class="contact_tab text-center">
        <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">@lang('site.Contact Details')</a></li>
            <li><a href="#tab2" role="tab" data-toggle="tab">@lang('site.Our Location Maps')</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
                <div class="container">
                    <p>@lang('site.contact us text') </p>
                    <div id="message"></div>
                    <form id="contactform" action="contact.php" name="contactform" method="post" data-scroll-reveal="enter from the bottom after 0.4s">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-contact btn-primary">SUBMIT</button>
                        </div>
                    </form> <!-- End Form -->
                </div> <!-- End Container -->
            </div><!-- End Tab Pane -->

            <!-- /Google Map -->
            <div class="tab-pane fade" id="tab2">
                <div id="map">
                    <div class="row" style="margin-left: 5%;margin-right: 5%">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.7011039403537!2d39.130218214942985!3d21.636567785672245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d98b40f07cf1%3A0xc6a80098f180ee4f!2s1st%20for%20Decoration!5e0!3m2!1sen!2ssa!4v1605776489920!5m2!1sen!2ssa" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>

                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.385374733111!2d46.67273248500002!3d24.713646584123335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f02d2adafda73%3A0xbec2f0dcbb183509!2z2KfZhNij2YjZhCDZhNmE2K_ZitmD2YjYsQ!5e0!3m2!1sar!2ssa!4v1562225254224!5m2!1sar!2ssa" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /end my tab content -->
    </div><!-- /contact_tab -->

    <div class="container">
        <div class="title text-center">
            <div class="clearfix"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                    <a title="" href="#"><i class="fa fa-envelope-o aligncenter"></i></a>
                    <h2>
                        test@1stdecor.com.COM
                        <br>
                        info@1stdecor.com
                    </h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                    <a title="" href="#"><i class="fa fa-map-marker aligncenter"></i></a>
                    <h2>
                        <b style="color: blue">Jeddah</b> Al Naeem, Saudi Arabia
                        Phone: ‎+966 12 215 1999
                        Fax: ‎+966 12 215 1888
                        <br>
                        <b style="color: blue">Riyadh</b> AL Rahmania, Saudi Arabia
                        Phone: ‎+966 11 419 2110
                        Email: info@1stdecor.com
                        <br>
                        <b style="color: blue">Showroom</b> 09:30 - 12:30 , 17:00 - 22:30
                        Head Office 09:00 - 18:00
                    </h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                    <a title="" href="#"><i class="fa fa-phone aligncenter"></i></a>
                    <h2>
                        +8 6754 6666 <br>
                        +966 12 215 1999
                    </h2>
                </div>
            </div>
        </div> <!-- end title -->
    </div><!-- end container -->

</section><!--/ Contact End -->

<!--/ FOOTER SECTION-->
<section id="footer" class="footer-wrapper text-center">
    <div class="container">
        <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="aligncenter">
                <a href="index.html" class="navbar-brand">1St-Decor Web Site</a>

                <div class="socialFooter">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>

                    <a href="#"><i class="fa fa-linkedin"></i></a>

                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>

                    <a href="#"><i class="fa fa-youtube"></i></a>

                </div>
                <!-- don't removed this as we are providing it for free -->
                <p>Designed by © 2023 <a href="#">Mohammed Gaffer</a></p>
                <a data-scroll-reveal="enter from the bottom after 0.3s" href="#home"><i class="fa fa-angle-up"></i></a>
            </div>    <!-- end title -->
        </div>  <!-- end container -->
</section><!--/ Footer  End -->

<!-- SECTION CLOSED -->

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{asset('t3/js/jquery.js')}}"></script>
<script src="{{asset('t3/js/bootstrap.js')}}"></script>
<script src="{{asset('t3/js/smooth-scroll.js')}}"></script>
<script src="{{asset('t3/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('t3/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('t3/js/owl.carousel.js')}}"></script>
<script src="{{asset('t3/js/jquery.jigowatt.js')}}"></script>
<script src="{{asset('t3/js/custom.js')}}"></script>
<script src="{{asset('t3/js/jquery.unveilEffects.js')}}"></script>
<script src="{{asset('t3/js/jquery.isotope.min.js')}}"></script>
<script>
    (function ($) {
        var $container = $('.masonry_wrapper'),
            colWidth = function () {
                var w = $container.width(),
                    columnNum = 1,
                    columnWidth = 0;
                if (w > 1200) {
                    columnNum  = 3;
                } else if (w > 900) {
                    columnNum  = 3;
                } else if (w > 600) {
                    columnNum  = 2;
                } else if (w > 300) {
                    columnNum  = 1;
                }
                columnWidth = Math.floor(w/columnNum);
                $container.find('.item').each(function() {
                    var $item = $(this),
                        multiplier_w = $item.attr('class').match(/item-w(\d)/),
                        multiplier_h = $item.attr('class').match(/item-h(\d)/),
                        width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                        height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                    $item.css({
                        width: width,
                        height: height
                    });
                });
                return columnWidth;
            }

        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);
        }

        $('nav.portfolio-filter ul li a').on('click', function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector }, refreshWaypoints());
            $('nav.portfolio-filter ul li a').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        isotope = function () {
            $container.isotope({
                resizable: true,
                itemSelector: '.item',
                masonry: {
                    columnWidth: colWidth(),
                    gutterWidth: 0
                }
            });
        };
        isotope();
        $(window).smartresize(isotope);
    }(jQuery));
</script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('/t3/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('t3/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script type="text/javascript">
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,
                hideThumbs:10,
                fullWidth:"off",
                fullScreen:"on",
                fullScreenOffsetContainer: ""
            });
    });	//ready
</script>



<!-- Animation Scripts-->
<script src="{{asset('t3/js/scrollReveal.js')}}"></script>
<script>
    (function($) {
        "use strict"
        window.scrollReveal = new scrollReveal();
    })(jQuery);
</script>

<!-- Portofolio Pretty photo JS -->
<script src="{{asset('t3/js/jquery.prettyPhoto.js')}}}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        jQuery('a[data-gal]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('gal'));
        });
        jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
    })(jQuery);
</script>

<!-- Video Player o-->
<script src="{{asset('t3/js/jquery.mb.YTPlayer.js')}}"></script>
<script type="text/javascript">
    (function($) {
        "use strict"
        $(".player").mb_YTPlayer();
    })(jQuery);
</script>

</body>
</html>
