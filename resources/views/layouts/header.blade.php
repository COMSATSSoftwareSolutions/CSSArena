
    <!--header area start-->
<!--offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="header_contact_info">
                        <ul>
                            <li><a href="tel:0(1234)567890"><i class="icon-call-in"></i> 0(1234)567890</a></li>
                           <li><a href="mailto:http://css-arena.com"><i class="icon-envelope"></i> demo@css-arena.com</a></li>

                        </ul>
                    </div>


                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>

                            </li>
                         <li class="menu-item-has-children">
                                <a href="about.html">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>

                           </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<header>
    <div class="main_header">

        <div class="header_middle sticky-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-8">
                        <!--main menu start-->
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    {{-- <li><a href="{{ route('Index') }}">Home</a></li> --}}
                                    <li><a href="#"> About us</a></li>
                                     <li><a href="#"> Become Partner</a></li>
                                      <li><a href="#"> In Stock Now</a></li>
                                       <li><a href="#"> Support</a></li>
                                    <li><a href="#"> Contact Us</a></li>

                                       </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                    </div>
                      <div class="col-lg-4 col-sm-hidden" >
                        <div class="header_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                    </div>
{{-- @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
<div class="main_header_bottom">
<header>
                    <div class="row">
                    <div class="col-md-4" >
                        <div class="logo">
                            <a href="{{ route('Index') }}"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                   <div class="col-md-8">
 <div class="input-group">
            <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
                <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
            </span>
        </div>
               <br> <br>

            </div>

    </div>
</header>
<!--header area end-->


</div>
