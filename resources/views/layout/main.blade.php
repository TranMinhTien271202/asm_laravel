<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.snstheme.com/html/simen/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 14:25:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Shop</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,700' rel='stylesheet' type='text/css'>
    <!-- Style Sheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/dist/font/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/css/responsive.html') }}">
    <link rel="stylesheet" href="{{ asset('/dist/js/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/js/owl-carousel/owl.theme.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="/dist/images/favicon.ico">
    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../../../code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="../../../code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../../../code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body id="bd"
    class=" cms-index-index3 header-style3 header-prd cms-index-index  products-grid1 cms-simen-home-page-v2 default cmspage">
    <div id="sns_wrapper">
        <div id="sns_header" class="wrap">
            <div id="sns_header_full">
                <!-- Header Top -->
                <div class="sns_header_top">
                    <div class="container">
                        <div class="sns_module" style="clear: both">
                            <div class="header-setting">
                                <div class="module-setting">

                                </div>
                            </div>
                            <div class="header-account">
                                <div class="myaccount">
                                    <div class="tongle">
                                        <i class="fa fa-user"></i>
                                        <span>My account</span>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="customer-ct content">
                                        <ul class="links">
                                            <a class="top-link-myaccount" title="My Account" href="#"><a
                                                    href="#" class="d-block">
                                                    @if (Auth::check())
                                                        <li class="first">
                                                            <a class="top-link-myaccount" title="My Account"
                                                                href="#">Xin Chào {{ auth::user()->email }}</a>
                                                        </li>
                                                        <li class=" last">
                                                            <a class="top-link-login" title="Log In"
                                                                href="{{ asset('auth.logout') }}">Đăng Xuất</a>
                                                        </li>
                                                    @else
                                                        <li class=" last">
                                                            <a class="top-link-login" title="Log In"
                                                                href="{{ route('auth.login') }}">Login
                                                            </a>
                                                        </li>
                                                    @endif
                                                </a>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu -->
                <div id="sns_menu">
                    <div class="container">
                        <div class="row">
                            <div id="sns_header_logo" class="col-md-2 col-sm-3 col-xs-12">
                                <h1 id="logo" class="responsv">
                                    <a href="index3.html" title="Magento Commerce">
                                        <img alt="" src="images/logo.png">
                                    </a>
                                </h1>

                            </div>
                            <div class="sns_mainmenu col-md-9 col-sm-8 col-xs-12">
                                <div id="sns_mainnav">
                                    <div id="sns_custommenu" class="visible-md visible-lg">
                                        <ul class="mainnav">
                                            <li class="level0 custom-item">
                                                <a class="menu-title-lv0 pd-menu116" href="/" target="_self">
                                                    <span class="title">Home</span>
                                                </a>
                                            </li>
                                            <li class="level0 nav-1 no-group first drop-submenu parent">
                                                <a class=" menu-title-lv0" href="/shop">
                                                    <span class="title">SHOP</span>
                                                </a>

                                            </li>
                                            <li class="level0 custom-item">
                                                <a class="menu-title-lv0" href="/contact">
                                                    <span class="title">
                                                        Contact
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="level0 custom-item">
                                                <a class="menu-title-lv0" href="/blog">
                                                    <span class="title">Blog</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="sns_menu_right">
                                    <div class="block_topsearch">
                                        <div class="top-cart">
                                            <div class="mycart mini-cart">
                                                <div class="block-minicart">
                                                    <div class="tongle">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <div class="summary">
                                                            <span class="amount">
                                                                <a href="#">
                                                                    <span>3</span>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="block-content content">
                                                        <div class="block-inner">
                                                            <ol id="cart-sidebar" class="mini-products-list">
                                                                <li class="item odd">
                                                                    <a class="product-image" title="Modular Modern"
                                                                        href="detail.html">
                                                                        <img alt=""
                                                                            src="images/products/1.jpg">
                                                                    </a>
                                                                    <div class="product-details">
                                                                        <a class="btn-remove"
                                                                            onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');"
                                                                            title="Remove This Item"
                                                                            href="#">Remove This Item</a>
                                                                        <a class="btn-edit" title="Edit item"
                                                                            href="#">Edit item</a>
                                                                        <p class="product-name">
                                                                            <a href="detail.html">Modular Modern</a>
                                                                        </p>
                                                                        <!-- <strong>1</strong>
                                                                            x -->
                                                                        <span class="price">$ 540.00</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item odd">
                                                                    <a class="product-image" title="Modular Modern"
                                                                        href="detail.html">
                                                                        <img alt=""
                                                                            src="images/products/22.jpg">
                                                                    </a>
                                                                    <div class="product-details">
                                                                        <a class="btn-remove"
                                                                            onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');"
                                                                            title="Remove This Item"
                                                                            href="#">Remove This Item</a>
                                                                        <a class="btn-edit" title="Edit item"
                                                                            href="#">Edit item</a>
                                                                        <p class="product-name">
                                                                            <a href="detail.html">Modular Modern</a>
                                                                        </p>
                                                                        <!-- <strong>1</strong>
                                                                            x -->
                                                                        <span class="price">$ 540.00</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item last even">
                                                                    <a class="product-image" title="Modular Modern"
                                                                        href="detail.html">
                                                                        <img alt=""
                                                                            src="images/products/3.jpg">
                                                                    </a>
                                                                    <div class="product-details">
                                                                        <a class="btn-remove"
                                                                            onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');"
                                                                            title="Remove This Item"
                                                                            href="#">Remove This Item</a>
                                                                        <a class="btn-edit" title="Edit item"
                                                                            href="detail.html">Edit item</a>
                                                                        <p class="product-name">
                                                                            <a href="#">Modular Modern</a>
                                                                        </p>
                                                                        <!--  <strong>1</strong>
                                                                            x -->
                                                                        <span class="price">$ 540.00</span>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                            <p class="cart-subtotal">
                                                                <span class="label">Total:</span>
                                                                <span class="price">$ 540.00</span>
                                                            </p>

                                                            <div class="actions">
                                                                <a class="button">
                                                                    <span>
                                                                        <span>Check out</span>
                                                                    </span>
                                                                </a>
                                                                <a class="button gfont go-to-cart" href="/cart">Go
                                                                    to cart</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="icon-search"></span>
                                        <div class="top-search">
                                            <div id="sns_serachbox_pro11739847651442478087" class="sns-serachbox-pro">
                                                <div class="sns-searbox-content">
                                                    <form id="search_mini_form3703138361442478087" method="get"
                                                        action="http://demo.snstheme.com/sns-simen/index.php/catalogsearch/result/">
                                                        <div class="form-search">
                                                            <input id="search3703138361442478087" class="input-text"
                                                                type="text" value="" name="q"
                                                                placeholder="Search here...." size="30"
                                                                autocomplete="off">
                                                            <button class="button form-button" title="Search"
                                                                type="submit">Search</button>
                                                            <div id="search_autocomplete3703138361442478087"
                                                                class="search-autocomplete" style="display: none;">
                                                            </div>
                                                        </div>
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
            </div>
        </div>
        @yield('content')
        <div id="sns_footer" class="footer_style vesion2 wrap">
            <div id="sns_footer_top" class="footer">
                <div class="container">
                    <div class="container_in">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bot-social">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="banner_home2">
                                            <div class="module">
                                                <div class="title">
                                                    <p>About <span>Simen</span></p>
                                                </div>
                                                <div class="content">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book.
                                                </div>
                                                <div class="module_ct">
                                                    <div class="sns-social">
                                                        <!-- <h6>Join in</h6> -->
                                                        <!-- <p>Lorem Ipsum is simply dummy text of the.</p> -->
                                                        <ul>
                                                            <li><a href="#" target="_self" title="SNS Theme"
                                                                    class="fa fa fa-facebook"></a></li>
                                                            <li><a href="#" target="_self" title="SNS Theme"
                                                                    class="fa fa-twitter"> </a></li>
                                                            <li><a href="#" target="_self" title="SNS Theme"
                                                                    class="fa fa-google"></a></li>
                                                            <li><a href="#" target="_self" title="SNS Theme"
                                                                    class="fa fa-pinterest"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12 col-xs-12 column0">
                                <div class="contact_us">
                                    <h6>Contact us</h6>
                                    <ul class="fa-ul">
                                        <li class="pd-right">
                                            <i class="fa-li fa fw fa-home"> </i>
                                            8888 South Avenue Street, New York
                                        </li>
                                        <li>
                                            <i class="fa-li fa fw fa-phone"> </i>
                                            <p>(12) 3 456 7896</p>
                                            <p>(12) 3 456 7895</p>
                                        </li>
                                        <li>
                                            <i class="fa-li fa fw fa-envelope"> </i>
                                            <p>
                                                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                            </p>
                                            <p>
                                                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column1">
                                <h6>Service</h6>
                                <ul>
                                    <li>
                                        <a href="#">rices & Currencies</a>
                                    </li>
                                    <li>
                                        <a href="#">Secure Payment</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery Times & Costs</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns & Exchanges</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ's</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column2">
                                <h6>account</h6>
                                <ul>
                                    <li>
                                        <a href="#">My account</a>
                                    </li>
                                    <li>
                                        <a href="#">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Order history</a>
                                    </li>
                                    <li>
                                        <a href="#">Specials</a>
                                    </li>
                                    <li>
                                        <a href="#">Gift vouchers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column3">
                                <h6>information</h6>
                                <ul>
                                    <li>
                                        <a href="#">My account</a>
                                    </li>
                                    <li>
                                        <a href="#">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Order history</a>
                                    </li>
                                    <li>
                                        <a href="#">Specials</a>
                                    </li>
                                    <li>
                                        <a href="#">Gift vouchers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-phone-12 col-xs-6 col-sm-3 col-md-3 column column4">
                                <div class="subcribe-footer">
                                    <div class="block_border block-subscribe">
                                        <div class="block_head">
                                            <h6>Newsletter</h6>
                                            <p>Register your email for news</p>
                                        </div>
                                        <form id="newsletter-validate-detail">
                                            <div class="block_content">
                                                <div class="input-box">
                                                    <div class="input_warp">
                                                        <input id="newsletter"
                                                            class="input-text required-entry validate-email"
                                                            type="text" title="Sign up for our newsletter"
                                                            placeholder="Your email here" name="email">
                                                    </div>
                                                    <div class="button_warp">
                                                        <button class="button gfont" title="Subcribe" type="submit">
                                                            <span>
                                                                <span>Subscribe</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sns_footer_bottom" class="footer">
                <div class="container">
                    <div class="row">
                        <div class="bottom-pd1 col-sm-6">
                            <div class="sns-copyright">
                                © 2015 Magento Demo Store. All Rights Reserved. Developer by
                                <a title="" data-original-title="Visit SNSTheme.Com!" data-toggle="tooltip"
                                    href="http://www.snstheme.com/">SNSTheme.Com</a>
                            </div>
                        </div>
                        <div class="bottom-pd2 col-sm-6">
                            <div class="payment">
                                <img src="images/sns_paymal.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AND FOOTER -->
    </div>
    <!-- Scripts -->
    <script src="{{ asset('/dist/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('/dist/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dist/js/less.min.js') }}"></script>
    <script src="{{ asset('/dist/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/dist/js/custom.js') }}"></script>
    <script src="{{ asset('/dist/js/sns-extend.js') }}"></script>
    <script src="{{ asset('/dist/js/list-grid.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        function initialize() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        

    </script>
    
</body>

<!-- Mirrored from demo.snstheme.com/html/simen/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 14:25:26 GMT -->

</html>
