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
                                    <a title="Go to Home Page" href="">
                                        <i class="fa fa-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="category3 last">
                                    <span>Funiture</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sns_content" class="wrap layout-lm">
        <div class="container">
            <div class="row">

                <!-- sns_left -->
                <div id="sns_left" class="col-md-3">
                    <div class="wrap-in">
                        <div class="block block-layered-nav block-layered-nav--no-filters">
                            <div class="block-title">
                                <strong>
                                    <span>Shop By</span>
                                </strong>
                            </div>
                            <div class="block-content toggle-content">
                                <dl id="narrow-by-list">
                                    <dt class="odd">Category</dt>
                                    <dd class="odd">
                                        <ol>
                                            @foreach ($category as $item)
                                                <li>
                                                    <a href="{{ route('users.search_cate', $item->id) }}">
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </dd>

                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol class="js-price">
                                            <li><input type="text" id="amount-1" readonly style="border:0; color:#666;"
                                                    value="1250"></li>
                                            <li><input type="text" id="amount-2" readonly style="border:0; color:#666;"
                                                    value="9999"></li>
                                            <li class="style3">FILLTER</li>
                                        </ol>
                                        <div id="slider-range"></div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block_cat">
                            <a class="banner5 banner22" href="#">
                                <img src="images/banner_right.jpg" alt="">
                            </a>
                        </div>


                        <div class="bestsale">
                            <div class="title">
                                <h3>RECOMMEND</h3>
                            </div>
                            <div class="content">
                                <div id="products_slider12" class="products-slider12 owl-carousel owl-theme"
                                    style="display: inline-block">
                                    <div class="item-row">

                                        <div class="item">
                                            <div class="item-inner">
                                                @foreach ($product as $item)
                                                    <div class="prd">
                                                        <div class="item-img clearfix">
                                                            <a class="product-image have-additional"
                                                                href="/detail/{{ $item->id }}" title="Modular Modern">
                                                                <span class="img-main">
                                                                    <img alt="" src="{{ asset($item->image) }}">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a href="/detail/{{ $item->id }}"
                                                                        >{{ $item->name }} </a>
                                                                </div>
                                                                <div class="item-price">
                                                                    <span class="price">
                                                                        <span class="price1">{{ $item->price }}</span>
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
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                @foreach ($product as $item)
                                                    <div class="prd">
                                                        <div class="item-img clearfix">
                                                            <a class="product-image have-additional"
                                                                href="/detail/{{ $item->id }}" title="Modular Modern">
                                                                <span class="img-main">
                                                                    <img alt="" src="{{ asset($item->image) }}">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a href="/detail/{{ $item->id }}"
                                                                        title="Modular Modern">{{ $item->name }} </a>
                                                                </div>
                                                                <div class="item-price">
                                                                    <span class="price">
                                                                        <span class="price1">{{ $item->price }}</span>
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
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="item">
                                        </div>

                                        <div class="item">
                                        </div>

                                        <div class="item">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- sns_left -->


                <div id="sns_main" class="col-md-9 col-main">
                    <div id="sns_mainmidle">
                        <div class="page-title category-title">
                            <h1>Women</h1>
                        </div>
                        <div class="category-cms-block"></div>
                        <p class="category-image banner5">
                            <a href="#">
                                <img src="images/banner-grid.jpg" alt="">
                            </a>
                        </p>

                        <div class="category-products">

                            <!-- toolbar clearfix -->

                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <div class="limiter">
                                        <label>Show</label>
                                        <div class="select-new">
                                            <div class="select-inner jqtransformdone">
                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 80px;">
                                                    <div>
                                                        <span style="width: 50px;"> 20 </span>
                                                        <a class="jqTransformSelectOpen" href="#"></a>
                                                    </div>
                                                    <ul style="width: 78px; display: none; visibility: visible;">
                                                        <li>
                                                            <a class="selected" href="#"> 20 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 28 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> 36 </a>
                                                        </li>
                                                    </ul>
                                                    <select class="select-limit-show jqTransformHidden"
                                                        onchange="setLocation(this.value)" style="">
                                                        <option selected="selected"
                                                            value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=20">
                                                            20 </option>
                                                        <option
                                                            value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=28">
                                                            28 </option>
                                                        <option
                                                            value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=36">
                                                            36 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <span>per page</span>
                                    </div>
                                    <div class="sort-by">
                                        <label>Sort by</label>
                                        <div class="select-new">
                                            <form action="{{ route('users.sortproduct') }}" method="get">
                                                <select name="select" id="sortByselect"
                                                    class="select-sort-by jqTransformHidden"
                                                    style="height:30px;width:100px;border: 1px solid#EEEEEE">
                                                    <option value="0">Sắp xếp</option>
                                                    <option value="1">sản phẩm mới nhất</option>
                                                    <option value="2">Giá từ cao đến thấp</option>
                                                    <option value="3">Giá từ thấp đến cao</option>
                                                </select>
                                                <button type="submit" class="btn">lọc</button>
                                            </form>
                                        </div>
                                        <!--  <a class="set-desc" title="Set Descending Direction" href="http://demo.snstheme.com/sns-simen/index.php/women.html?dir=desc&order=position"></a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix -->



                            <!-- sns-products-container -->
                            <div class="sns-products-container clearfix">
                                <div class="products-grid row style_grid">
                                    @foreach ($product as $item)
                                        <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional" title="Modular Modern"
                                                            href="/detail/{{ $item->id }}">
                                                            <span class="img-main">
                                                                <img src="{{ asset($item->image) }}" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Modular Modern"
                                                                    href="/detail/{{ $item->id }}">
                                                                    {{ $item->name }} </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">{{ number_format($item->price) }} VNĐ</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot action123">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" href="#"
                                                                        title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" href="#"
                                                                        title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                            href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- sns-products-container -->


                            <!-- toolbar clearfix  bottom-->

                            <div class="toolbar clearfix">
                                <div class="toolbar-inner">
                                    <div class="pager">
                                        <p class="amount">
                                            <span>1 to 20 </span>
                                            123 item (s)
                                        </p>
                                        <div class="pages">
                                            <strong>Pages:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" title="Next" href="#"> Next </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- toolbar clearfix bottom -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
