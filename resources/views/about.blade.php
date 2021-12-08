<x-home-layout>
    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url({{ asset('Frontend/assets/images/about/Banner_3.jpg') }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Three Start-->
    <section class="about-three">
        <div class="about-three__shape">
            <div class="container">
                <div class="row">
                    <!--Start About Three Content Box-->
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-three__content-box">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="{{ asset('uploads/logo/'.$settings->favicon); }}" alt="">
                                </div>
                                <span class="sec-title__tagline"></span>
                                <h2 class="sec-title__title">We are one.<br>
                                    Yet, we are many.</h2>
                            </div>
                            <div class="about-three__content-box-inner">
                                @if(!empty($about))
                                <p>{!! $about->description !!}
                                </p>
                                @endif

                            </div>
                            <div class="about-three__content-box-btn">
                                <a href="/products" class="thm-btn">Our Products</a>
                            </div>
                            <div class="about-three__arrow float-bob-y"></div><!-- /.about-three__arrow -->
                        </div>
                    </div>
                    <!--End About Three Content Box-->

                    <!--Start About Three Img Box-->
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-three__img-box">
                            <div class="about-three__img-box-img">
                                <div class="about-three__img-box-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/about/about.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About Three Img Box-->
                </div>
            </div>
    </section>
    <!--About Three End-->


    <div class="header-row" id="header-row" style="padding: 0px; overflow:hidden;">
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <div class="col-xs-12">
                    <a class="navbar-brand logo">
                        <img src="{{ asset('Frontend/assets/images/about/Banner_1.jpg') }}" style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--Company Logos One Start-->
    <section class="company-logos-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{ asset('uploads/logo/'.$settings->favicon) }}" alt="">
                </div>
                <span class="sec-title__tagline">Clients</span>
                <h2 class="sec-title__title">Meet our clients</h2>
            </div>
            <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 20,
                    "slidesPerView": 1
                },
                "375": {
                    "spaceBetween": 20,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                }
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('Frontend/assets/images/clients/Falcon-Yarns.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('Frontend/assets/images/clients/sunny.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('Frontend/assets/images/clients/sintex-industry.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('Frontend/assets/images/clients/skyewin.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('Frontend/assets/images/clients/mmgroup.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                </div><!-- /.swiper-slide -->

            </div>
            </div>
        </div>
    </section>
    <!--Company Logos One End-->






    <!--Start Contact Page Contact Info-->
    <section class="contact-page__contact-info clearfix">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__contact-info-wrapper">
                        <div class="contact-page__contact-info-title" style="width: 450px">
                            <h2>JP Exim and group is a very well-known in Textile Industry</h2>
                        </div>

                        <div class="contact-page__contact-info-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <div class="title">
                                        <span>Visit Our Store</span>
                                        <p>{{ $settings->address }}</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-email-1"></span>
                                    </div>
                                    <div class="title">
                                        <span>Send Email</span>
                                        <p><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon phone">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="title">
                                        <span>Call Anytime</span>
                                        <p><a href="tel:{{ $settings->phone_no }}">{{ $settings->phone_no }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Contact Info-->






</x-home-layout>
