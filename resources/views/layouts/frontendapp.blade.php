<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Stowaa - Ecommerce HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favourite_icon_1.png') }}') }}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/stroke-gap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/icofont.css') }}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick-theme.css') }}">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!-- jquery-ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">

    <!-- select option - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}">

    <!-- woocommercen - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/woocommerce.css') }}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">

        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->


        <!-- header_section - start
        ================================================== -->
        <header class="header_section header-style-no-collapse">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <ul class="header_select_options ul_li">
                                <li>
                                    <div class="select_option">
                                        <div class="flug_wrap">
                                            <img src="{{ asset('frontend/assets/images/flug/flug_uk.png') }}"
                                                alt="image_not_found">
                                        </div>
                                        <select>
                                            <option data-display="Select Option">Select Your Language</option>
                                            <option value="1" selected>English</option>
                                            <option value="2">Bangla</option>
                                            <option value="3" disabled>Arabic</option>
                                            <option value="4">Hebrew</option>
                                        </select>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col col-md-6">
                            <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <div class="brand_logo">
                                <a class="brand_link" href="index.html">
                                    <img src="{{ asset('frontend/assets/images/logo/logo_1x.png') }}"
                                        srcset="assets/images/logo/logo_2x.png')}} 2x" alt>
                                </a>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                            <form action="#">
                                <div class="advance_serach">
                                    <div class="select_option mb-0 clearfix">
                                        <select>
                                            <option data-display="All Categories">Select A Category</option>
                                            <option value="1">New Arrival Products</option>
                                            <option value="2">Most Popular Products</option>
                                            <option value="3">Deals of the day</option>
                                            <option value="4">Mobile Accessories</option>
                                            <option value="5">Computer Accessories</option>
                                            <option value="6">Consumer Electronics</option>
                                            <option value="7">Automobiles & Motorcycles</option>
                                        </select>
                                    </div>
                                    <div class="form_item">
                                        <input type="search" name="search" placeholder="Search Prudcts...">
                                        <button type="submit" class="search_btn"><i
                                                class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fal fa-bars"></i>
                            </button>
                            <button type="button" class="cart_btn">
                                <ul class="header_icons_group ul_li_right">
                                    <li>
                                        <a href="wishlist.html">
                                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px"
                                                height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1"
                                                stroke-linecap="square" stroke-linejoin="miter" fill="none"
                                                color="#2329D6">
                                                <title>Favourite</title>
                                                <path
                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                            </svg>
                                            <span class="wishlist_counter">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="cart_icon">
                                            <i class="icon icon-ShoppingCart"></i>
                                            <small class="cart_counter">3</small>
                                        </span>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-3">
                            <div class="allcategories_dropdown">
                                <button class="allcategories_btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#allcategories_collapse" aria-expanded="false"
                                    aria-controls="allcategories_collapse">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px"
                                        viewBox="0 0 24 24" aria-labelledby="statsIconTitle" stroke="#000"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                        color="#000">
                                        <title id="statsIconTitle">Stats</title>
                                        <path d="M6 7L15 7M6 12L18 12M6 17L12 17" />
                                    </svg>
                                    Browse categories
                                </button>
                                <div class="allcategories_collapse" id="allcategories_collapse">
                                    <div class="card card-body">
                                        <ul class="allcategories_list ul_li_block">
                                            <li><a href="shop_grid.html"><i class="icon icon-Starship"></i> New Arrival
                                                    Products</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-WorldWide"></i> Most
                                                    Popular Products</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Star"></i> Deals of the
                                                    day</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile
                                                    Accessories</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i>
                                                    Computer Accessories</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer
                                                    Electronics</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles &
                                                    Motorcycles</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Phone"></i> Mobile
                                                    Accessories</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-DesktopMonitor"></i>
                                                    Computer Accessories</a></li>
                                            <li><a href="shop_list.html"><i class="icon icon-Bulb"></i> Consumer
                                                    Electronics</a></li>
                                            <li><a href="shop_grid.html"><i class="icon icon-Car"></i> Automobiles &
                                                    Motorcycles</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-6">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                    <button type="button" class="offcanvas_close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                    <ul class="main_menu_list ul_li">
                                        <li><a class="nav-link" href="#">Home</a></li>
                                        <li><a class="nav-link" href="#">About us</a></li>
                                        <li><a class="nav-link" href="#">Shop</a></li>
                                        <li><a class="nav-link" href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="offcanvas_overlay"></div>
                        </div>

                        <div class="col col-md-3">
                            <ul class="header_icons_group ul_li_right">
                                <li>
                                    <a href="#">Jon Doe</a>
                                </li>

                                <li>
                                    <a href="account.html">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                            viewBox="0 0 24 24" stroke="#051d43" stroke-width="1"
                                            stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6">
                                            <title id="personIconTitle">Person</title>
                                            <path
                                                d="M4,20 C4,17 8,17 10,15 C11,14 8,14 8,9 C8,5.667 9.333,4 12,4 C14.667,4 16,5.667 16,9 C16,14 13,14 14,15 C16,17 20,17 20,20" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header_section - end
        ================================================== -->

        <!-- main body - start
        ================================================== -->
        <main>

            <!-- sidebar cart - start
            ================================================== -->
            <div class="sidebar-menu-wrapper">
                <div class="cart_sidebar">
                    <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
                    <ul class="cart_items_list ul_li_block mb_30 clearfix">
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/cart/cart_img_1.jpg') }})}}"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/cart/cart_img_2.jpg') }})}}"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                        <li>
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/cart/cart_img_3.jpg') }})}}"
                                    alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">Yellow Blouse</h4>
                                <span class="item_price">$30.00</span>
                            </div>
                            <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                        </li>
                    </ul>

                    <ul class="total_price ul_li_block mb_30 clearfix">
                        <li>
                            <span>Subtotal:</span>
                            <span>$90</span>
                        </li>
                        <li>
                            <span>Vat 5%:</span>
                            <span>$4.5</span>
                        </li>
                        <li>
                            <span>Discount 20%:</span>
                            <span>- $18.9</span>
                        </li>
                        <li>
                            <span>Total:</span>
                            <span>$75.6</span>
                        </li>
                    </ul>

                    <ul class="btns_group ul_li_block clearfix">
                        <li><a class="btn btn_primary" href="cart.html">View Cart</a></li>
                        <li><a class="btn btn_secondary" href="checkout.html">Checkout</a></li>
                    </ul>
                </div>

                <div class="cart_overlay"></div>
            </div>
            <!-- sidebar cart - end
            ================================================== -->


            <!-- product quick view modal - start
            ================================================== -->
            <div class="modal fade" id="quickview_popup" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Product Quick View</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="product_details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <div class="product_details_image p-0">
                                                <img src="{{ asset('frontend/assets/images/shop/product_img_12.png') }}"
                                                    alt>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="product_details_content">
                                                <h2 class="item_title">Macbook Pro</h2>
                                                <p>
                                                    It is a long established fact that a reader will be distracted eget
                                                    velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce
                                                    aliquam, purus eget sagittis vulputate
                                                </p>
                                                <div class="item_review">
                                                    <ul class="rating_star ul_li">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="review_value">3 Rating(s)</span>
                                                </div>
                                                <div class="item_price">
                                                    <span>$620.00</span>
                                                    <del>$720.00</del>
                                                </div>
                                                <hr>
                                                <div class="item_attribute">
                                                    <h3 class="title_text">Options <span
                                                            class="underline"></span></h3>
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col col-md-6">
                                                                <div class="select_option clearfix">
                                                                    <h4 class="input_title">Size *</h4>
                                                                    <select>
                                                                        <option data-display="- Please select -">Choose
                                                                            A Option</option>
                                                                        <option value="1">Some option</option>
                                                                        <option value="2">Another option</option>
                                                                        <option value="3" disabled>A disabled option
                                                                        </option>
                                                                        <option value="4">Potato</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col col-md-6">
                                                                <div class="select_option clearfix">
                                                                    <h4 class="input_title">Color *</h4>
                                                                    <select>
                                                                        <option data-display="- Please select -">Choose
                                                                            A Option</option>
                                                                        <option value="1">Some option</option>
                                                                        <option value="2">Another option</option>
                                                                        <option value="3" disabled>A disabled option
                                                                        </option>
                                                                        <option value="4">Potato</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="repuired_text">Repuired Fiields *</span>
                                                    </form>
                                                </div>

                                                <div class="quantity_wrap">
                                                    <form action="#">
                                                        <div class="quantity_input">
                                                            <button type="button" class="input_number_decrement">
                                                                <i class="fal fa-minus"></i>
                                                            </button>
                                                            <input class="input_number" type="text" value="1">
                                                            <button type="button" class="input_number_increment">
                                                                <i class="fal fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="total_price">
                                                        Total: $620,99
                                                    </div>
                                                </div>

                                                <ul class="default_btns_group ul_li">
                                                    <li><a class="addtocart_btn" href="#!">Add To Cart</a></li>
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="fas fa-heart"></i></a></li>
                                                </ul>

                                                <ul class="default_share_links ul_li">
                                                    <li>
                                                        <a class="facebook" href="#!">
                                                            <span><i class="fab fa-facebook-square"></i> Like</span>
                                                            <small>10K</small>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="twitter" href="#!">
                                                            <span><i class="fab fa-twitter-square"></i> Tweet</span>
                                                            <small>15K</small>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="google" href="#!">
                                                            <span><i class="fab fa-google-plus-square"></i>
                                                                Google+</span>
                                                            <small>20K</small>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="share" href="#!">
                                                            <span><i class="fas fa-plus-square"></i> Share</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product quick view modal - end
            ================================================== -->


            <!-- slider_section - start
            ================================================== -->
            <section class="slider_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="main_slider" data-slick='{"arrows": false}'>
                                <div class="slider_item set-bg-image"
                                    data-background="{{ asset('frontend/assets/images/slider/slide-2.jpg') }}">
                                    <div class="slider_content">
                                        <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing
                                        </h3>
                                        <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart
                                            blood <span>Pressure monitor</span></h4>
                                        <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021
                                        </p>
                                        <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                            <del>$430.00</del>
                                            <span class="sale_price">$350.00</span>
                                        </div>
                                        <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                            data-delay=".8s">Start Buying</a>
                                    </div>
                                </div>
                                <div class="slider_item set-bg-image"
                                    data-background="{{ asset('frontend/assets/images/slider/slide-3.jpg') }}">
                                    <div class="slider_content">
                                        <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing
                                        </h3>
                                        <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart
                                            blood <span>Pressure monitor</span></h4>
                                        <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021
                                        </p>
                                        <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                            <del>$430.00</del>
                                            <span class="sale_price">$350.00</span>
                                        </div>
                                        <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                            data-delay=".8s">Start Buying</a>
                                    </div>
                                </div>
                                <div class="slider_item set-bg-image"
                                    data-background="{{ asset('frontend/assets/images/slider/slide-1.jpg') }}">
                                    <div class="slider_content">
                                        <h3 class="small_title" data-animation="fadeInUp2" data-delay=".2s">Clothing
                                        </h3>
                                        <h4 class="big_title" data-animation="fadeInUp2" data-delay=".4s">Smart
                                            blood <span>Pressure monitor</span></h4>
                                        <p data-animation="fadeInUp2" data-delay=".6s">The best gadgets collection 2021
                                        </p>
                                        <div class="item_price" data-animation="fadeInUp2" data-delay=".6s">
                                            <del>$430.00</del>
                                            <span class="sale_price">$350.00</span>
                                        </div>
                                        <a class="btn btn_primary" href="shop_details.html" data-animation="fadeInUp2"
                                            data-delay=".8s">Start Buying</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider_section - end
            ================================================== -->

            <!-- policy_section - start
            ================================================== -->
            <section class="policy_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="policy-wrap">
                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Truck"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Free Shipping</h3>
                                        <p>
                                            Free shipping on all US order
                                        </p>
                                    </div>
                                </div>

                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Headset"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Support 24/ 7</h3>
                                        <p>
                                            Contact us 24 hours a day
                                        </p>
                                    </div>
                                </div>

                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Wallet"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">100% Money Back</h3>
                                        <p>
                                            You have 30 days to Return
                                        </p>
                                    </div>
                                </div>

                                <div class="policy_item">
                                    <div class="item_icon">
                                        <i class="icon icon-Starship"></i>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">90 Days Return</h3>
                                        <p>
                                            If goods have problems
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- policy_section - end
            ================================================== -->


            <!-- products-with-sidebar-section - start
            ================================================== -->
            <section class="products-with-sidebar-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-3">
                            <div class="best-selling-products">
                                <div class="sec-title-link">
                                    <h3>Best selling</h3>
                                    <div class="view-all"><a href="#">View all<i
                                                class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                                <div class="product-area clearfix">
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product_img_12.png') }}"
                                                alt>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Macbook Pro</a></h4>
                                            <p><a href="#">Apple MacBook Pro13.3″ Laptop with new Touch bar ID </a></p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product-img-21.png') }}"
                                                alt>
                                            <span class="theme-badge">Sale</span>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Apple Watch</a></h4>
                                            <p><a href="#">Apple Watch Series 7 case Pair any band with cool design</a>
                                            </p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product-img-22.png') }}"
                                                alt>
                                            <span class="theme-badge-2">12% off</span>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Mac Mini</a></h4>
                                            <p><a href="#">Apple MacBook Pro13.3″ Laptop with new Touch bar ID </a></p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                                <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>904.21
                                                        </bdi>
                                                    </span>
                                                </del>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product-img-23.png') }}"
                                                alt>
                                            <span class="theme-badge">Sale</span>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">iPad mini</a></h4>
                                            <p><a href="#">The ultimate iPad experience all over the world with coll
                                                    model </a></p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product-img-24.png') }}"
                                                alt>
                                            <span class="theme-badge-2">25% off</span>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Imac 29"</a></h4>
                                            <p><a href="#">Apple iMac 29″ Laptop with new Touch bar ID for you </a></p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                                <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>904.21
                                                        </bdi>
                                                    </span>
                                                </del>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="product-pic">
                                            <img src="{{ asset('frontend/assets/images/shop/product-img-25.png') }}"
                                                alt>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Favourite</title>
                                                                <path
                                                                    d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                stroke="#2329D6" stroke-width="1"
                                                                stroke-linecap="square" stroke-linejoin="miter"
                                                                fill="none" color="#2329D6">
                                                                <title>Shuffle</title>
                                                                <path
                                                                    d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                                <path
                                                                    d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                                <path d="M19 4L22 7L19 10" />
                                                                <path d="M19 13L22 16L19 19" />
                                                            </svg></a>
                                                    </li>
                                                    <li>
                                                        <a class="quickview_btn" data-bs-toggle="modal"
                                                            href="#quickview_popup" role="button" tabindex="0"><svg
                                                                width="48px" height="48px" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                                stroke-width="1" stroke-linecap="square"
                                                                stroke-linejoin="miter" fill="none" color="#2329D6">
                                                                <title>Visible (eye)</title>
                                                                <path
                                                                    d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                            </svg></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">iPhone 13</a></h4>
                                            <p><a href="#">A dramatically more powerful camera system a display</a></p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span
                                                                class="woocommerce-Price-currencySymbol">$</span>471.48
                                                        </bdi>
                                                    </span>
                                                </ins>
                                            </span>
                                            <div class="add-cart-area">
                                                <button class="add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="top_category_wrap">
                                <div class="sec-title-link">
                                    <h3>Top categories</h3>
                                </div>
                                <div class="top_category_carousel2" data-slick='{"dots": false}'>
                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_1.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">Men's Watches</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_2.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">iPad</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_3.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">iPhone</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_4.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">Headphone</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_5.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">Mac Mini</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_1.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">Men's Watches</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_2.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">CCTV Camera</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="slider_item">
                                        <div class="category_boxed">
                                            <a href="#!">
                                                <span class="item_image">
                                                    <img src="{{ asset('frontend/assets/images/categories/category_3.png') }}"
                                                        alt="image_not_found">
                                                </span>
                                                <span class="item_title">CCTV Camera</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel_nav carousel-nav-top-right">
                                    <button type="button" class="tc_left_arrow"><i
                                            class="fal fa-long-arrow-alt-left"></i></button>
                                    <button type="button" class="tc_right_arrow"><i
                                            class="fal fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-9">
                            <div class="product-sidebar">
                                <div class="widget latest_product_carousel">
                                    <div class="title_wrap">
                                        <h3 class="area_title">Latest Products</h3>
                                        <div class="carousel_nav">
                                            <button type="button" class="vs4i_left_arrow"><i
                                                    class="fal fa-angle-left"></i></button>
                                            <button type="button" class="vs4i_right_arrow"><i
                                                    class="fal fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="vertical_slider_4item" data-slick='{"dots": false}'>
                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_1.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_2.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_3.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_4.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_1.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_2.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_3.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider_item">
                                            <div class="small_product_layout">
                                                <a class="item_image" href="shop_details.html">
                                                    <img src="{{ asset('frontend/assets/images/latest_product/latest_product_4.png') }}"
                                                        alt="image_not_found">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="shop_details.html">Product Sample</a>
                                                    </h3>
                                                    <ul class="rating_star ul_li">
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="item_price">
                                                        <span>$690.99</span>
                                                        <del>$720.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget product-add">
                                    <div class="product-img">
                                        <img src="{{ asset('frontend/assets/images/shop/product_img_10.png') }}" alt>
                                    </div>
                                    <div class="details">
                                        <h4>iPad pro</h4>
                                        <p>iPad pro with M1 chipe</p>
                                        <a class="btn btn_primary" href="#">Start Buying</a>
                                    </div>
                                </div>
                                <div class="widget audio-widget">
                                    <h5>Audio <span>5</span></h5>
                                    <ul>
                                        <li><a href="#">MI headphone</a></li>
                                        <li><a href="#">Bluetooth AirPods</a></li>
                                        <li><a href="#">Music system</a></li>
                                        <li><a href="#">JBL bar 5.1</a></li>
                                        <li><a href="#">Edifier Computer Speaker</a></li>
                                        <li><a href="#">Macbook pro</a></li>
                                        <li><a href="#">Men's watch</a></li>
                                        <li><a href="#">Washing metchin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container  -->
            </section>
            <!-- products-with-sidebar-section - end
            ================================================== -->


            <!-- promotion_section - start
            ================================================== -->
            <section class="promotion_section">
                <div class="container">
                    <div class="row promotion_banner_wrap">
                        <div class="col col-lg-6">
                            <div class="promotion_banner">
                                <div class="item_image">
                                    <img src="{{ asset('frontend/assets/images/promotion/banner_img_1.png') }}" alt>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Protective sleeves <span>combo.</span></h3>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-6">
                            <div class="promotion_banner">
                                <div class="item_image">
                                    <img src="{{ asset('frontend/assets/images/promotion/banner_img_2.png') }}" alt>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Nutrillet blender <span>combo.</span></h3>
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                    </p>
                                    <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promotion_section - end
            ================================================== -->

            <!-- new_arrivals_section - start
            ================================================== -->
            <section class="new_arrivals_section section_space">
                <div class="container">
                    <div class="sec-title-link">
                        <h3>New Arrivals</h3>
                    </div>

                    <div class="row newarrivals_products">
                        <div class="col col-lg-5">
                            <div class="deals_product_layout1">
                                <div class="bg_area">
                                    <h3 class="item_title">Best <span>Product</span> Deals</h3>
                                    <p>
                                        Get a 20% Cashback when buying TWS Product From SoundPro Audio Technology.
                                    </p>
                                    <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-7">
                            <div class="new-arrivals-grids clearfix">
                                <div class="grid">
                                    <div class="product-pic">
                                        <img src="{{ asset('frontend/assets/images/shop/product-img-28.png') }}" alt>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Favourite</title>
                                                            <path
                                                                d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Shuffle</title>
                                                            <path
                                                                d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                            <path
                                                                d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                            <path d="M19 4L22 7L19 10" />
                                                            <path d="M19 13L22 16L19 19" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg width="48px" height="48px" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                            stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Visible (eye)</title>
                                                            <path
                                                                d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">iPhone 13 pro</a></h4>
                                        <p><a href="#">A dramatically more powerful camera system a display</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                                    </bdi>
                                                </span>
                                            </ins>
                                        </span>
                                        <div class="add-cart-area">
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="product-pic">
                                        <img src="{{ asset('frontend/assets/images/shop/product-img-26.png') }}" alt>
                                        <span class="theme-badge-2">20% off</span>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Favourite</title>
                                                            <path
                                                                d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Shuffle</title>
                                                            <path
                                                                d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                            <path
                                                                d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                            <path d="M19 4L22 7L19 10" />
                                                            <path d="M19 13L22 16L19 19" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg width="48px" height="48px" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                            stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Visible (eye)</title>
                                                            <path
                                                                d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Apple</a></h4>
                                        <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch bar ID </a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                                    </bdi>
                                                </span>
                                            </ins>
                                            <del aria-hidden="true">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                                    </bdi>
                                                </span>
                                            </del>
                                        </span>
                                        <div class="add-cart-area">
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="product-pic">
                                        <img src="{{ asset('frontend/assets/images/shop/product-img-27.png') }}" alt>
                                        <span class="theme-badge-2">15% off</span>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Favourite</title>
                                                            <path
                                                                d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Shuffle</title>
                                                            <path
                                                                d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                            <path
                                                                d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                            <path d="M19 4L22 7L19 10" />
                                                            <path d="M19 13L22 16L19 19" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg width="48px" height="48px" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                            stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Visible (eye)</title>
                                                            <path
                                                                d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Mac Mini</a></h4>
                                        <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch ID </a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                                    </bdi>
                                                </span>
                                            </ins>
                                            <del aria-hidden="true">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                                    </bdi>
                                                </span>
                                            </del>
                                        </span>
                                        <div class="add-cart-area">
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="product-pic">
                                        <img src="{{ asset('frontend/assets/images/shop/product_img_12.png') }}" alt>
                                        <span class="theme-badge">Sale</span>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Favourite</title>
                                                            <path
                                                                d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg"
                                                            width="48px" height="48px" viewBox="0 0 24 24"
                                                            stroke="#2329D6" stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Shuffle</title>
                                                            <path
                                                                d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7" />
                                                            <path
                                                                d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17" />
                                                            <path d="M19 4L22 7L19 10" />
                                                            <path d="M19 13L22 16L19 19" />
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="#"><svg width="48px" height="48px" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" stroke="#2329D6"
                                                            stroke-width="1" stroke-linecap="square"
                                                            stroke-linejoin="miter" fill="none" color="#2329D6">
                                                            <title>Visible (eye)</title>
                                                            <path
                                                                d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Apple</a></h4>
                                        <p><a href="#">Apple MacBook Pro13.3″ Laptop with Touch ID </a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>471.48
                                                    </bdi>
                                                </span>
                                            </ins>
                                            <del aria-hidden="true">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>904.21
                                                    </bdi>
                                                </span>
                                            </del>
                                        </span>
                                        <div class="add-cart-area">
                                            <button class="add-to-cart">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new_arrivals_section - end
            ================================================== -->

            <!-- brand_section - start
            ================================================== -->
            <div class="brand_section pb-0">
                <div class="container">
                    <div class="brand_carousel">
                        <div class="slider_item">
                            <a class="product_brand_logo" href="#!">
                                <img src="{{ asset('frontend/assets/images/brand/brand_1.png') }}"
                                    alt="image_not_found">
                                <img src="{{ asset('frontend/assets/images/brand/brand_1.png') }}"
                                    alt="image_not_found">
                            </a>
                        </div>
                        <div class="slider_item">
                            <a class="product_brand_logo" href="#!">
                                <img src="{{ asset('frontend/assets/images/brand/brand_2.png') }}"
                                    alt="image_not_found">
                                <img src="{{ asset('frontend/assets/images/brand/brand_2.png') }}"
                                    alt="image_not_found">
                            </a>
                        </div>
                        <div class="slider_item">
                            <a class="product_brand_logo" href="#!">
                                <img src="{{ asset('frontend/assets/images/brand/brand_3.png') }}"
                                    alt="image_not_found">
                                <img src="{{ asset('frontend/assets/images/brand/brand_3.png') }}"
                                    alt="image_not_found">
                            </a>
                        </div>
                        <div class="slider_item">
                            <a class="product_brand_logo" href="#!">
                                <img src="{{ asset('frontend/assets/images/brand/brand_4.png') }}"
                                    alt="image_not_found">
                                <img src="{{ asset('frontend/assets/images/brand/brand_4.png') }}"
                                    alt="image_not_found">
                            </a>
                        </div>
                        <div class="slider_item">
                            <a class="product_brand_logo" href="#!">
                                <img src="{{ asset('frontend/assets/images/brand/brand_5.png') }}"
                                    alt="image_not_found">
                                <img src="{{ asset('frontend/assets/images/brand/brand_5.png') }}"
                                    alt="image_not_found">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand_section - end
            ================================================== -->

            <!-- viewed_products_section - start
            ================================================== -->
            <section class="viewed_products_section section_space">
                <div class="container">

                    <div class="sec-title-link mb-0">
                        <h3>Recently Viewed Products</h3>
                    </div>

                    <div class="viewed_products_wrap arrows_topright">
                        <div class="viewed_products_carousel row" data-slick='{"dots": false}'>
                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_1.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Electronics</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_2.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">PC & Laptop</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_3.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Tables & Mobiles</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_4.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Accessories</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_5.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">TV & Audio</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_6.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Games & Consoles</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_1.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Electronics</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_2.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">PC & Laptop</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_3.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Tables & Mobiles</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_4.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Accessories</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="slider_item col">
                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_5.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">TV & Audio</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="viewed_product_item">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/viewed_products/viewed_product_img_6.png') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Games & Consoles</h3>
                                        <ul class="ul_li_block">
                                            <li><a href="#!">Computers</a></li>
                                            <li><a href="#!">Laptop</a></li>
                                            <li><a href="#!">Macbook</a></li>
                                            <li><a href="#!">Accessories</a></li>
                                            <li><a href="#!">More...</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="vpc_left_arrow"><i
                                    class="fal fa-long-arrow-alt-left"></i></button>
                            <button type="button" class="vpc_right_arrow"><i
                                    class="fal fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- viewed_products_section - end
            ================================================== -->

            <!-- newsletter_section - start
            ================================================== -->
            <section class="newsletter_section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                            <p>Get E-mail updates about our latest products and special offers.</p>
                        </div>
                        <div class="col col-lg-6">
                            <form action="#!">
                                <div class="newsletter_form">
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn_secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter_section - end
            ================================================== -->

        </main>
        <!-- main body - end
        ================================================== -->

        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="index.html">
                                        <img src="{{ asset('frontend/assets/images/logo/logo_1x.png') }}"
                                            srcset="assets/images/logo/logo_2x.png')}} 2x" alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Team</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 123 456 7890</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img src="{{ asset('frontend/assets/images/app_store.png') }}"
                                                alt="app_store"></a></li>
                                    <li><a href="#!"><img src="{{ asset('frontend/assets/images/play_store.png') }}"
                                                alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©2021 <a href="#!">stowaa</a>. All Rights Reserved.
                            </p>
                        </div>

                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="{{ asset('frontend/assets/images/payments_icon.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- fraimwork - jquery include -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- carousel - jquery plugins collection -->
    <script src="{{ asset('frontend/assets/js/jquery-plugins-collection.js') }}"></script>

    <!-- google map  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="{{ asset('frontend/assets/js/gmaps.min.js') }}"></script>

    <!-- custom - main-js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
