<x-home-layout>

    	<!--Page Header Start-->
		<section class="page-header clearfix"
        style="background-image: url({{ asset('Frontend/assets/images/backgrounds/page-header-bg.jpg'); }});">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Products</li>
                </ul>
                <h2>Products</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    @if(!empty($products))
    <section class="shop-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 shop-one__sorter">
                            <p class="shop-one__product-count">Showing 1–2 of 2 results</p>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->

                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4">
                            <div class="shop-one__item">
                                <div class="shop-one__image">
                                    <img src="{{ asset('uploads/'.$product->images[0]->image); }}" alt="" width="auto" height="250px">
                                </div><!-- /.shop-one__image -->
                                <div class="shop-one__content text-center">
                                    <h3 class="shop-one__title"><a href="#">{{ $product->name }}</a>
                                    </h3>
                                    <p class="shop-one__price">$23.00</p><!-- /.shop-one__price -->
                                    <div class="shop-one__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.shop-one__rating -->
                                </div><!-- /.shop-one__content -->
                            </div><!-- /.shop-one__item -->
                        </div>
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop-one -->
    @else
        <section class="shop-one">
            <div class="container">
                <div class="row">
                    <h3>No Products Found!</h3>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop-one -->
    @endif
</x-home-layout>
