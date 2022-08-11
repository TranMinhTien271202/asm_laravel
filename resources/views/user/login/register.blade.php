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
                                    <a title="Go to Home Page" href="index.html">
                                        <i class="fa fa-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="category3 last">
                                    <span>register</span>
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
                            <p class="style1">ĐÃ có khoản vui lòng đăng nhập tại đây <a href="{{ route('auth.login') }}"
                                    style="color: red;">Đăng Nhập</a>!</p>
                            <form action="{{ route('auth.post_register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="name" class="form-control required-entry input-text"
                                                placeholder="Name" value="" type="text" />
                                                {{-- @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif --}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <input name="password" class="form-control required-entry input-text"
                                                placeholder="password" value="" type="password" />
                                                {{-- @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif --}}
                                        </div>
                                    
                                        <div class="form-group">
                                            <input name="phone" class="form-control required-entry input-text"
                                                placeholder="phone" value="" type="number" />
                                                {{-- @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif --}}
                                        </div>
                                        <div class="form-group">
                                            <input name="birthday" class="form-control required-entry input-text"
                                                placeholder="phone" value="" type="date" />
                                        </div>
                                        <div class="form-group">
                                            <input name="email"
                                                class="form-control input-text required-entry validate-email"
                                                placeholder="Email" type="text" />
                                                {{-- @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif --}}
                                        </div>
                                        <div class="form-group" hidden>
                                            <input name="avatar"type="file" />
                                        </div>
                                        <div class="form-group" hidden>
                                            <input name="role"type="text" value="1" />
                                        </div>
                                        <div class="form-group" hidden>
                                            <input name="status"type="text" value="0" />
                                        </div>
                                        <button>Register</button>
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
