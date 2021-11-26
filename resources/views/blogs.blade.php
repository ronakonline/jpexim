<x-home-layout>
    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('Frontend/assets/images/backgrounds/page-header-bg.jpg'); }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Blogs</li>
                </ul>
                <h2>Latest Blogs</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog One Start-->
    <section class="blog-one blog-one--news">
        <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
        @if(!empty($blogs))
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('uploads/blogs/'.$blog->image); }}" alt="" />
                                <div class="date-box">
                                    <span>{{ $blog->created_at->format('j F, Y ') }}</span>
                                </div>
                                <div class="overlay-icon">
                                    <a href="#"><span class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li><a href="#"><i class="far fa-user-circle"></i>{{ $blog->author }}</a></li>
                                </ul>
                                <h2><a href="#">{{ $blog->title }}</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->

                @endforeach
            </div>

        </div>
        @else
            <h3>No Blogs Found</h3>
        @endif
    </section>
    <!--Blog One End-->
</x-home-layout>
