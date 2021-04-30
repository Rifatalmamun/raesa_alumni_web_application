<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from echotheme.com/educati/index-university.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 17:14:24 GMT -->
    <head>
        <meta charset="UTF-8" />
        <!-- Title-->
        <title>Alumni</title>
        <!-- SEO Meta-->
        <meta name="description" content="Alumni" />
        <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme" />
        <meta name="author" content="Alumni" />
        <!-- viewport scale-->
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
        <!-- Favicon and Apple Icons-->
        <link rel="icon" type="image/x-icon" href="{{asset('public/frontend/assets/img/favicon/favicon.ico')}}" />
        <link rel="shortcut icon" href="{{asset('public/frontend/assets/img/favicon/114x114.png')}}" />
        <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/assets/img/favicon/96x96.png')}}" />
        <!--Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500" />
        <!-- Icon fonts -->
        <script src="../../kit.fontawesome.com/690c596bf5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('public/frontend/assets/fonts/themify-icons/css/themify-icons.css')}}" />
        <!-- stylesheet-->
        <link rel="stylesheet" href="{{asset('public/frontend/assets/css/vendors.bundle.css')}}" />
        <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}" />

        	<!-- JS ALERT NOTIFICATION -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <header class="site-header bg-dark text-white-0_5">
            <div class="container">
                <div class="row align-items-center justify-content-between mx-0">
                    <ul class="list-inline d-none d-lg-block mb-0">
                        <li class="list-inline-item mr-3">
                            <div class="d-flex align-items-center"><i class="ti-email mr-2"></i> <a href="#">testmail@gmail.com</a></div>
                        </li>
                        <li class="list-inline-item mr-3">
                            <div class="d-flex align-items-center"><i class="ti-headphone mr-2"></i> <a href="#">+88 01234 567890</a></div>
                        </li>
                    </ul>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
                            <a href="#"><i class="ti-facebook"></i></a>
                        </li>
                       
                        <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </li>
                    </ul>
                    <ul class="list-inline mb-0">
                        @guest
                            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1"><a href="{{route('login')}}">Login</a></li>
                            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1"><a href="{{route('register')}}">Register</a></li>
                        @else 
                            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1"><a href="{{route('home')}}">My Profile</a></li>
                            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">


                                    <a class="dropdown-item bg-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf 
                                    </form>



                            </li>
                        @endguest
                        
                    </ul>
                </div>
                <!-- END END row-->
            </div>
            <!-- END container-->
        </header>
        <!-- END site header-->
        <nav class="ec-nav sticky-top bg-white">
            <div class="container">
                <div class="navbar p-0 navbar-expand-lg">
                    <div class="navbar-brand">
                        <a class="logo-default" href="index.html"><img alt="" src="assets/img/logo-black.png" /></a>
                    </div>
                    <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
                        <div class="hamburger hamburger--spin js-hamburger">
                            <div class="hamburger-box"><div class="hamburger-inner"></div></div>
                        </div>
                    </span>
                    <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
                        <ul class="nav navbar-nav ec-nav__navbar ml-auto">
                            
                            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                                <a class="nav-link" href="{{route('welcome')}}">Home</a>
                            </li>

                            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                              <a class="nav-link" href="{{route('about')}}">About Us</a>
                            </li>

                            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                                <a class="nav-link" href="{{URL::to('public/media/sample.pdf')}}" target="_blank">Committee</a>
                            </li> 

                            <li class="nav-item nav-item__has-megamenu">
                                <a class="nav-link" href="{{ route('batchmenu') }}">EX-Stdudent</a>
                            </li>

                            <li class="nav-item nav-item__has-megamenu">
                                <a class="nav-link" href="{{ route('notice') }}">Notice</a>
                            </li>

                            <li class="nav-item nav-item__has-megamenu">
                                <a class="nav-link" href="{{ route('event') }}">Event</a>
                            </li>
     
                        </ul>
                    </div>
                    {{-- <div class="nav-toolbar">
                        <ul class="navbar-nav ec-nav__navbar">
                            <li class="nav-item nav-item__has-dropdown">
                                <a class="nav-link dropdown-toggle no-caret" href="#" data-toggle="dropdown"><i class="ti-shopping-cart"></i></a>
                                <ul class="dropdown-menu dropdown-cart" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-cart__item">
                                        <div class="media">
                                            <img class="dropdown-cart__img" src="assets/img/shop/products/2.jpg" alt="" />
                                            <div class="media-body pl-3"><a href="#" class="h6">Quick intro to Python</a> <span class="text-primary">$199.00</span></div>
                                        </div>
                                        <a href="#" class="dropdown-cart__item-remove"><i class="ti-close"></i></a>
                                    </li>
                                    <li class="dropdown-cart__item">
                                        <div class="media">
                                            <img class="dropdown-cart__img" src="assets/img/shop/products/4.jpg" alt="" />
                                            <div class="media-body pl-3"><a href="#" class="h6">Gentel intro to C++</a> <span class="text-primary">$45.00</span></div>
                                        </div>
                                        <a href="#" class="dropdown-cart__item-remove"><i class="ti-close"></i></a>
                                    </li>
                                    <li class="dropdown-cart__item">
                                        <div class="media">
                                            <img class="dropdown-cart__img" src="assets/img/shop/products/3.jpg" alt="" />
                                            <div class="media-body pl-3"><a href="#" class="h6">Programming 101</a> <span class="text-primary">$79.00</span></div>
                                        </div>
                                        <a href="#" class="dropdown-cart__item-remove"><i class="ti-close"></i></a>
                                    </li>
                                    <li class="px-2 py-4 text-center">Subtotal: <span class="text-primary font-weight-semiBold">$275.00</span></li>
                                    <li class="px-2 pb-4 text-center"><button class="btn btn-outline-primary mx-1">View Cart</button> <button class="btn btn-primary mx-1">Checkout</button></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link site-search-toggler" href="#"><i class="ti-search"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <!-- END container-->
        </nav>
        <!-- END ec-nav -->
        <div class="site-search">
            <div class="site-search__close bg-black-0_8"></div>
            <form class="form-site-search" action="#" method="POST">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control py-3 border-white" required="" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END site-search-->



        @yield('content') 






        <footer class="site-footer">
            <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <h5 style="color: #fff;">RAESA</h5>
                            <div class="margin-y-40"><p>Nunc placerat mi id nisi interdm they mtolis. Praesient is haretra justo ught scel erisque placer.</p></div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 mt-5">
                            <h4 class="h5 text-white">Contact Us</h4>
                            <div class="width-3rem bg-primary height-3 mt-3"></div>
                            <ul class="list-unstyled marginTop-40">
                                <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="#">+88 01234 567890</a></li>
                                <li class="mb-3"><i class="ti-email mr-3"></i><a href="#">testmail@gmail.com</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6 mt-5">
                            <h4 class="h5 text-white">Quick links</h4>
                            <div class="width-3rem bg-primary height-3 mt-3"></div>
                            <ul class="list-unstyled marginTop-40">
                                <li class="mb-2"><a href="{{route('welcome')}}">Home</a></li>
                                <li class="mb-2"><a href="#">About Us</a></li>
                                <li class="mb-2"><a href="#">Contact</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <h4 class="h5 text-white">Alumni-2023</h4>
                            <div class="width-3rem bg-primary height-3 mt-3"></div>
                            <div class="marginTop-40">
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- END row-->
                </div>
                <!-- END container-->
            </div>
            <!-- END footer-top-->
            <div class="footer-bottom bg-black-0_9 py-5 text-center">
                <div class="container">
                    <p class="text-white-0_5 mb-0">&copy; RAESA-2021. All rights reserved.</p>
                </div>
            </div>
            <!-- END footer-bottom-->
        </footer>





        <!-- END site-footer -->
        <div class="scroll-top"><i class="ti-angle-up"></i></div>


        <script src="{{asset('public/frontend/assets/js/vendors.bundle.js')}}"></script>
        <script src="{{asset('public/frontend/assets/js/app.min.js')}}"></script>

    









	<!--Normal sweet alert nonification-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){ 
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
   </script>  


















    </body>
</html>
