<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1st-decor test</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('t2/dist/css/style.css')}}">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>


<body class="is-boxed has-animations">
<div class="body-wrap">
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="{{asset('t2/dist/images/logo.png')}}" alt="Logo" style="width: 56px;">
                        </a>
                    </h1>
                </div>

                <div  style="z-index: 1">
                    <ul class="header-links">
                        <li>
                            <a href="#">@lang('site.main')</a>
                        </li>
                        <li>
                            <a href="#products">@lang('site.Products')</a>
                        </li>
                        <li>
                            <a href="#about us">@lang('site.about us')</a>
                        </li>
                        <li>
                            <a href="#projects">@lang('site.projects')</a>
                        </li>
                        <li>
                            <a href="#contactus">@lang('site.contact us')</a>
                        </li>
                        <li>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title mt-0">@lang('site.main header title')</h1>
                        <p class="hero-paragraph">@lang('site.we are commit to make 1st for decour has the trust trow butting the hiest othity in work')</p>
                        <div class="hero-cta"><a class="button button-primary" href="#">@lang('site.Pre order now')</a><a class="button" href="#">@lang('site.Get in touch')</a></div>
                    </div>
                    <div class="hero-figure anime-element">
                        <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                            <rect width="528" height="396" style="fill:transparent;" />
                        </svg>
                        <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                        <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                        <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                        <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                        <div class="hero-figure-box hero-figure-box-05">
                            <center>
                                <img src="{{asset('t2/dist/images/logo.png')}}" style="width:200px">
                            </center>
                        </div>
                        <div class="hero-figure-box hero-figure-box-06"></div>
                        <div class="hero-figure-box hero-figure-box-07"></div>
                        <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                        <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                        <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                    </div>
                </div>
            </div>
        </section>

        <a name="about us"></a>
        <section class="features section" style="margin-top: 50px">
            <div class="text-center">
                <h2>@lang('site.about us')</h2>
            </div>
            <div class="container">
                <div class="features-inner section-inner has-bottom-divider">
                    <div class="features-wrap">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('t2/dist/images/feature-icon-01.svg')}}" alt="Feature 01">
                                </div>
                                <h4 class="feature-title mt-24">@lang('site.1st for decor')</h4>
                                <p class="text-sm mb-0">@lang('site.firstfordecor')</p>
                            </div>
                        </div>

                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('t2/dist/images/feature-icon-02.svg')}}" alt="Feature 02">
                                </div>
                                <h4 class="feature-title mt-24">@lang('site.how are us')</h4>
                                <p class="text-sm mb-0">@lang('site.who us')</p>
                            </div>
                        </div>

                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{asset('t2/dist/images/feature-icon-03.svg')}}" alt="Feature 03">
                                </div>
                                <h4 class="feature-title mt-24">@lang('site.Our vision')</h4>
                                <p class="text-sm mb-0">@lang('site.vision')</p>
                            </div>
                        </div>

                        <br> <br>
                        <a name="products"></a>
                        <div class="feature-title mt-24" style="align-items: center !important;width: -webkit-fill-available;text-align: center;">
                           <h2> @lang('site.our products')</h2>
                        </div>
                        <br><br>

                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <h4 class="feature-title mt-24">@lang('site.paper wall')</h4>
                                <center>
                                    <img src="{{asset('t2/dist/images/wall paper.jpg')}}" style="width: 256px;border-radius: 15px">
                                    <button class="button button-sm button-wide-mobile" style="margin-top: 10px">@lang('site.know more')</button>
                                </center>
                            </div>
                        </div>

                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <h4 class="feature-title mt-24">@lang('site.sejad')</h4>
                                <center>
                                    <img src="{{asset('t2/dist/images/matt.jpg')}}" style="width: 256px;border-radius: 15px;">
                                    <button class="button button-sm button-wide-mobile" style="margin-top: 10px">@lang('site.know more')</button>
                                </center>
                            </div>
                        </div>

                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <h4 class="feature-title mt-24">@lang('site.qumash')</h4>
                                <center>
                                    <img src="{{asset('t2/dist/images/clothS.jpg')}}" style="width: 256px;border-radius: 15px">
                                    <button class="button button-sm button-wide-mobile" style="margin-top: 10px">@lang('site.know more')</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <a name="@lang('site.projects')"></a>
        <section class="pricing section" style="margin-top: 30px">
            <div class="container-md">
                <div class="pricing-inner section-inner">
                    <div class="pricing-header text-center">
                        <h2 class="section-title mt-0">@lang('site.projects')</h2>
                        <p class="section-paragraph mb-0">

                        </p>
                    </div>
                    <div class="features-wrap">
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price">
                                                <div class="feature-icon">
                                                    <img src="{{asset('t2/dist/images/hotels.jpg')}}" width="180px" style="border-radius: 20px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">
                                            <center>
                                                @lang('site.hostels')
                                            </center>
                                        </div>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">@lang('site.know more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price">
                                                <div class="feature-icon">
                                                    <img src="{{asset('t2/dist/images/offices.jpg')}}" width="180px" style="border-radius: 20px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">
                                            <center>
                                                @lang('site.offices and companies')
                                            </center>
                                        </div>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">@lang('site.know more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price">
                                                <div class="feature-icon">
                                                    <img src="{{asset('t2/dist/images/villals.jpg')}}" width="180px" style="border-radius: 20px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">
                                            <center>
                                                @lang('site.places and towers')
                                            </center>
                                        </div>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">@lang('site.know more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- section for    -->
       <div>
           <center>
               <table>
                   <tr style="text-align: -webkit-center !important;">
                       <td>
                           <img src="{{asset('t2/dist/images/part1.jpg')}}" style="width: 120px">
                       </td>
                       <td>
                           <img src="{{asset('t2/dist/images/part2.jpg')}}" style="width: 120px">
                       </td>
                       <td>
                           <img src="{{asset('t2/dist/images/part3.jpg')}}" style="width: 120px">
                       </td>
                       <td>
                           <img src="{{asset('t2/dist/images/part4.jpg')}}" style="width: 120px">
                       </td>

                   </tr>
               </table>
           </center>
       </div>


        <a name="contactus"></a>
        <section class="cta section" style="margin-top: 100px">
            <div class="container">
                <div class="cta-inner section-inner">
                    <form>
                        <input type="text" name="fname" class="form-control" style="opacity: 45%;border-radius: 8px;margin-top: 10px;width: 100%" placeholder="First Name">
                        <br>
                        <input type="text" name="Lname" class="form-control" style="opacity: 45%;border-radius: 8px;margin-top: 10px;width: 100%" placeholder="Last Name">
                        <br>
                        <input type="text" name="Email" class="form-control" style="opacity: 45%;border-radius: 8px;margin-top: 10px;width: 100%" placeholder="E-mail">
                        <br>
                        <input type="text" name="Subject" class="form-control"style="opacity: 45%;border-radius: 8px;margin-top: 10px;width: 100%" placeholder="subject">
                        <br>
                        <textarea cols="37" style="opacity: 45%;border-radius: 8px;margin-top:10px" placeholder="your message" name="message" >
                        </textarea>
                    </form>
                    <div class="feature text-center is-revealing">
                        <div class="feature-inner">
                            <h4 class="feature-title mt-24">@lang('site.message us in any time!')</h4> <br>
                            <div style="font-size: small;text-align: left !important;">
                                <p style="margin: 0px">
                                    <b style="color: blue">Jeddah</b> Al Naeem, Saudi Arabia
                                    Phone: ‎+966 12 215 1999
                                    Fax: ‎+966 12 215 1888
                                </p>
                                <hr style="margin: 0px">
                                <p style="margin: 0px">
                                    <b style="color: blue">Riyadh</b> AL Rahmania, Saudi Arabia
                                    Phone: ‎+966 11 419 2110
                                    Email: info@1stdecor.com
                                </p>
                                <hr style="margin: 0px">
                                <p style="margin: 0px">
                                    <b style="color: blue">Showroom</b> 09:30 - 12:30 , 17:00 - 22:30
                                    Head Office 09:00 - 18:00
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-cta">
                        <a class="button button-primary button-wide-mobile" href="#">@lang('site.Get in touch')</a>
                    </div>

                </div>
            </div>
        </section>

        <section>

            <div class="container">
               <div class="text-center">
                   <h3>@lang('site.visit us in our location in any time')</h3>
               </div>

               <table>
                   <tr>
                       <td>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.7011039403537!2d39.130218214942985!3d21.636567785672245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d98b40f07cf1%3A0xc6a80098f180ee4f!2s1st%20for%20Decoration!5e0!3m2!1sen!2ssa!4v1605776489920!5m2!1sen!2ssa" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                       </td>
                       <td>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.385374733111!2d46.67273248500002!3d24.713646584123335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f02d2adafda73%3A0xbec2f0dcbb183509!2z2KfZhNij2YjZhCDZhNmE2K_ZitmD2YjYsQ!5e0!3m2!1sar!2ssa!4v1562225254224!5m2!1sar!2ssa" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </td>
                   </tr>
               </table>
           </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="site-footer-inner">
                <div class="brand footer-brand">
                    <a href="#">
                        <img class="header-logo-image" src="{{asset('t2/dist/images/logo.png')}}" alt="Logo" style="width:56px">
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a href="#">@lang('site.main')</a>
                    </li>
                    <li>
                        <a href="#products">@lang('site.Products')</a>
                    </li>
                    <li>
                        <a href="#about us">@lang('site.about us')</a>
                    </li>
                    <li>
                        <a href="#projects">@lang('site.projects')</a>
                    </li>
                    <li>
                        <a href="#contactus">@lang('site.contact us')</a>
                    </li>
                </ul>

                <ul class="footer-social-links list-reset">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Google</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                            </svg>
                        </a>
                    </li>
                </ul>

                <div class="footer-copyright">&copy; 2023  1stdecor By Mohammed Gaffer, all rights reserved</div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('t2/dist/js/main.min.js')}}"></script>
</body>


</html>
