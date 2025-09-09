<header id="site-header" class="site-header__v1">
    <div class="topbar border-bottom d-none d-md-block">
        <div class="container-fluid px-2 px-md-5 px-xl-8d75">
            <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                <ul class="topbar__nav--left nav ml-md-n3">
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i
                                class="glph-icon flaticon-question mr-2"></i>Can we help you?</a></li>
                    <li class="nav-item"><a href="tel:+1246-345-0695" class="nav-link link-black-100"><i
                                class="glph-icon flaticon-phone mr-2"></i>+1 246-345-0695</a></li>
                </ul>
                <ul class="topbar__nav--right nav mr-md-n3">
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i
                                class="glph-icon flaticon-pin"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i
                                class="glph-icon flaticon-switch"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-black-100"><i
                                class="glph-icon flaticon-heart"></i></a></li>
                    @if(Auth::check())
                            <a href="/logout" class="mt-2">{{ Auth::user()->name }} </a>
                            @else
                            <li class="nav-item">
                                <a id="" href="/login"
                                    class="px-2 nav-link link-black-100" >
                                    <i class="glph-icon flaticon-user"></i>
                                </a>

                            </li>
                    @endif
                    <li class="nav-item">

                        <a id="sidebarNavToggler1" href="javascript:;" role="button"
                            class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1"
                            aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                            data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1"
                            data-unfold-type="css-animation"
                            data-unfold-overlay='{
                                "className": "u-sidebar-bg-overlay",
                                "background": "rgba(0, 0, 0, .7)",
                                "animationSpeed": 500
                            }'
                            data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
                            data-unfold-duration="500">
                            <span
                                {{-- class="position-absolute bg-dark width-16 height-16 rounded-circle d-flex align-items-center justify-content-center text-white font-size-n9 right-0"></span> --}}
                            <i class="glph-icon flaticon-icon-126515"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="masthead border-bottom position-relative" style="margin-bottom: -1px;">
        <div class="container-fluid px-3 px-md-5 px-xl-8d75 py-2 py-md-0">
            <div class="d-flex align-items-center position-relative flex-wrap">
                <div class="offcanvas-toggler mr-4 mr-lg-8">
                    <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu"
                        aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false"
                        data-unfold-event="click" data-unfold-hide-on-scroll="false"
                        data-unfold-target="#sidebarContent2" data-unfold-type="css-animation"
                        data-unfold-overlay='{
                        "className": "u-sidebar-bg-overlay",
                        "background": "rgba(0, 0, 0, .7)",
                        "animationSpeed": 100
                    }'
                        data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                        data-unfold-duration="100">
                        <svg width="20px" height="18px">
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
                        </svg>
                    </a>
                </div>
                <div class="site-branding pr-md-4">
                    <a href="index.html" class="d-block mb-1">
                        <img src="{{ asset("assets/img/aqsapublications.jpeg") }}" alt="" class="" style="width: 125px">
                    </a>
                </div>
                <div class="site-navigation mr-auto d-none d-xl-block">
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a id="homeDropdownInvoker" href="/"
                                class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center"
                                aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
                                data-unfold-target="#homeDropdownMenu" data-unfold-type="css-animation"
                                data-unfold-duration="200" data-unfold-delay="50"
                                data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                data-unfold-animation-out="fadeOut">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="homeDropdownInvoker" href="/all-books"
                                class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center"
                                aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
                                data-unfold-target="#homeDropdownMenu" data-unfold-type="css-animation"
                                data-unfold-duration="200" data-unfold-delay="50"
                                data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                data-unfold-animation-out="fadeOut">
                                Books
                            </a>
                        </li>

                    </ul>
                </div>
                <ul class="d-md-none nav mr-md-n3 ml-auto">
                    @if(Auth::check())
                        {{ Auth::user()->name }}
                        @else
                        <li class="nav-item">

                            <a id="" href="/login"
                                class="px-2 nav-link link-black-100" >
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li>
                    @endif
                </ul>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 my-2 my-xl-0">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i
                                    class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                            </div>
                            <input
                                class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100"
                                type="search" placeholder="Search for Books by Keyword ..." aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0 sr-only"
                            type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>




