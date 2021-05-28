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
        {{-- Main content area --}}

        <!--product search area start-->
        <div class="product_details mb-60" style="border-top: 4px solid #d2691e;">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="section_title psec_title">

                            <h2>{{$heading}}</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            @foreach ($all_products as $product)
                                <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href=""><img
                                                        src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                        alt=""></a>
                                                <a class="secondary_img" href=""><img
                                                        src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                        alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-20%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add tob cart"><i class="icon-bag icons"></i></a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i
                                                                    class="icon-heart icons"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-shuffle icons"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal"
                                                                data-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="">{{$product->name}}</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$35.00</span>
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach




                        </div>
                    </div>
                    <!--product search area end-->
                </div>


                <br>
                <div style="clear:both">
                </div>
                <!-- featured product area end-->

                {{-- End Content Area --}}
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
                                                <img src="{{ asset('img/bg/bannermobile.jpg') }}" alt=""
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
