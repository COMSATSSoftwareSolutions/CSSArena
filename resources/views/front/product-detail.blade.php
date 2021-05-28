<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CSS-Arena</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--owl carousel min css-->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <!--slick min css-->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <!--magnific popup min css-->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <!--font awesome css-->
    <link href="{{ asset('css/font.awesome.css') }}" rel="stylesheet">
    <!--ionicons css-->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <!--simple line icons css-->
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!--animate css-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!--jquery ui min css-->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <!--slinky menu css-->
    <link href="{{ asset('css/slinky.menu.css') }}" rel="stylesheet">
    <!--plugins css-->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--modernizr min js here-->
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}" defer></script>
</head>

<body>
    <div class="container">
        @include('layouts.header')

        <!--product details start-->
        <div class="product_details mb-60" style="border-top: 4px solid #d2691e;">
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                        data-zoom-image="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                        alt="big-1">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                            data-zoom-image="{{ asset('images/product-imgs/' . $product->product_img) }}">
                                            <img src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                alt="zo-th-1" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                            data-zoom-image="{{ asset('images/product-imgs/' . $product->product_img) }}">
                                            <img src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                alt="zo-th-1" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="product_d_right">
                            <form action="#">
                                <div class="productd_title_nav">
                                    <h1><a href="#">{{ $product->name }}</a></h1>
                                </div>
                                <div class="price_box">
                                    <span class="brand">Model: {{ $product->model_no }}</span>
                                    <br>
                                    <span class="model">Rs. {{ $product->price }}</span>
                                </div>
                                <div class="product_desc">
                                    <h4>Description</h4>
                                    <p>{{ $product->description }}</p>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Key Features</h4>
                                        <ul class="fa-ul">
                                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Looks absolutely
                                                stunning</li>
                                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Record-breaking
                                                power</li>
                                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Incredible camera
                                            </li>
                                            <li><i class="fa fa-check-square" aria-hidden="true"></i> Incredible camera
                                            </li>
                                            <li><i class="fa fa-check-square" aria-hidden="true"></i> IP68 protection
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product_nav" style="padding-top: 80px;float: right;">

                                            <ul class="fa-ul">
                                                <a href="{{ route('product-compare',$product->id) }}">
                                                    <li class="prev" style="width: 43px; margin-right: 7px;"><img src="{{ asset('/img/icon/compare-icon.png')}}" /></li><b>Compare<b>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->
        <!--product info start-->
        <div class="product_d_info mb-57">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#spec" role="tab" aria-controls="spec"
                                            aria-selected="false">specification</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#desc" role="tab" aria-controls="desc"
                                            aria-selected="false">Description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#return" role="tab" aria-controls="return"
                                            aria-selected="false">Return Into</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="spec" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    @foreach ($product_features as $feature)
                                                    <tr>
                                                        <td class="first_child">{{$feature->featureName}}</td>
                                                        <td>{{$feature->featureDescription}}</td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="desc" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="#" role="tabpanel">
                                    <div class="reviews_wrapper">
                                        <h2>1 review for Samsung Galaxy S6 Edge</h2>
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="assets/img/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="star_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p><strong>admin </strong>- March 03, 2021</p>
                                                    <span>csstheme</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                        </div>
                                        <div class="product_ratting mb-10">
                                            <h3>Your rating</h3>
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="reviews_wrapper">
                                        <h2>1 review for Samsung Galaxy S6 Edge</h2>
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="assets/img/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="star_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p><strong>admin </strong>- March 03, 2021</p>
                                                    <span>cssthemes</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                        </div>
                                        <div class="product_ratting mb-10">
                                            <h3>Your rating</h3>
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product info end-->

        <!-- featured product area start-->
        <section class="product_area upsell_products mb-60">
            <div class="container">

                <div class="row" style="background-image: url(assets/img/bg/banner0.jpg);height:320px;">
                    <div class="col-12">
                        <div class="section_title psec_title">

                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="baner_content">
                                    <br>
                                    <center>
                                        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                                        <p>
                                            SIGN UP NOW AND GET 75% OFF
                                        </p>
                                        <a href="shop.html">Shop Now </a>
                                    </center>
                                </div>
                                <br>
                            </div>
                            <div class="col-3">
                                <div>
                                    <br>
                                    <center>
                                        <img src="assets/img/bg/bannermobile.jpg" alt=""
                                            style=" margin-top:-170px;margin-left: 30px;" class="bannerimg">
                                    </center>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
    </div>
    </section>
    <!-- featured product area end-->

    @include('layouts.footer')
    </div>

    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}" defer></script>
    <!--popper min js-->
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <!--bootstrap min js-->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <!--owl carousel min js-->
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <!--slick min js-->
    <script src="{{ asset('js/slick.min.js') }}" defer></script>
    <!--magnific popup min js-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <!--counterup min js-->
    <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
    <!--jquery countdown min js-->
    <script src="{{ asset('js/jquery.countdown.js') }}" defer></script>
    <!--jquery ui min js-->
    <script src="{{ asset('js/jquery.ui.js') }}" defer></script>
    <!--jquery elevatezoom min js-->
    <script src="{{ asset('js/jquery.elevatezoom.js') }}" defer></script>
    <!--isotope packaged min js-->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
    <!--slinky menu js-->
    <script src="{{ asset('js/slinky.menu.js') }}" defer></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins.js') }}" defer></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}" defer></script>



</body>

<!-- Mirrored from demo.hasthemes.com/clima/clima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 08:02:26 GMT -->

</html>
