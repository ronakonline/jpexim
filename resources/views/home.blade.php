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
                @foreach ($sliders as $slider) )
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('uploads/home_slider/' . $slider->image) }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner">
                                        <div class="main-slider__content">
                                            <span class="main-slider-tagline">We’re producing natural goods</span>
                                            <h2 class="main-slider__title">Healthy <span>&</span> Fresh <br>
                                                Organic Food</h2>

                                        </div>
                                        <div class="main-slider__button-box"><a href="shop.html"
                                                class="thm-btn">shop
                                                now</a>
                                        </div>
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
                <div class="col-md-0 col-lg-2"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="shop-one__item">
                        <div class="shop-one__image">
                            <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->
                            <img src="{{ asset('Frontend/assets/images/update-14-09-2021/shop/shop-1-1.png') }}"
                                alt="">
                            <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                        </div><!-- /.shop-one__image -->
                        <div class="shop-two__content text-center">
                            <h3 class="shop-two__title"><a href="product-details.html">Brown Bread</a></h3>
                            <p class="shop-two__price">$23.00</p><!-- /.shop-one__price -->
                            <div class="shop-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.shop-one__rating -->
                        </div><!-- /.shop-one__content -->
                    </div><!-- /.shop-one__item -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-0 col-lg-2"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="shop-one__item">
                        <div class="shop-one__image">

                            <img src="{{ asset('Frontend/assets/images/update-14-09-2021/shop/shop-1-2.png') }}"
                                alt="">
                            <a class="shop-one__cart" href="cart.html"><i class=" icon-shopping-cart"></i></a>
                        </div><!-- /.shop-one__image -->
                        <div class="shop-two__content text-center">
                            <h3 class="shop-two__title"><a href="product-details.html">Red Onion</a></h3>
                            <p class="shop-two__price">$33.00</p><!-- /.shop-one__price -->
                            <div class="shop-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.shop-one__rating -->
                        </div><!-- /.shop-one__content -->
                    </div><!-- /.shop-one__item -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-0 col-lg-2"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop-one -->

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
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/Falcon-Yarns.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/silvertech.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/sintex-industry.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/skyewin.png') }}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('Frontend/assets/images/clients/vardhman.png') }}" alt="">
                    </div><!-- /.swiper-slide -->

                </div>
            </div>
        </div>
    </section>
    <!--Company Logos One End-->


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
                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('Frontend/assets/images/blog/blog-s-1-1.jpg') }}" alt="" />
                            <div class="date-box">
                                <span>30 July, 2021</span>
                            </div>
                            <div class="overlay-icon">
                                <a href="news-details.html"><span class="icon-plus"></span></a>
                            </div>
                        </div>

                        <div class="blog-one__single-content">
                            <ul class="meta-info">
                                <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                            </ul>
                            <h2><a href="news-details.html">Why Eco and Walking or Agriculture for the
                                    Environment?</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->

                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('Frontend/assets/images/blog/blog-s-1-2.jpg') }}" alt="" />
                            <div class="date-box">
                                <span>30 July, 2021</span>
                            </div>
                            <div class="overlay-icon">
                                <a href="news-details.html"><span class="icon-plus"></span></a>
                            </div>
                        </div>

                        <div class="blog-one__single-content">
                            <ul class="meta-info">
                                <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                            </ul>
                            <h2><a href="news-details.html">Bring to the table win-win survival strategies to
                                    ensure</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->

                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('Frontend/assets/images/blog/blog-s-1-3.jpg') }}" alt="" />
                            <div class="date-box">
                                <span>30 July, 2021</span>
                            </div>
                            <div class="overlay-icon">
                                <a href="news-details.html"><span class="icon-plus"></span></a>
                            </div>
                        </div>

                        <div class="blog-one__single-content">
                            <ul class="meta-info">
                                <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                            </ul>
                            <h2><a href="news-details.html">Leverage agile frameworks to provide a robust
                                    synopsis</a></h2>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->
            </div>
        </div>
    </section>
    <!--Blog One End-->

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
                                    <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
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
