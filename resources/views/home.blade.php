<x-home-layout>

    <!--Main Slider Start-->
    <section class="main-slider main-slider-one main-slider-three">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

            <div class="swiper-wrapper">
                @foreach ($sliders as $slide)
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('uploads/home_slider/' . $slide->image) }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner">
                                        <div class="main-slider__content">
                                            <h3 class="main-slider__title">{{ $slide->title }}</h3>

                                        </div>
                                        {{-- <div class="main-slider__button-box"><a href="shop.html"
                                                class="thm-btn">shop
                                                now</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->
                @endforeach

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="icon-right-arrow-2"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="icon-right-arrow-2"></span>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->

    <section class="features-three" style="margin-top: 8rem; margin-bottom: 0rem">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="features-three__image clearfix">
                        <img src="{{ asset('Frontend/assets/images/home/home_yarn1.jpg') }}" alt="">

                    </div><!-- /.features-three__image -->
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="features-three__content">
                        <div class="sec-title text-left">
                            <div class="icon">
                                <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png') }}" alt="">
                            </div>
                            <span class="sec-title__tagline">Company benefits</span>
                            <h2 class="sec-title__title">Why Choose Us?</h2>
                        </div>
                        <ul class="list-unstyled features-three__list">
                            <li>
                                <i class="fa fa-check"></i>
                                <div class="features-three__list__content">
                                    <h3>Great Infrastructure</h3>
                                    <p>JP Exim is well-equipped with technically advanced & latest machinery and has a
                                        streamlined production process in place. The integrated facility to manufacture
                                        quality yarn is suited to manufacture both smaller and larger volumes.</p>
                                </div><!-- /.features-three__list__content -->
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <div class="features-three__list__content">
                                    <h3>High Efficiency</h3>
                                    <p>JP Exim has a long reputation for quality, performance and innovation.
                                        Quality of final product is determined with quality of raw material.</p>
                                </div><!-- /.features-three__list__content -->
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                <div class="features-three__list__content">
                                    <h3>Quality Guarantee</h3>
                                    <p>JP Exim ensure the supply of consistent quality yarn. Ultimately, the crunch
                                        lies in the infusion of hi-tech, state-of-the-art machinery that aids in the
                                        production of high quality 100% export quality yarn.</p>
                                </div><!-- /.features-three__list__content -->
                            </li>
                        </ul><!-- /.list-unstyle -->
                    </div><!-- /.features-three__content -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.features-three -->

    @if (!@empty($products))
        <section class="shop-one">
            <div class="container">
                <div class="sec-title text-center" style="margin-bottom: 4rem">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <span class="sec-title__tagline">Best for all of you</span>
                    <h2 class="sec-title__title">Introduse Our Products</h2>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4">
                            <div class="shop-one__item">
                                <div class="shop-one__image" style="height: 270px; width:auto; background-size:cover">
                                    <img src="{{ asset('uploads/' . $product->images[0]->image) }}" alt=""
                                        height="300px" width="auto">
                                </div><!-- /.shop-one__image -->
                                <div class="shop-two__content text-center">
                                    <h3 class="shop-two__title"><a
                                            href="{{ route('product.view',$product->slug) }}">{{ $product->name }}</a></h3>
                                    <p class="shop-two__price">Rs {{ $product->price }}</p><!-- /.shop-one__price -->
                                </div><!-- /.shop-one__content -->
                            </div><!-- /.shop-one__item -->
                        </div><!-- /.col-md-6 col-lg-3 -->
                        <div class="col-2"></div>
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop-one -->
    @endempty

    <!--Company Logos One Start-->
    <section class="company-logos-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="icon">
                    <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png') }}" alt="">
                </div>
                <span class="sec-title__tagline">Clients</span>
                <h2 class="sec-title__title">Meet our clients</h2>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                        <img src="{{ asset('Frontend/assets/images/clients/silvertech.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/sintex-industry.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/skyewin.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/vardhman.png') }}" alt="" style="width: auto;height: 180px;object-fit: contain;">
                    </div><!-- /.swiper-slide -->

                </div>
            </div>
        </div>
    </section>
    <!--Company Logos One End-->

    @if (!@empty($blogs))
        <!--Blog One Start-->
        <section class="blog-one" style="padding-top:20px !important">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png') }}" alt="">
                    </div>
                    <span class="sec-title__tagline">from the blog</span>
                    <h2 class="sec-title__title">News & Articles</h2>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <!--Start Single Blog One-->
                        <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="" width="auto"
                                        height="250px" />
                                    <div class="date-box">
                                        <span>{{ $blog->created_at->format('j F, Y ') }}</span>
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="{{ route('blog.view', $blog->slug) }}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>

                                <div class="blog-one__single-content">
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="far fa-user-circle"></i>{{ $blog->author }}</a>
                                        </li>
                                    </ul>
                                    <h2><a href="{{ route('blog.view', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog One-->

                    @endforeach
                </div>
            </div>
        </section>
        <!--Blog One End-->
    @endempty

    <!--Start Contact Page-->
    <section class="contact-page" style="padding-top:20px !important">
        <div class="container">
            <div class="sec-title text-center">
                <span class="sec-title__tagline">contact with us</span>
                <h2 class="sec-title__title">Get in Touch
                    with Us</h2>
            </div>
            <div class="row">


                <!--Start Contact Page Right-->
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-page__right">
                        <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php"
                            class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Send a
                                        message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact Page Right-->
            </div>
        </div>
    </section>
    <!--End Contact Page-->



    <div class="header-row" id="header-row" style="padding: 0px; overflow:hidden;">
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <div class="col-xs-12" style="height: 80%">
                    <a class="navbar-brand logo">
                        <img src="{{ asset('Frontend/assets/images/about/Banner_3.jpg') }}"
                            style="width: 100%; height:50%">
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-home-layout>