<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight"
                        data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                        <form class="">

                            <div id="login" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                                            class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel" class="form-label"
                                                for="signinEmail">Username or email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4"
                                                name="email" id="signinEmail"
                                                placeholder="creativelayers088@gmail.com"
                                                aria-label="creativelayers088@gmail.com"
                                                aria-describedby="signinEmailLabel" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel" class="form-label"
                                                for="signinPassword">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4"
                                                name="password" id="signinPassword" placeholder=""
                                                aria-label="" aria-describedby="signinPasswordLabel" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5 align-items-center">

                                        <div class="js-form-message">
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="termsCheckbox" name="termsCheckbox" required>
                                                <label class="custom-control-label" for="termsCheckbox">
                                                    <span class="font-size-2 text-secondary-gray-700">
                                                        Remember me
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium"
                                            href="javascript:;" data-target="#forgotPassword"
                                            data-link-group="idForm" data-animation-in="fadeIn">Forgot
                                            Password?</a>
                                    </div>
                                    <div class="mb-4d75">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign
                                            In</button>
                                    </div>
                                    <div class="mb-2">
                                        <a href="javascript:;"
                                            class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium"
                                            data-target="#signup" data-link-group="idForm"
                                            data-animation-in="fadeIn">Create Account</a>
                                    </div>
                                </div>
                            </div>

                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                                            class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel1" class="form-label"
                                                for="signinEmail1">Email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4"
                                                name="email" id="signinEmail1"
                                                placeholder="creativelayers088@gmail.com"
                                                aria-label="creativelayers088@gmail.com"
                                                aria-describedby="signinEmailLabel1" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel1" class="form-label"
                                                for="signinPassword1">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4"
                                                name="password" id="signinPassword1" placeholder=""
                                                aria-label="" aria-describedby="signinPasswordLabel1" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signupConfirmPasswordLabel" class="form-label"
                                                for="signupConfirmPassword">Confirm Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4"
                                                name="confirmPassword" id="signupConfirmPassword" placeholder=""
                                                aria-label="" aria-describedby="signupConfirmPasswordLabel"
                                                required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit"
                                            class="btn btn-block py-3 rounded-0 btn-dark">Create Account</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Already have an account?</span>
                                        <a class="js-animation-link small" href="javascript:;"
                                            data-target="#login" data-link-group="idForm"
                                            data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div id="forgotPassword" style="display: none; opacity: 0;"
                                data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                                            class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel3" class="form-label"
                                                for="signinEmail3">Email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4"
                                                name="email" id="signinEmail3"
                                                placeholder="creativelayers088@gmail.com"
                                                aria-label="creativelayers088@gmail.com"
                                                aria-describedby="signinEmailLabel3" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit"
                                            class="btn btn-block py-3 rounded-0 btn-dark">Recover Password</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Remember your password?</span>
                                        <a class="js-animation-link small" href="javascript:;"
                                            data-target="#login" data-link-group="idForm"
                                            data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<aside id="sidebarContent1" class="u-sidebar u-sidebar__xl" aria-labelledby="sidebarNavToggler1">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent1"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1"
                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight"
                        data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-6 py-4">
                            <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                                    class="flaticon-icon-126515 mr-3 font-size-5"></i>Your shopping bag </h2>
                        </header>
                        @foreach ( $carts as $cart)
                            <div class="px-4 py-5 px-md-6 border-bottom">
                                <div class="media">
                                    <a href="#" class="d-block"><img src="{{ url('storage') }}/{{ $cart->book->thumbnail }}"
                                            class="img-fluid" alt="image-description"></a>
                                    <div class="media-body ml-4d875">
                                        <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a
                                                href="#">Hard Cover</a></div>
                                        <h2
                                            class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                                            <a href="#" class="text-dark">{{ $cart->book->name }}</a>
                                        </h2>
                                        <div class="font-size-2 mb-1 text-truncate"><a href="#"
                                                class="text-gray-700">Robert Iger</a></div>
                                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                            <span class="woocommerce-Price-amount amount">{{ $cart->book_qty }} x <span
                                                    class="woocommerce-Price-currencySymbol">RS:</span>125.30</span>
                                        </div>

                                        <div class="text-end" style="text-align: end">
                                            <a href="#" class="remove" aria-label="Remove this item">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.011,13.899 L13.899,15.012 L7.500,8.613 L1.101,15.012 L-0.012,13.899 L6.387,7.500 L-0.012,1.101 L1.101,-0.012 L7.500,6.387 L13.899,-0.012 L15.011,1.101 L8.613,7.500 L15.011,13.899 Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-3 ml-3">
                                        <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div
                            class="px-4 py-5 px-md-6 d-flex justify-content-between align-items-center font-size-3">
                            <h4 class="mb-0 font-size-3">Subtotal:</h4>
                            <div class="font-weight-medium">$750.00</div>
                        </div>
                        <div class="px-4 mb-8 px-md-6">
                            <a href="{{ url('cart-items') }}"
                                class="btn btn-block py-4 rounded-0 btn-outline-dark mb-4">View Cart</a>
                            <a href="{{ url('checkout') }}"
                                class="btn btn-block py-4 rounded-0 btn-dark">Checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header
                            class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                            <h2 class="font-size-3 mb-0">SHOP BY CATEGORY</h2>

                            <div class="d-flex align-items-center">
                                <button type="button" class="close ml-auto" aria-controls="sidebarContent2"
                                    aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2"
                                    data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                    <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                </button>
                            </div>

                        </header>

                        <div class="border-bottom">
                            <div class="zeynep pt-4">
                                <ul>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="off-pages">Pages</a>
                                        <div id="off-pages" class="submenu">
                                            <div class="submenu-header" data-submenu-close="off-pages">
                                                <a href="#">Pages</a>
                                            </div>
                                            <ul>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-home">Home Pages</a>
                                                    <div id="off-home" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-home">
                                                            <a href="#">Home Pages</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a href="index.html">Home v1</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v2.html">Home v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v3.html">Home v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v3.html">Home v3</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v4.html">Home v4</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v5.html">Home v5</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v6.html">Home v6</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v7.html">Home v7</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v8.html">Home v8</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v9.html">Home v9</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v10.html">Home v10</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v11.html">Home v11</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v12.html">Home v12</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v13.html">Home v13</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-single-product">Single
                                                        Product</a>
                                                    <div id="off-single-product" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="off-single-product">
                                                            <a href="#">Single Product</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Single
                                                                    Product v1</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v2.html">Single
                                                                    Product v2</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html">Single
                                                                    Product v3</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v4.html">Single
                                                                    Product v4</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v5.html">Single
                                                                    Product v5</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v6.html">Single
                                                                    Product v6</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v7.html">Single
                                                                    Product v7</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-shop-pages">Shop
                                                        Pages</a>
                                                    <div id="off-shop-pages" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="off-shop-pages">
                                                            <a href="#">Shop Pages</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/cart.html">Shop
                                                                    cart</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/checkout.html">Shop
                                                                    checkout</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/my-account.html">Shop
                                                                    My Account</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-received.html">Shop
                                                                    Order Received</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-tracking.html">Shop
                                                                    Order Tracking</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/store-location.html">Shop
                                                                    Store Location</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-shop-list">Shop List</a>
                                                    <div id="off-shop-list" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="off-shop-list">
                                                            <a href="#">Shop List</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html">Shop
                                                                    List v1</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v2.html">Shop
                                                                    List v2</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v3.html">Shop
                                                                    List v3</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v4.html">Shop
                                                                    List v4</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v5.html">Shop
                                                                    List v5</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v6.html">Shop
                                                                    List v6</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v7.html">Shop
                                                                    List v7</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v8.html">Shop
                                                                    List v8</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v9.html">Shop
                                                                    List v9</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-blog">Blog</a>
                                                    <div id="off-blog" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="off-blog">
                                                            <a href="#">Blog</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v1.html">Blog
                                                                    v1</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v2.html">Blog
                                                                    v2</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v3.html">Blog
                                                                    v3</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-single.html">Blog
                                                                    Single</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-others">Others</a>
                                                    <div id="off-others" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="off-others">
                                                            <a href="#">Others</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/404.html">404</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/about.html">About
                                                                    Us</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-list.html">Authors
                                                                    List</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html">Authors
                                                                    Single</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/coming-soon.html">Coming
                                                                    Soon</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/contact.html">Contact
                                                                    Us</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/faq.html">FAQ</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/pricing-table.html">Pricing
                                                                    Table</a>
                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/terms-conditions.html">Terms
                                                                    Conditions</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="px-5">
                                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/documentation/index.html"
                                                        class="btn btn-primary mb-3 mb-md-0 mb-xl-3 mt-4 font-size-2 btn-block">Documentation</a>
                                                </li>
                                                <li class="px-5 mb-4">
                                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/starter/index.html"
                                                        class="btn btn-secondary font-size-2 btn-block mb-2">Starter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="art-photo">Arts & Photography</a>
                                        <div id="art-photo" class="submenu">
                                            <div class="submenu-header" data-submenu-close="art-photo">
                                                <a href="#">Arts & Photography</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Architecture</a>
                                                </li>
                                                <li>
                                                    <a href="#">Business of Art</a>
                                                </li>
                                                <li>
                                                    <a href="#">Collections, Catalogs & Exhibitions</a>
                                                </li>
                                                <li>
                                                    <a href="#">Decorative Arts & Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">Drawing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fashion</a>
                                                </li>
                                                <li>
                                                    <a href="#">Graphic Design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="biography">Biographies & Memoirs</a>
                                        <div id="biography" class="submenu">
                                            <div class="submenu-header" data-submenu-close="biography">
                                                <a href="#">Biographies & Memoirs</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="children">Children's Books</a>
                                        <div id="children" class="submenu">
                                            <div class="submenu-header" data-submenu-close="children">
                                                <a href="#">Children's Books</a>
                                            </div>
                                            <ul>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="electronics">Electronics</a>
                                                    <div id="electronics" class="submenu js-scrollbar">
                                                        <div class="submenu-header"
                                                            data-submenu-close="electronics">
                                                            <a href="#">Electronics</a>
                                                        </div>
                                                        <ul class="">
                                                            <li>
                                                                <a href="#">Camera & Photo</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Home Audio</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tv & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Computers & Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Car & Vehicle Electronics</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Portable Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Headphones</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Accessories & Supplies</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Video Projectors</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Office Electronics</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Wearable Technology</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Service Plans</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">Books</a>
                                                </li>
                                                <li>
                                                    <a href="#">Video Games</a>
                                                </li>
                                                <li>
                                                    <a href="#">Computers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="computers">Computers & Technology</a>
                                        <div id="computers" class="submenu">
                                            <div class="submenu-header" data-submenu-close="computers">
                                                <a href="#">Computers & Technology</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="cookbook">Cookbooks, Food & Wine</a>
                                        <div id="cookbook" class="submenu">
                                            <div class="submenu-header" data-submenu-close="cookbook">
                                                <a href="#">Cookbooks, Food & Wine</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="sciencemath">Education & Teaching</a>
                                        <div id="sciencemath" class="submenu">
                                            <div class="submenu-header" data-submenu-close="sciencemath">
                                                <a href="#">Education & Teaching</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="health">Health, Fitness & Dieting</a>
                                        <div id="health" class="submenu">
                                            <div class="submenu-header" data-submenu-close="health">
                                                <a href="#">Health, Fitness & Dieting</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="history">History</a>
                                        <div id="history" class="submenu">
                                            <div class="submenu-header" data-submenu-close="history">
                                                <a href="#">History</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="romance">Romance</a>
                                        <div id="romance" class="submenu">
                                            <div class="submenu-header" data-submenu-close="romance">
                                                <a href="#">Romance</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="sports">Sports & Outdoors</a>
                                        <div id="sports" class="submenu">
                                            <div class="submenu-header" data-submenu-close="sports">
                                                <a href="#">Sports & Outdoors</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="travel">Travel</a>
                                        <div id="travel" class="submenu">
                                            <div class="submenu-header" data-submenu-close="travel">
                                                <a href="#">Travel</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-4 px-md-5 pt-5 pb-4 border-bottom">
                            <h2 class="font-size-3 mb-3">HELP & SETTINGS </h2>
                            <ul class="list-group list-group-flush list-group-borderless">
                                <li class="list-group-item px-0 py-2 border-0"><a href="#"
                                        class="h-primary">Your Account</a></li>
                                <li class="list-group-item px-0 py-2 border-0"><a href="#"
                                        class="h-primary">Help</a></li>
                                <li class="list-group-item px-0 py-2 border-0"><a href="#"
                                        class="h-primary">Sign In</a></li>
                            </ul>
                        </div>
                        <div class="px-4 px-md-5 py-5">
                            <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                                <option selected>English (United States)</option>
                                <option value="1">English (UK)</option>
                                <option value="2">Arabic (Saudi Arabia)</option>
                                <option value="3">Deutsch</option>
                            </select>
                            <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                                <option selected>$ USD</option>
                                <option value="1">د.إ AED</option>
                                <option value="2">¥ CNY</option>
                                <option value="3">€ EUR</option>
                            </select>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-google btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-github btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>
