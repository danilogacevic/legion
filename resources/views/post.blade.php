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

    <!-- Bootstrap core CSS -->
    <link href="{{asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Theme skins -->
    <link id="skin" href="{{asset('css/theme-colors/brown.css')}}" rel="stylesheet">
    <link href="{{asset('js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
    <link href="{{asset('css/line-icons/line-icons.css')}}" rel="stylesheet">

@endsection

@section('content')

    <!-- START - Inner Head -->
    <div class="parallax inner-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-list-ol"></i>
                    <h4>Theme <span>Pages</span></h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Blog Item Pages</a></li>
                        <li class="active">Right Sidebar Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END - Inner Head -->

    <!-- START - Contain Wrapp -->
    <div class="contain-wrapp padding-bottom-40">
        <div class="container">
            <div class="row">
                <!-- START - Article -->
                <div class="col-sm-8">
                    <!-- START - Post 1 -->
                    <article class="post post-thumbnail">
                        <div class="img-wrapper">
                            <img src="{{$post->photos->count() ? $post->photos->first()->file : 'img/blog/img_750x500.png'}}" class="img-responsive" alt="" />
                            <div class="post-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="post-frame">
                            <div class="post-heading">
                                <h5><a href="#">{{$post->title}}.</a></h5>
                            </div>
                           {!! $post->content !!}

                            @if($post->photos->count() > 1)

                            <img src="{{$post->photos[1]->file}}" class="alignleft" alt="" width="300px" id="second"/>

                            @endif

                            <div class="footer-post margin-bottom-10">
                                <ul>
                                    <li><a href="#"><i class="fa fa-share-alt"></i> 174</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 24</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 8</a></li>
                                </ul>
                                <div class="rating-large pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                            {{--<a href="#" class="btn-e btn-e-primary btn-icon">Read more <i class="fa fa-plus"></i></a>--}}
                        </div>
                    </article>
                    <!-- END - Post 1 -->

                    <!-- START - Leave Comments -->
                    <h5>Leave comment</h5>
                    <form class="row">
                        <div class="col-md-6 margin-bottom-30">
                            <input class="form-control" type="text" name="name" placeholder="Enter your full name..." />
                        </div>
                        <div class="col-md-6 margin-bottom-30">
                            <input class="form-control" type="text" name="name" placeholder="Enter your e-mail..." />
                        </div>
                        <div class="col-md-12 margin-bottom-30">
                            <textarea class="form-control" rows="9" name="message" placeholder="Your comment here..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <label>Your Rating :</label>
                            <div id="start" class="rate" data-rating="1"></div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Leave comment" class="btn-e btn-rounded btn-e-primary" name="Submit" />
                        </div>
                    </form>
                    <!-- END - Leave Comments -->

                    <div class="divider margin-top-25 margin-bottom-40"></div>

                    <!-- START - Comments -->
                    <h5>Comments (5)</h5>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/testimonials/img.png" alt="" />
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">John Doe</a></h6>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/testimonials/img.png" alt="" />
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">Jane Roe</a></h6>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            </p>
                            <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/testimonials/img.png" alt="" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="#">John Doe</a></h6>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                    <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/testimonials/img.png" alt="" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Jane Roe</a></h6>
                                    <p>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                    </p>
                                    <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/testimonials/img.png" alt="" />
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">Jane Roe</a></h6>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                        </div>
                    </div>
                    <!-- END - Comments -->
                </div>
                <!-- END - Article -->

                <!-- START - Aside -->
                <div class="col-sm-4">
                    <aside>
                        <!-- START - Search widget -->
                        <div class="widget-search widget">
                            <form action="#" method="get">
                                <input type="text" class="form-control" placeholder="Search">
                                <button class="btn-e btn-e-primary no-rounded" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- END - Search widget -->

                        <!-- START - Widget 1 -->
                        <div class="widget">
                            <h5 class="widget-head">Categories</h5>
                            <ul class="cat">
                                <li><a href="#"><i class="fa fa-edit"></i> Web design</a> <span>(20)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Graphic</a> <span>(43)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Illustrator</a> <span>(7)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Tutorial</a> <span>(16)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Photography</a> <span>(27)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Marketing</a> <span>(10)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> E-Commerce</a> <span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-edit"></i> Bloging</a> <span>(19)</span></li>
                            </ul>
                        </div>
                        <!-- END - Widget 1 -->

                        <!-- START - Widget 2 -->
                        <div class="widget">
                            <h5 class="widget-head">Recent Posts</h5>
                            <div class="recent-widget">
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-heading post-thumbnail">
                                        <a href="#" class="post-thumbnail"><img src="img/blog/thumbs/img.png" class="img-thumb" alt="" /></a>
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END - Widget 2 -->

                        <!-- START - Widget 3 -->
                        <div class="widget">
                            <h5 class="widget-head">Recent Comments</h5>
                            <div class="row">
                                <div class="col-md-12 owl-column-wrapp margin-min-bot-30">
                                    <div id="recent-comments" class="owl-carousel">
                                        <div class="item recent-comment">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat.
                                            </blockquote>
                                            <a href="#" class="comment-author">John Doe</a>
                                        </div>
                                        <div class="item recent-comment">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat.
                                            </blockquote>
                                            <a href="#" class="comment-author">John Doe</a>
                                        </div>
                                        <div class="item recent-comment">
                                            <blockquote>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat.
                                            </blockquote>
                                            <a href="#" class="comment-author">John Doe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END - Widget 3 -->

                        <!-- START - Widget 4 -->
                        <div class="widget">
                            <h5 class="widget-head">Tags</h5>
                            <a href="#" class="tag">Web (10)</a>
                            <a href="#" class="tag">Clean (8)</a>
                            <a href="#" class="tag">Modern (12)</a>
                            <a href="#" class="tag">Flat (16)</a>
                            <a href="#" class="tag">Graphic (22)</a>
                            <a href="#" class="tag">Logo (11)</a>
                            <a href="#" class="tag">App (4)</a>
                            <a href="#" class="tag">Color (2)</a>
                            <a href="#" class="tag">Minimalis (15)</a>
                            <a href="#" class="tag">Tips (8)</a>
                            <a href="#" class="tag">Tutorial (9)</a>
                            <a href="#" class="tag">News (9)</a>
                        </div>
                        <!-- END - Widget 4 -->

                        <!-- START - Widget 5 -->
                        <div class="widget">
                            <h5 class="widget-head">Get in touch</h5>
                            <div class="blog-social">
                                <a href="#" class="btn-e btn-twitter btn-icon btn-block">Twitter <i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn-e btn-facebook btn-icon btn-block">Facebook <i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn-e btn-google-plus btn-icon btn-block">Google + <i class="fa fa-google-plus"></i></a>
                                <a href="#" class="btn-e btn-linkedin btn-icon btn-block">Linkedin <i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!-- END - Widget 5 -->
                    </aside>
                </div>
                <!-- END - Aside -->
            </div>
        </div>
    </div>
    <!-- END - Contain Wrapp -->

@endsection

@section('scripts')

    <!-- START - Back To Top -->
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- END - Back To Top -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP -->
    <script src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>

    <!-- Parallax -->
    <script src="{{asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('js/parallax/setting.js')}}"></script>

    <!-- Rate item -->
    <script src="{{asset('js/raty/jquery.raty.min.js')}}"></script>
    <script src="{{asset('js/raty/setting.js')}}"></script>

    <!-- Custom javaScript for this theme -->
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Nicescroll -->
    <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/nicescroll/settings.js')}}"></script>

    <!-- Theme option-->
    <script src="{{asset('js/style-switcher/js/style-switcher.js')}}"></script>

    <script class="">

    // Inject second post photo after second paragraph
        $("#second").insertAfter($('.post-frame p')[1]);


    </script>

@endsection