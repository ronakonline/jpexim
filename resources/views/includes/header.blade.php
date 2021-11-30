<style>
    //responsive logo css
    @media only screen and (max-width: 600px) {
        .logo {
            width: 100%;
            height: auto;
        }
    }
    .logo {
        width: 100%;
        height: 80px;
    }
</style>
<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__wrapper">
        <div class="main-header--one__top clearfix">
            <div class="auto-container">

                <div class="main-header--one__top-left">
                    <div class="text">
                        <p>Welcome to JP Exim</p>
                    </div>
                    <div class="social-link clearfix" style="margin-left: 0px;">
                        <ul>
                            @if(!empty($settings->facebook_url))
                            <li><a href="{{ $settings->facebook_url }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            @endif
                            @if(!empty($settings->instagram_url))
                            <li><a href="{{ $settings->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                            @if(!empty($settings->email))
                            <li><a href="mailto:{{ $settings->email; }}" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    {{-- <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{{ $settings->email; }}">{{ $settings->email; }}</a></p>
                            </div>
                        </li>
                    </ul> --}}
                    <div id='google_translate_element'></div>
                </div>
            </div>
        </div>

        <div class="main-header--one__bottom clearfix">
            <div class="auto-container">
                <div class="main-header--one__bottom-inner">
                    <div class="main-header--one__bottom-left">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('uploads/logo/'.$settings->logo); }}" alt="" class="image-fluid logo"/></a>
                        </div>
                    </div>
                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <div class="stricky-one-logo">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('uploads/logo/'.$settings->logo); }}" alt="" class="image-fluid logo"/></a>
                                </div>
                            </div>

                            <div class="main-header--one__bottom-left">
                                <ul class="main-menu__list">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="/blogs">Blogs</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact</a></li>
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
