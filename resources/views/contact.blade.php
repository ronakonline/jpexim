<x-home-layout>
        <!--Page Header Start-->
        <section class="page-header clearfix"
        style="background-image: url({{ asset('Frontend/assets/images/about/Banner_3.jpg') }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <!--Start Contact Page-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Left-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-page__left">
                        <div class="sec-title">
                            <div class="icon">
                                <img src="assets/images/resources/sec-title-icon1.png" alt="">
                            </div>
                            <span class="sec-title__tagline">Contact now</span>
                            <h2 class="sec-title__title">Get in Touch <br>with Us</h2>
                        </div>
                        <p class="contact-page__left-text">We are committed to providing our customers with exceptional
                            service while offering our employees the best training.</p>
                        <div class="contact-page__social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Right-->

                <!--Start Contact Page Right-->
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="{{ route('contact.store') }}" method="POST" class="comment-one__form ">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name" required>
                                    </div>
                                    @error('name')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email" required>
                                    </div>
                                    @error('email')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone" required>
                                    </div>
                                    @error('phone')
                                        <p style="color:red">{{ $message }}</p>

                                    @enderror
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="title">
                                    </div>
                                    @error('title')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    @error('message')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
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


    <!--Start Contact Page Contact Info-->
    <section class="contact-page__contact-info clearfix">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__contact-info-wrapper">
                        <div class="contact-page__contact-info-title">
                            <h2>Get in Touch</h2>
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


    <!--Contact Page Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section>
    <!--Contact Page Google Map End-->
</x-home-layout>
