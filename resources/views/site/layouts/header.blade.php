<!-- header-area start -->
<header id="header" class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-top-left">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-top-right fix">
                        <div class="header-links">
                            <ul>
                                <li><a href="#">ورود</a></li>
                                <li><a href="#">ثبت نام</a></li>
                            </ul>
                        </div>
                        <div class="header-search">
                            <form action="#" method="post">
                                <button type="button" class="search-toggler"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.header-top -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index-2.html"><img src="{{ asset('images/logo/logo.png') }}" alt="Logo" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-menu">
                        <nav>
                            <ul class="main-nav navbar-right">
                                <li><a href="#">ارتباط با ما</a></li>
                                <li class="dropdown"><a href="#">دسته بندی</a>
                                <div class="sub-menu">
                                        <ul class="home-versions">
                                            <li><a href="index.html">Homepage Version 1</a></li>
                                            <li><a class="last" href="index-2.html">Homepage Version 2</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="active"><a href="{{ route('home.index') }}">صفحه اصلی</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.main-menu -->
                </div>
            </div>
        </div>
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">دسته بندی</a>
                                    <ul>
                                        <li><a href="index.html">home 1</a></li>
                                        <li><a href="index-2.html">home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('home.index') }}">صفحه اصلی</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    </div>
</header><!-- /.header-bottom -->
<!-- header-area end -->

<!-- search-area start -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <span class="search-close"></span>
                    <form action="#" method="post">
                        <input type="text" placeholder="Search here..."/>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-area end -->