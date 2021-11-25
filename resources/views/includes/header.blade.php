<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__wrapper">
        <div class="main-header--one__top clearfix">
            <div class="auto-container">

                <div class="main-header--one__top-left">
                    <div class="text">
                        <p>Welcome to JP Exim</p>
                    </div>
                    <div class="social-link clearfix">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            @if(!empty($settings->facebook_url))
                            <li><a href="{{ $settings->facebook_url }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            @endif
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            @if(!empty($settings->instagram_url))
                            <li><a href="{{ $settings->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{ $settings->email; }}">{{ $settings->email; }}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-header--one__bottom clearfix">
            <div class="auto-container">
                <div class="main-header--one__bottom-inner">
                    <div class="main-header--one__bottom-left">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('Frontend/assets/images/resources/logo-1.png'); }}" alt="" /></a>
                        </div>
                    </div>
                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <div class="stricky-one-logo">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('Frontend/assets/images/resources/logo-1.png'); }}"
                                            alt=""></a>
                                </div>
                            </div>

                            <div class="main-header--one__bottom-left">
                                <ul class="main-menu__list">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/">Products</a></li>
                                    <li><a href="/">Blogs</a></li>
                                    <li><a href="/">About</a></li>
                                    <li><a href="/">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>



                    <div class="main-header--one__bottom-right clearfix">
                        @if($settings->phone_no)
                        <div class="contact-box">
                            <div class="icon">
                                <span class="icon-phone-call-2"></span>
                            </div>
                            <div class="text">
                                <p>Call Anytime</p>
                                <a href="tel:123456789">{{ $settings->phone_no }}</a>

                            </div>
                        </div>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content">

    </div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
