@extends('layout.header')
@section('content')
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div class="policy-page3">
                            <ul class="ca-menu">
                                <li class="col-md-3 col-sm-6">
                                    <a href="#">
                                        <span class="ca-icon"><i class="fa fa-truck"></i></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">Freshipping</h2>
                                            <h3 class="ca-sub">Miễn phí vận chuyển cho đơn hàng trên 50.000.000VNĐ</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-3 col-sm-6 rsbd-no">
                                    <a href="#">
                                        <span class="ca-icon" id="heart"><i class="fa fa-dollar"></i></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">money back</h2>
                                            <h3 class="ca-sub">Hoàn lại 80% số tiền khi trả sản phẩm</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <a href="#">
                                        <span class="ca-icon"><i class="fa fa-lock"></i></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">High Quality</h2>
                                            <h3 class="ca-sub">Luôn đảm bảo chất lượng tốt nhất</h3>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <a href="#">
                                        <span class="ca-icon"><i class="fa fa-support"></i></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">best support</h2>
                                            <h3 class="ca-sub">Hỗ trợ 24/7</h3>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div id="sns_producttaps1" class="sns_producttaps_wraps">
                            <h3 class="">PRODUCT</h3>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="products-grid row style_grid">
                                        {{-- product --}}
                                        @foreach ($product_list as $item)
                                            <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                                <div class="item-inner">
                                                    <div class="prd">
                                                        <div class="item-img clearfix">
                                                            {{-- <div class="ico-label">
                                                            <span class="ico-product ico-new">New</span>
                                                            <span class="ico-product ico-sale">Sale</span>
                                                        </div> --}}
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
                                                                                <span
                                                                                    class="price1">{{ number_format($item->price) }}</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <form action="">
                                                                    <input type="hidden" class="cart_product_id_{{$item->id}}" value="{{$item->id}}" id="">
                                                                    <input type="hidden" class="cart_quantily_id_{{$item->id}}" value="1" id="">
                                                                    <input type="hidden" class="cart_name_id_{{$item->id}}" value="{{$item->name}}" id="">
                                                                    <input type="hidden" class="cart_price_id_{{$item->id}}" value="{{$item->price}}" id="">
                                                                    <input type="hidden" class="cart_image_id_{{$item->id}}" value="{{$item->image}}" id="">
                                                                    <button type="submit" data-id="{{$item->id}}" class="btn-cart" name="bnt-cart"
                                                                        title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                        <span>Add to Cart</span>
                                                                    </button>
                                                                </form>
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
                                <center>{{ $product_list->links() }}</center>
                                <h3 class="bt-more">
                                    <span>Xem Tat Ca</span>
                                </h3><br>
                            </div>

                            <!--  <div class="clearfix"></div> -->


                            <div class="sns-latestblog">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="block-title">
                                            <h3>LATEST POSTS</h3>
                                        </div>
                                    </div>
                                    <div id="latestblog132" class="latestblog-content owl-carousel owl-theme"
                                        style="display: inline-block">
                                        <div class="item">
                                            <div class="banner5">
                                                <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                    <img src="/dist/images/blog/blog5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">08</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Chair
                                                            furnitured</a></p>
                                                    <p class="style2">Lorem Ipsum has been the industry's </p>
                                                    <p class="style3">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy
                                                        text ...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="banner5">
                                                <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                    <img src="/dist/images/blog/blog6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">06</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Leather
                                                            Sofas</a></p>
                                                    <p class="style2">When an unknown printer took galley</p>
                                                    <p class="style3">When an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has survived not only
                                                        ...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="banner5">
                                                <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                    <img src="/dist/images/blog/blog7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">05</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Chair
                                                            furnitured</a></p>
                                                    <p class="style2">Lorem Ipsum has been </p>
                                                    <p class="style3">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry ...</p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="item">
                                            <div class="banner5">
                                                <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                    <img src="/dist/images/blog/blog5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">08</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Chair
                                                            furnitured</a></p>
                                                    <p class="style2">Lorem Ipsum has been the industry's </p>
                                                    <p class="style3">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy
                                                        text ...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="banner5">
                                                <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                    <img src="/dist/images/blog/blog6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">06</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Leather
                                                            Sofas</a></p>
                                                    <p class="style2">When an unknown printer took galley</p>
                                                    <p class="style3">When an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has survived not only
                                                        ...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="blog-/detail/{{ $item->id }}" class="banner22">
                                                <img src="/dist/images/blog/blog7.jpg" alt="">
                                            </a>
                                            <div class="blog-page">
                                                <div class="blog-left">
                                                    <p class="text1">05</p>
                                                    <p class="text2">JAN</p>
                                                </div>

                                                <div class="blog-right">
                                                    <p class="style1"><a href="blog-/detail/{{ $item->id }}">Chair
                                                            furnitured</a></p>
                                                    <p class="style2">Lorem Ipsum has been </p>
                                                    <p class="style3">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry ...</p>
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
