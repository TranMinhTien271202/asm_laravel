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
                                    <span>Shopping cart</span>
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
                @foreach ($cart as $item)
                    <div class="shoppingcart">
                        <div class="sptitle col-md-12">
                            <h3>SHOPPING CART</h3>
                            <h4 class="style">PROCEED TO CHECKOUT</h4>
                        </div>
                        <div class="content col-md-12">
                            <ul class="title clearfix">
                                <li class="text1"><a href="#">PRODUCT NAME</a></li>
                                <li class="text2"><a href="#">UNIT PRICE</a></li>
                                <li class="text2"><a href="#">QTY</a></li>
                                <li class="text2"><a href="#">SUB TOTAL</a></li>
                            </ul>

                            <ul class="nav-mid clearfix">
                                <li class="image"><a href="#"><img src="{{ $item->product->image }}" width="100px"
                                            alt=""></a></li>
                                <li class="item-title"><a href="#">{{ $item->product->name }}</a></li>
                                <li class="icon1"></li>
                                <li class="price1">{{ number_format($item->product->price) }}</li>
                                <li class="number">{{ $item->quantily }}</li>
                                <li class="price2">{{ number_format($total = $item->quantily * $item->product->price) }}
                                </li>
                                <input type="hidden"
                                    name="{{ number_format($totalall += $item->quantily * $item->product->price) }}"
                                    value="" id="">
                                <a href="{{ route('giohang.delete_cart', $item->id) }}"><button>Xóa</button></a>
                            </ul>

                            <ul class="nav-bot clearfix">
                                <li class="continue"><a href="/">Continue shopping</a></li>
                                <li class="clear"><a href="#">clear shopping cart</a></li>
                                <li class="update"><a href="#">update shopping cart</a></li>
                            </ul>
                            <form action="{{ route('giohang.oderCart') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-bd">
                                            <div class="iv">
                                                <label for="name">name</label>
                                                <input class="styleip" name="name" type="text" value=""
                                                    size="30" />
                                            </div>
                                            <input type="text" hidden name="status" id="" value="0">
                                            <input type="text" hidden name="product_id" id="" value="{{$item->product_id}}">
                                            <input type="text" hidden name="quantily" id="" value="{{$item->quantily}}">
                                            <div class="iv">
                                                <label for="phone">phone</label>
                                                <input class="styleip" name="phone" type="text" value=""
                                                    size="30" />
                                            </div>
                                            <div class="iv">
                                                <label for="address">Address</label>
                                                <input class="styleip" name="address" type="text" value=""
                                                    size="30" />
                                            </div>
                                            <div class="iv">
                                                <label for="note">Note</label>
                                                <input class="styleip" name="note" type="text" value=""
                                                    size="30" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-right col-md-4">
                                        <div class="form-bd">
                                            <h3>
                                                <span class="text3">Tổng Tiền:</span>
                                                <input type="text" hidden name="totalall" id=""
                                                    value="{{ number_format($totalall) }}">
                                                <span class="text4">{{ number_format($totalall) }}</span>
                                            </h3>
                                            <a href=""><button>Đặt Hàng</button></a>
                                            {{-- href="{{route('giohang.order', $totalall)}}" --}}
                                            <p class="checkout">Checkout with Multiple Addresses</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
