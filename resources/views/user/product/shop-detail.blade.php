@extends('layout.main')
@section('content')
    <div id="sns_breadcrumbs" class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="sns_titlepage"></div>
                    <div id="sns_pathway" class="clearfix">
                        <div class="pathway-inner">
                            <span class="icon-pointer "></span>
                            <ul class="breadcrumbs">
                                <li class="home">
                                    <a title="Go to Home Page" href="#">
                                        <i class="fa fa-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="category3 last">
                                    <span>{{ $product->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND BREADCRUMBS -->

    <!-- CONTENT -->
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div class="product-view sns-product-detail">
                            <div class="product-essential clearfix">
                                <div class="row row-img">

                                    <div class="product-img-box col-md-4 col-sm-5">
                                        <div class="detail-img">
                                            <img src="{{ asset($product->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div id="product_shop" class="product-shop col-md-8 col-sm-7">
                                        <div class="item-inner product_list_style">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a title="Modular Modern"
                                                        href="index3-detail.html">{{ $product->name }}</a>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">{{ number_format($product->price) }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="desc std">
                                                    <h5>Mo Ta</h5>
                                                    <p>{{ $product->desc }}</p>
                                                </div>
                                                <form action="{{ route('giohang.addCart', $product) }}" method="post"
                                                    name="form">
                                                    @csrf
                                                    <div class="actions">
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}"
                                                            id="">
                                                        <label class="gfont" for="qty">Qty : </label>

                                                        <div class="qty-container">
                                                            <button class="qty-decrease"
                                                                onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;"
                                                                type="button"></button>
                                                            <input id="qty" class="input-text qty" type="text"
                                                                title="Qty" value="1" name="quantily">
                                                            <button class="qty-increase"
                                                                onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
                                                                type="button"></button>
                                                        </div>
                                                        <button class="btn-cart" type="submit">
                                                            Add to Cart
                                                        </button>

                                                    </div>
                                                </form>
                                                <div class="addthis_native_toolbox"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom row">
                <div class="2coloum-left">
                    <div id="sns_left" class="col-md-3">
                        <div class="bestsale">
                            <div class="title">
                                <h3>BEST SALE</h3>
                            </div>
                            <div class="content">
                                <div id="products_slider12" class="products-slider12 owl-carousel owl-theme"
                                    style="display: inline-block">
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/14.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/15.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/16.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/17.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/18.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/19.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/20.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" href="index3-detail.html"
                                                            title="Modular Modern">
                                                            <span class="img-main">
                                                                <img alt="" src="/dist/images/products/21.html">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a href="index3-detail.html" title="Modular Modern">
                                                                    Modular Modern </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <span class="price">
                                                                    <span class="price1">$ 540.00</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <a href=""><span>Add to Cart</span></a>
                                                                </button>
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

                        <div class="block block-banner banner5">
                            <a href="#" class="banner22">
                                <img src="images/blog-banner1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div id="sns_mainm" class="col-md-9">
                        <div id="sns_description" class="description">
                            <div class="sns_producttaps_wraps1">
                                <h3 class="detail-none">Description
                                    <i class="fa fa-align-justify"></i>
                                </h3>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tab" style="text-align: center">
                                    <li role="presentation" class="style-detail"><a href="#profile"
                                            aria-controls="profile">
                                            <h4>Danh gia</h4>
                                        </a>
                                    </li>
                                </ul>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="collateral-box">
                                        <div class="form-add">
                                            @if (session('thongbao'))
                                                {{ session('thongbao') }}
                                            @endif
                                            @foreach ($comment as $item)
                                                <div class="comment" style="margin: 30px">
                                                    <div class="avatar">
                                                        <img src="https://cdn.pixabay.com/photo/2014/03/24/13/49/avatar-294480_960_720.png" alt=""
                                                            width="30px">
                                                        <span style="font-size: 20px">{{ $item->name_user }}</span>
                                                        {{ $item->created_at }}
                                                        <div class="cmt" style="margin: 30px">
                                                            <div class="cmt">
                                                                {{ $item->comment }}
                                                            </div>
                                                        </div>
                                                        <div class="xao">
                                                            <a href="{{ route('binhluan.delete_cmt', $item->id) }}"
                                                                onclick="return confirm('bạn có chắc chắn muốn xóa k')"
                                                                style="color: red"><button>Xóa</button></a>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="date">

                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                            <form action="{{ route('binhluan.post_cmt', $product->id) }}" method="POST">
                                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                                <fieldset>
                                                    <ul class="form-list">
                                                        <h3>
                                                            Hãy để lại bình luận của bạn !
                                                        </h3>
                                                        <div class="form-group">
                                                            <textarea class="form-control noidung" id="message" placeholder="Your message" name="comment"></textarea>
                                                        </div>
                                                        <button class="btn btn-normal button">Submit</button>
                                                    </ul>
                                                </fieldset>
                                            </form>
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
@endsection
