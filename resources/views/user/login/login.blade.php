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
                                    <span>Login</span>
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
                <div id="contact_gmap" class="col-md-12">
                    <div class="row clearfix">
                        <div class="col-md-4 contact-info">

                        </div>
                        <div class="col-md-8">
                            <p class="style1">Chưa có tài khoản vui lòng đăng ký tại đây <a
                                    href="{{ route('auth.register') }}" style="color: red;">đăng ký</a>!</p>
                            <form action="{{ route('auth.postlogin') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="email" class="form-control required-entry input-text"
                                                placeholder="email" name="email" title="Name"type="text" />
                                                {{-- @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif --}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <input name="password" class="form-control" id="password"
                                                placeholder="password" name="password" type="password" />
                                                {{-- @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif --}}
                                        </div>
                                        
                                        <button type="submit">Login</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="buttons-set">
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
@endsection
