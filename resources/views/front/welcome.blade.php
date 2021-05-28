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
        @include('layouts.slider')
        <br>
        <!--product area start-->
        <div class="product_area  mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="product_header">

                            <div class="product_tab_btn">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#all" role="tab" aria-controls="all"
                                            aria-selected="true">
                                            All
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#mobiles" role="tab" aria-controls="mobiles"
                                            aria-selected="false">
                                            Mobiles
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#electronics" role="tab" aria-controls="electronics"
                                            aria-selected="false">
                                            Electronics
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#cars" role="tab" aria-controls="cars"
                                            aria-selected="false">
                                            Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#laptops" role="tab" aria-controls="laptops"
                                            aria-selected="false">
                                            Laptops
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        @foreach ($products as $product)
                                            <div class="col-lg-3">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <div class="label_product">
                                                            </div>
                                                            {{-- <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add tob cart"><i
                                                                                class="icon-bag icons"></i></a></li>
                                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                                class="icon-heart icons"></i></a></li>
                                                                    <li class="compare"><a href="#"
                                                                            title="Add to Compare"><i
                                                                                class="icon-shuffle icons"></i></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            data-toggle="modal" data-target="#modal_box"
                                                                            title="quick view"> <i
                                                                                class="icon-eye icons"></i></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="old_price">{{ $product->price }}</span>
                                                                <span
                                                                    class="current_price">{{ $product->price }}</span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="mobiles" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        @foreach ($mobiles as $product)
                                            <div class="col-lg-3">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <div class="label_product">

                                                            </div>
                                                            {{-- <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add tob cart"><i
                                                                                class="icon-bag icons"></i></a></li>
                                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                                class="icon-heart icons"></i></a></li>
                                                                    <li class="compare"><a href="#"
                                                                            title="Add to Compare"><i
                                                                                class="icon-shuffle icons"></i></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            data-toggle="modal" data-target="#modal_box"
                                                                            title="quick view"> <i
                                                                                class="icon-eye icons"></i></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="old_price"></span>
                                                                <span
                                                                    class="current_price">{{ $product->price }}</span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/infinix2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/infinix.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-20%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$47.00</span>
                                                    <span class="current_price">$37.00</span>
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
                               </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="electronics" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        @foreach ($electronics as $product)
                                            <div class="col-lg-3">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <div class="label_product">

                                                            </div>
                                                            {{-- <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add tob cart"><i
                                                                                class="icon-bag icons"></i></a></li>
                                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                                class="icon-heart icons"></i></a></li>
                                                                    <li class="compare"><a href="#"
                                                                            title="Add to Compare"><i
                                                                                class="icon-shuffle icons"></i></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            data-toggle="modal" data-target="#modal_box"
                                                                            title="quick view"> <i
                                                                                class="icon-eye icons"></i></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="old_price"></span>
                                                                <span
                                                                    class="current_price">{{ $product->price }}</span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/infinix2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/infinix.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-20%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$47.00</span>
                                                    <span class="current_price">$37.00</span>
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
                               </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="cars" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        @foreach ($cars as $product)
                                            <div class="col-lg-3">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <div class="label_product">

                                                            </div>
                                                            {{-- <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add tob cart"><i
                                                                                class="icon-bag icons"></i></a></li>
                                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                                class="icon-heart icons"></i></a></li>
                                                                    <li class="compare"><a href="#"
                                                                            title="Add to Compare"><i
                                                                                class="icon-shuffle icons"></i></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            data-toggle="modal" data-target="#modal_box"
                                                                            title="quick view"> <i
                                                                                class="icon-eye icons"></i></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="old_price"></span>
                                                                <span
                                                                    class="current_price">{{ $product->price }}</span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/infinix2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/infinix.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-20%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$47.00</span>
                                                    <span class="current_price">$37.00</span>
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
                               </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="laptops" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        @foreach ($laptops as $product)
                                            <div class="col-lg-3">
                                                <article class="single_product">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a class="primary_img"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                                    alt=""></a>
                                                            <div class="label_product">

                                                            </div>
                                                            {{-- <div class="action_links">
                                                                <ul>
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add tob cart"><i
                                                                                class="icon-bag icons"></i></a></li>
                                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                                class="icon-heart icons"></i></a></li>
                                                                    <li class="compare"><a href="#"
                                                                            title="Add to Compare"><i
                                                                                class="icon-shuffle icons"></i></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            data-toggle="modal" data-target="#modal_box"
                                                                            title="quick view"> <i
                                                                                class="icon-eye icons"></i></a></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                        <figcaption class="product_content">
                                                            <h4 class="product_name"><a
                                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="old_price"></span>
                                                                <span
                                                                    class="current_price">{{ $product->price }}</span>
                                                            </div>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                    <li><a href="#"><i class="ion-android-star"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/infinix2.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/infinix.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-20%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$47.00</span>
                                                    <span class="current_price">$37.00</span>
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
                               </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="makeup" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                        <div class="col-lg-3">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                src="{{ asset('img/product/product1.jpg') }}"
                                                                alt=""></a>
                                                        <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                                src="{{ asset('img/product/product2.jpg') }}"
                                                                alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">-20%</span>
                                                        </div>
                                                        {{-- <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add tob cart"><i
                                                                            class="icon-bag icons"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html"
                                                                        title="Add to Wishlist"><i
                                                                            class="icon-heart icons"></i></a></li>
                                                                <li class="compare"><a href="#"
                                                                        title="Add to Compare"><i
                                                                            class="icon-shuffle icons"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="quick view"> <i
                                                                            class="icon-eye icons"></i></a></li>
                                                            </ul>
                                                        </div> --}}
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="{{ route('product-detail',$product->id) }}">{{ $product->name}}</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">$35.00</span>
                                                            <span class="current_price">$28.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-android-star"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="skin" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="health" role="tabpanel">
                                <div class="row">
                                    <div class="product_carousel product_column4 owl-carousel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="widget_list widget_categories">
                            <div class="widget_title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="fa-ul">
                                @foreach ($cats as $cat)
                                <li style="margin-bottom: 15px;"><span class="fa-li"><img
                                    src="{{ asset('images/product-icons/' . $cat->category_icon) }}"
                                    alt=""></span><a
                                    href="#">{{$cat->category_name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget_list widget_categories col-md-9">
                            <div class="widget_title">
                                <h3>Lastest Products</h3>
                            </div>
                            <div class="row">
                                @foreach ($latestproducts as $item)
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single_blog">
                                            <figure>
                                                <div class="blog_thumb">
                                                    <a href="{{ route('product-detail',$product->id) }}"><img
                                                            src="{{ asset('images/product-imgs/' . $item->product_img) }}"
                                                            alt=""></a>
                                                </div>
                                                <figcaption class="blog_content">
                                                    <h4 class="post_title"><a href="#"></a></h4>
                                                    <p>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->

        <!-- featured product area start-->
        <section class="product_area mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="section_title psec_title">
                            <h2>FEATURED PRODUCTS </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product_carousel product_column4 owl-carousel col-9">
                        @foreach ($featured_products as $product)
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"><img
                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                    alt=""></a>
                                            <a class="secondary_img" href="{{ route('product-detail',$product->id) }}"><img
                                                    src="{{ asset('images/product-imgs/' . $product->product_img) }}"
                                                    alt=""></a>
                                            <div class="label_product">

                                            </div>
                                            {{-- <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add tob cart"><i
                                                                class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            title="Add to Wishlist"><i class="icon-heart icons"></i></a>
                                                    </li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"> <i
                                                                class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a
                                                href="{{ route('product-detail',$product->id) }}">{{ $product->name }}</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">{{ $product->price }}</span>
                                                <span class="current_price">{{ $product->price }}</span>
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
                <br>
                <div class="row">
                    <div class="col-9">
                        <div class="section_title psec_title">

                            <div class="shopnow">
                                <center>
                                    <a href="shop.html">Shop Now </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <div style="clear:both">
        </div>
        <!-- featured product area end-->

        <!-- featured product area start-->
        <section class="product_area upsell_products mb-60">
            <div class="container">

                <div class="row" style="background-image: url({{ asset('img/bg/banner0.jpg') }});height:400px;">
                    <div class="col-12">
                        <div class="section_title psec_title">

                        </div>

                        <div class="row">
                            <div class="col-6">
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
                            <div class="col-6">
                                <div class="baner_content">
                                    <br>
                                    <center>
                                        <img src="{{ asset('img/bg/bannermobile.jpg') }}" alt="">

                                    </center>
                                </div>
                                <br>
                            </div>
                        </div>
                        <img src="{{ asset('img/bg/bannermobil.jpg') }}" alt="">
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
</html>
