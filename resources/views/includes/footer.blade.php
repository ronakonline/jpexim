  <!--Start Footer One-->
  <footer class="footer-one">
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__top-wrapper">
                        <div class="footer-one__bg"><img src="{{ asset('Frontend/assets/images/backgrounds/footer-one-bg.png'); }}"
                                alt="" /></div>
                        <div class="row">
                            <!--Start Footer Widget Column-->
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="/"><img src="{{ asset('uploads/logo/'.$settings->logo_light); }}" alt="" class="image-fluid logo"/></a>
                                    </div>
                                    <p class="footer-widget__about-text">JP Exim and group is a very well-known in Textile Industry </p>
                                    <div class="footer-widget__about-contact-box">
                                        @if($settings->phone_no)
                                        <p class="phone"><a href="tel:{{ $settings->phone_no }}"><i
                                                    class="fas fa-phone-square-alt"></i>{{ $settings->phone_no }}</a></p>
                                        @endif
                                        @if($settings->email)
                                        <p><a href="mailto:{{ $settings->email }}"><i
                                                    class="fa fa-envelope"></i>{{ $settings->email }}</a></p>
                                        @endif
                                        @if($settings->address)
                                        <p class="text"><i class="fas fa-map-marker-alt"></i>{{ $settings->address }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->
                            <div class="col-xl-1 col-lg-1"></div>
                            <!--Start Footer Widget Column-->
                            @if(!@empty($footer_blogs))
                            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="footer-widget__column footer-widget__news">
                                    <h2 class="footer-widget__title">News</h2>
                                    <ul class="footer-widget__news-list">
                                        @foreach ($footer_blogs as $blog )
                                        <li class="footer-widget__news-list-item">
                                            <div class="footer-widget__news-list-item-img">
                                                <img src="{{ asset('uploads/blogs/'.$blog->image); }}"
                                                    alt="" height="65px" width="65px" style=" border-radius: 50%;" />
                                            </div>
                                            <div class="footer-widget__news-list-item-title">
                                                <p>{{ $blog->created_at->format('j F, Y ') }}</p>
                                                <h5><a href="{{ route('blog.view',$blog->slug)  }}">{{ $blog->title }}</a></h5>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            @endempty
                            <!--End Footer Widget Column-->

                            <div class="col-xl-1"></div>
                            <!--Start Footer Widget Column-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="footer-widget__column footer-widget__explore">
                                    <h2 class="footer-widget__title">Explore</h2>
                                    <ul class="footer-widget__explore-list">
                                        <li class="footer-widget__explore-list-item"><a href="/products">Products</a></li>
                                        <li class="footer-widget__explore-list-item"><a href="/blogs">Blogs</a></li>
                                        <li class="footer-widget__explore-list-item"><a href="/about">About
                                                Us</a></li>
                                        <li class="footer-widget__explore-list-item"><a href="/contact">Get in
                                                Touch</a></li>

                                    </ul>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__bottom-inner">
                        <div class="footer-one__bottom-text">
                            <p>&copy; Copyright {{ date('Y') }} by <a href="#">jpexim.com</a></p>
                        </div>
                        <div class="footer-one__bottom-social-links">
                            <ul>
                                @if($settings->facebook_url)
                                <li><a href="{{ $settings->facebook_url }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                @endif
                                @if($settings->instagram_url)
                                <li><a href="{{ $settings->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                <li><a href="https://www.linkedin.com/company/jp-exim/about/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin"></i> </a></li>
                                <li><a href="https://twitter.com/Jp_Exim" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
</footer>
<!--End Footer One-->
