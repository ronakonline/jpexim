<x-home-layout>

    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url({{ asset('Frontend/assets/images/backgrounds/page-header-bg.jpg') }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Blogs</li>
                </ul>
                <h2>Blog</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <!--Start News Details Laft-->
                <div class="col-xl-12 col-lg-12">
                    <div class="news-details__left">
                        <!--Start Single Blog One-->
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="" width="auto" height="auto"/>
                            </div>

                            <div class="blog-one__single-content blog-details">
                                <ul class="meta-info">
                                    <li><a href="#"><i
                                                class="far fa-clock"></i>{{ $blog->created_at->format('j F, y') }}</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-user-circle"></i>{{ $blog->author }}</a></li>
                                </ul>
                                <h2>{{ $blog->title }}</h2>
                                <p>{!! $blog->description !!}</p>
                            </div>
                        </div>
                        <!--End Single Blog One-->


                        <div class="tag-social-link">
                            <div class="tag-social-link__tag">
                                <div class="title">
                                    <h4>Share</h4>
                                </div>
                                <div class="tag-social-link__social-links" style="margin-left: 20px;">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tag-social-link__social-links">

                            </div>
                        </div>

                        <div class="news-details__pagenation">
                            <div class="row">
                                <!--Start Single News Details Pagenation-->
                                <div class="col-xl-6">
                                    <div class="news-details__pagenation-single style2">
                                        <h2><a href="#">The Winter Wheat Harvest Gathering Momentum</a></h2>
                                    </div>
                                </div>
                                <!--End Single News Details Pagenation-->

                                <!--Start Single News Details Pagenation-->
                                <div class="col-xl-6">
                                    <div class="news-details__pagenation-single active">
                                        <h2><a href="#">The Winter Wheat Harvest Gathering Momentum</a></h2>
                                    </div>
                                </div>
                                <!--End Single News Details Pagenation-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End News Sidebar Laft-->




            </div>
        </div>
    </section>
    <!--News Details End-->

</x-home-layout>
