@extends('layouts.mainLayout')

@section('styles')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="corporate html template - agency theme - business html template - creative theme - portfolio html template - gallery theme - restaurant theme - ecommerce template - app template - landing page - real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency, corporate, business, app and creative portfolio, it is suitable for any kind of websites, like ecommerce, restaurant, photography, gallery and retail website.">
    <meta name="author" content="encodeslife">
    <link rel="icon" href="img/favicon.png">

    <title>Ecada - Responsive Multipurpose Template</title>
    <!-- BOOTSTRAP -->
    <link href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- REVOLUTION SLIDER MAIN STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/settings.css')}}">

    <!-- REVOLUTION SLIDER LAYERS AND NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/navigation.css')}}">

    <!-- CUSTOM STYLES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- THEME SKINS -->
    <link id="skin" href="{{asset('css/theme-colors/brown.css')}}" rel="stylesheet">
    <link href="{{asset('js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
    <link href="{{asset('css/line-icons/line-icons.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href="{{asset('css/ie.css')}}" rel="stylesheet">
    <![endif]-->

@endsection

@section('content')
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div id="slider_container" class="rev_slider_wrapper">
        <div id="rev-slider" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="slideremovedown">
                    <!-- MAIN IMAGE -->
                    <img src="img/slider/revolution/001.jpg" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-1" data-x="center" data-y="top" data-voffset="152" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_top.png" alt=""></div>
                    <div class="tp-caption captionHeadline1 highlight primary" id="slide-397-layer-2" data-x="center" data-y="top" data-voffset="200" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Freelance designer</div>
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-3" data-x="center" data-y="top" data-voffset="236" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_bottom.png" alt=""></div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionHeadline2" id="slide-397-layer-4" data-x="center" data-y="top" data-voffset="300" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="color: #fff;z-index: 7; white-space: nowrap;">Creative design</div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink hidden-xs" id="slide-399-layer-5" data-x="center" data-y="top" data-voffset="380" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><a href="#" class="btn-e btn-e-primary">Learn more <i class="fa fa-plus"></i></a> <a href="#" class="btn-e">Our Work</a></div>
                </li>

                <li data-transition="slideremovedown">
                    <!-- MAIN IMAGE -->
                    <img src="img/slider/revolution/002.jpg" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-6" data-x="center" data-y="top" data-voffset="152" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_top.png" alt=""></div>
                    <div class="tp-caption captionHeadline1 highlight purple" id="slide-397-layer-7" data-x="center" data-y="top" data-voffset="200" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Art directions</div>
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-8" data-x="center" data-y="top" data-voffset="236" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_bottom.png" alt=""></div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionHeadline2" id="slide-397-layer-9" data-x="center" data-y="top" data-voffset="300" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Creative agency</div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink hidden-xs" id="slide-399-layer-10" data-x="center" data-y="top" data-voffset="380" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><a href="#" class="btn-e btn-e-primary">Learn more <i class="fa fa-plus"></i></a> <a href="#" class="btn-e">Our Work</a></div>
                </li>

                <li data-transition="slideremovedown">
                    <!-- MAIN IMAGE -->
                    <img src="img/slider/revolution/003.jpg" alt="" width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-11" data-x="center" data-y="top" data-voffset="152" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_top.png" alt=""></div>
                    <div class="tp-caption captionHeadline1 highlight green" id="slide-397-layer-12" data-x="center" data-y="top" data-voffset="200" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Web development</div>
                    <div class="tp-caption captionHeadline1" id="slide-397-layer-13" data-x="center" data-y="top" data-voffset="236" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;"><img src="img/border_bottom.png" alt=""></div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionHeadline2" id="slide-397-layer-14" data-x="center" data-y="top" data-voffset="300" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Creative team</div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption captionButtonlink hidden-xs" id="slide-399-layer-15" data-x="center" data-y="top" data-voffset="380" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><a href="#" class="btn-e btn-e-primary">Learn more <i class="fa fa-plus"></i></a> <a href="#" class="btn-e">Our Work</a></div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- END OF SLIDER WRAPPER -->

    <!-- START - CTA Primary -->
    <div class="cta-wrapper cta-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Creative html5 template for online business</h4>
                    <p>More then 100 premium html 5 template in one download package</p>
                    <a class="btn-e btn-gray" href="#">Download theme now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END - CTA Primary -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Show your project with Ecada theme</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.
                        </p>
                        <i class="fa fa-rocket"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col-icon-2 box">
                        <i class="fa fa-tablet icon-circle fa-primary"></i>
                        <h5>Responsive design</h5>
                        <p>
                            Mea ignota inciderint accommodare eu, et dictas feugait commune sea, dicant facilisis posidonium.
                        </p>
                        <p><a class="btn-e btn-e-primary btn-sm" href="#">Read more +</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-icon-2 box">
                        <i class="fa fa-desktop icon-circle fa-primary"></i>
                        <h5>Support all browser</h5>
                        <p>
                            Mea ignota inciderint accommodare eu, et dictas feugait commune sea, dicant facilisis posidonium.
                        </p>
                        <p><a class="btn-e btn-e-primary btn-sm" href="#">Read more +</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-icon-2 box">
                        <i class="fa fa-flask icon-circle fa-primary"></i>
                        <h5>Premium HTML5</h5>
                        <p>
                            Mea ignota inciderint accommodare eu, et dictas feugait commune sea, dicant facilisis posidonium.
                        </p>
                        <p><a class="btn-e btn-e-primary btn-sm" href="#">Read more +</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp gray-container padding-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Our skill</h5>
                    <div id="progress-bar">
                        <div class="progress progress-primary progress-sm">
                            <div class="progress-bar" role="progressbar" data-value-progress="100">
                                <span class="value-progress">HTML/CSS</span>
                            </div>
                        </div>
                        <div class="progress progress-primary progress-sm">
                            <div class="progress-bar" role="progressbar" data-value-progress="80">
                                <span class="value-progress">Design</span>
                            </div>
                        </div>
                        <div class="progress progress-primary progress-sm">
                            <div class="progress-bar" role="progressbar" data-value-progress="70">
                                <span class="value-progress">Javascript</span>
                            </div>
                        </div>
                        <div class="progress progress-primary progress-sm">
                            <div class="progress-bar" role="progressbar" data-value-progress="87">
                                <span class="value-progress">Php/Mysql</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/imac.png" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Parallax counter -->
    <div class="parallax bg1">
        <div class="parallax-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row margin-top-30">
                            <div class="col-sm-6">
                                <div class="icon-box box-default">
                                    <div class="icon-box-contain">
                                        <i class="fa fa-support fa-3x"></i>
                                        <h5>Support 24/7</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                        <p><a href="#" class="btn-e btn-e-primary btn-sm">Learn more +</a></p>
                                    </div>
                                    <i class="fa fa-user icon-bg"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-box box-default">
                                    <div class="icon-box-contain">
                                        <i class="fa fa-wrench fa-3x"></i>
                                        <h5>Our services</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                        <p><a href="#" class="btn-e btn-e-primary btn-sm">Learn more +</a></p>
                                    </div>
                                    <i class="fa fa-wrench icon-bg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row margin-top-30">
                            <div class="col-sm-6">
                                <div class="icon-box box-default">
                                    <div class="icon-box-contain">
                                        <i class="fa fa-image fa-3x"></i>
                                        <h5>Our project</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                        <p><a href="#" class="btn-e btn-e-primary btn-sm">Learn more +</a></p>
                                    </div>
                                    <i class="fa fa-image icon-bg"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-box box-default">
                                    <div class="icon-box-contain">
                                        <i class="fa fa-file-text-o fa-3x"></i>
                                        <h5>Licence</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        </p>
                                        <p><a href="#" class="btn-e btn-e-primary btn-sm">Learn more +</a></p>
                                    </div>
                                    <i class="fa fa-file-text-o icon-bg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Parallax counter -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp gray-container padding-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Meet our creative team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="team" class="owl-carousel leftControls-right">
                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>John Doe</h5>
                                    <span class="team-position">Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>Sara Jen</h5>
                                    <span class="team-position">Google Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>Dannish Josh</h5>
                                    <span class="team-position">Marketing</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>Katrina Mccoy</h5>
                                    <span class="team-position">C.E.O.</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>Mark Johnson</h5>
                                    <span class="team-position">Technical Director</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="thumbnail team-wrapp">
                                <div class="img-wrapper">
                                    <div class="img-caption ecadaZoomIn">
                                        <div class="team-network">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <img src="img/team/img.png" class="img-responsive" alt="" />
                                </div>
                                <div class="caption">
                                    <h5>John Doe</h5>
                                    <span class="team-position">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Ecada theme features</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                        <i class="fa fa-trophy"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-laptop fa-primary"></i>
                            <h5>Multipurpose</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-magic fa-primary"></i>
                            <h5>Clean design</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-clone fa-primary"></i>
                            <h5>Cross browser</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-gift fa-primary"></i>
                            <h5>Lots of features</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-tablet fa-primary"></i>
                            <h5>Responsive</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-flask fa-primary"></i>
                            <h5>Components</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-file-text-o fa-primary"></i>
                            <h5>Documentation</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box icon-top selected">
                        <div class="icon-box-contain">
                            <i class="fa fa-shopping-cart fa-primary"></i>
                            <h5>Cheap price</h5>
                            <p>
                                Feugait commune sea, dicant facilisis posidonium at mel. Ei persius delenit
                            </p>
                            <p><a class="btn-e btn-e-primary btn-bordered btn-sm" href="#">Learn more +</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Parallax -->
    <div class="parallax parallax-two bg2">
        <div class="parallax-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 owl-column-wrapp">
                        <div id="testimonials" class="owl-carousel">
                            <div class="item">
                                <div class="testimonials-single">
                                    <blockquote class="centered">
                                        Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                    </blockquote>
                                    <span class="block"><a href="#">Evan Bohringer</a> - Google Manager</span>
                                    <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-single">
                                    <blockquote class="centered">
                                        Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                    </blockquote>
                                    <span class="block"><a href="#">Alice Williams</a> - Wrapbootstrap</span>
                                    <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-single">
                                    <blockquote class="centered">
                                        Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                    </blockquote>
                                    <span class="block"><a href="#">John Doe</a> - Facebook</span>
                                    <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-single">
                                    <blockquote class="centered">
                                        Usu an impedit civibus fuisset, id facilis tincidunt duo. Ad mea meis electram. Duo at hinc iuvaret ponderum, vim omnium utroque neglegentur at. Eu vis stet delenit oportere. Impetus percipitur id mel.
                                    </blockquote>
                                    <span class="block"><a href="#">Katrina Mc`coy</a> - Web Designer</span>
                                    <img src="img/testimonials/img.png" class="img-circle testimonials-avatar" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Parallax -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Our portfolio</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                        <i class="fa fa-image"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <!-- START - Gallery Filter  -->
                    <ul class="filter-items">
                        {{--<li><a href="#" data-filter="" class="active">All</a></li>--}}
                        <li><a href="#" data-filter="web" class="active">Web</a></li>
                        <li><a href="#" data-filter="graphic">Graphic</a></li>
                        <li><a href="#" data-filter="logo">Logo</a></li>
                        <li><a href="#" data-filter="app">App</a></li>
                    </ul>
                    <!-- END - Gallery Filter -->
                </div>
            </div>

            <!-- START - Images Gallery -->
            <div id="gallery" class="masonry gallery">
                <div class="row">

                    @foreach($photos as $photo)
                    <!-- START - Gallery 01 -->
                    <div data-filter="web" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="{{$photo->file}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                {{--<h5><a href="portfolio_single_item.html">Project Title</a></h5>--}}
                                {{--<a href="#" class="img-categorie">Web design</a>--}}
                            </div>
                            <img src="{{$photo->file}}" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 01 -->

                    @endforeach

                    <!-- START - Gallery 02 -->
                    <div data-filter="graphic" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                {{-- Promijenio da bih prilagodio za video --}}
                                <a href="https://www.youtube.com/watch?v=kKlzQDt69B0" target="_blank" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Web design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 02 -->

                    <!-- START - Gallery 03 -->
                    <div data-filter="app" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">App design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 03 -->

                    <!-- START - Gallery 04 -->
                    <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Logo design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 04 -->

                    <!-- START - Gallery 05 -->
                    <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Logo design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 05 -->

                    <!-- START - Gallery 06 -->
                    <div data-filter="web" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Web design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 06 -->

                    <!-- START - Gallery 07 -->
                    <div data-filter="graphic" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Graphic design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 07 -->

                    <!-- START - Gallery 08 -->
                    <div data-filter="app" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">App design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 08 -->

                    <!-- START - Gallery 09 -->
                    <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                        <div class="img-wrapper">
                            <div class="img-caption ecadaZoomInDown">
                                <a href="img/gallery/img_380x380.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                <a href="#" class="img-categorie">Logo design</a>
                            </div>
                            <img src="img/gallery/img_380x380.png" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <!-- END - Gallery 09 -->
                </div>
            </div>
            <!-- END - Images Gallery -->
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp gray-container padding-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Recent blog post</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                        <i class="fa fa-file-text-o"></i>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($posts as $post)
                <div class="col-md-4">
                    <article class="post-wrapper">
                        <a href="{{route('post',$post->id)}}"><img src="{{$post->photos->count() ? $post->photos->first()->file : 'img/blog/img_750x500.png'}}" class="img-responsive" alt=""/></a>
                        <div class="post-content">
                            <span class="post-date">{{$post->created_at->diffForHumans()}}</span>
                            <h5><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h5>
                            <div class="footer-post">
                                <ul>
                                    <li><a href="#"><i class="fa fa-share-alt"></i> 174</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 24</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 8</a></li>
                                </ul>
                                <a href="{{route('post',$post->id)}}" class="btn-e btn-e-primary btn-sm">Read more +</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach


                <div class="row">
                    <div class="col-md-6">
                        {{$posts->render()}}
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Parallax -->
    <div class="parallax parallax-three bg-clients">
        <div class="parallax-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 owl-column-wrapp text-center">
                        <div id="clients" class="owl-carousel leftControls-right">
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                            <div class="item">
                                <a href="#" class="client-logo"><img src="img/clients/img.png" class="img-reponsive" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Parallax -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h3>Pricing table</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricing secondary popular">
                        <div class="pricing-head-black">
                            <h4>Personal</h4>
                        </div>
                        <div class="pricing-price">
                            <sup>$</sup> <strong>17</strong>
                        </div>
                        <div class="pricing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pricing-container pull-left">
                            <ul>
                                <li class="styled"><i class="fa fa-globe"></i> <strong>5 theme</strong> included</li>
                                <li><i class="fa fa-gift"></i> <strong>No</strong> components</li>
                                <li class="styled"><i class="fa fa-inbox"></i> <strong>PSD not</strong> included</li>
                                <li><i class="fa fa-database"></i> <strong>PHP</strong> included</li>
                                <li class="styled"><strong><i class="fa fa-file-photo-o"></i> Image not</strong> included</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#" class="btn-e btn-e-primary">Buy it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricing secondary popular">
                        <div class="pricing-head-black">
                            <h4>Premium</h4>
                        </div>
                        <div class="pricing-price">
                            <sup>$</sup> <strong>20</strong>
                        </div>
                        <div class="pricing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="pricing-container pull-left">
                            <ul>
                                <li class="styled"><i class="fa fa-globe"></i> <strong>10 theme</strong> included</li>
                                <li><i class="fa fa-gift"></i> <strong>Theme</strong> components</li>
                                <li class="styled"><i class="fa fa-inbox"></i> <strong>PSD not</strong> included</li>
                                <li><i class="fa fa-database"></i> <strong>PHP</strong> included</li>
                                <li class="styled"><strong><i class="fa fa-file-photo-o"></i> Image not</strong> included</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            {{--<a href="#" class="btn-e btn-e-primary">Buy it now</a>--}}
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="business" value="dakagacevic@facilitator.com">
                                <input type="hidden" name="currency_code" value="US">





                                <input type="hidden" name="item_name_1" value="Premium package">
                                <input type="hidden" name="item_number_1" value="1">
                                <input type="hidden" name="amount_1" value="2">
                                <input type="hidden" name="quantity_1" value="1">

                                <input type="hidden" name="rm" value="2">




                                @if(Auth::user())


                                    <input type="hidden" name="return" value="http://jzuobkotor.me/thankyou?user={{Auth::user()->id}}">

                                    {!! Form::button('Buy now',['class'=>'btn-e btn-e-primary','type'=>'image','name'=>'upload'])!!}

                                @else

                                    <a class="btn-e btn-e-primary" href="javascript:void(0)">Register and buy</a>

                            @endif

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricing secondary popular">
                        <div class="pricing-head-black">
                            <h4>Corporate</h4>
                        </div>
                        <div class="pricing-price">
                            <sup>$</sup> <strong>29</strong>
                        </div>
                        <div class="pricing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pricing-container pull-left">
                            <ul>
                                <li class="styled"><i class="fa fa-globe"></i> <strong>25 theme</strong> included</li>
                                <li><i class="fa fa-gift"></i> <strong>Theme</strong> components</li>
                                <li class="styled"><i class="fa fa-inbox"></i> <strong>PSD</strong> included</li>
                                <li><i class="fa fa-database"></i> <strong>PHP</strong> included</li>
                                <li class="styled"><strong><i class="fa fa-file-photo-o"></i> Image not</strong> included</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#" class="btn-e btn-e-primary">Buy it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pricing secondary popular">
                        <div class="pricing-head-black">
                            <h4>Unlimited</h4>
                        </div>
                        <div class="pricing-price">
                            <sup>$</sup> <strong>35</strong>
                        </div>
                        <div class="pricing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pricing-container pull-left">
                            <ul>
                                <li class="styled"><i class="fa fa-globe"></i> <strong>40 theme</strong> included</li>
                                <li><i class="fa fa-gift"></i> <strong>Theme</strong> components</li>
                                <li class="styled"><i class="fa fa-inbox"></i> <strong>PSD</strong> included</li>
                                <li><i class="fa fa-database"></i> <strong>PHP</strong> included</li>
                                <li class="styled"><strong><i class="fa fa-file-photo-o"></i> Image</strong> included</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#" class="btn-e btn-e-primary">Buy it now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

    <!-- START - Parallax -->
    <div class="parallax parallax-four bg3">
        <div class="parallax-container padding-bottom-40">
            <div class="container">
                <div class="row count">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-item counter-lg">
                            <span class="fa fa-trophy fa-2x icon-circle fa-primary"></span>
                            <div class="count-value" data-count="424"><span class="start-count">0</span></div>
                            <p>Awards</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-item counter-lg">
                            <span class="fa fa-briefcase fa-2x icon-circle fa-primary"></span>
                            <div class="count-value" data-count="758"><span class="start-count">0</span></div>
                            <p>Project</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-item counter-lg">
                            <span class="fa fa-shield fa-2x icon-circle fa-primary"></span>
                            <div class="count-value" data-count="320"><span class="start-count">0</span></div>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-item counter-lg">
                            <span class="fa fa-user fa-2x icon-circle fa-primary"></span>
                            <div class="count-value" data-count="662"><span class="start-count">0</span></div>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Parallax -->

@endsection

@section('scripts')

    <!-- START - to top -->
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- END - to top -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP -->
    <script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>

    <!-- REVOLUTION SLIDER -->
    <script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min.js?ver=1.0.0')}}"></script>
    <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            if ($("#rev-slider").revolution != undefined) {
                $("#rev-slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hephaistos",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 20,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    gridwidth: 1230,
                    gridheight: 720
                });
            }
        });
    </script>

    <!-- Parallax -->
    <script src="{{asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('js/parallax/setting.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('js/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/owlcarousel/js/setting.js')}}"></script>

    <!-- PrettyPhoto -->
    <script src="{{asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/prettyPhoto/js/setting.js')}}"></script>

    <!-- Masonry -->
    <script src="{{asset('js/masonry/js/masonry.min.js')}}"></script>
    <script src="{{asset('js/masonry/js/masonry.filter.js')}}"></script>
    <script src="{{asset('js/masonry/js/setting.js')}}"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Nicescroll -->
    <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/nicescroll/settings.js')}}"></script>

    <!-- Theme option-->
    <script src="{{asset('js/style-switcher/js/style-switcher.js')}}"></script>

@endsection