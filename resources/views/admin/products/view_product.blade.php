<x-app-layout>

    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/slick-carousel/css/slick.css'); }}">
         <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/slick-carousel/css/slick-theme.css'); }}">
    @endpush

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Product detail</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.products.all') }}">All
                                        Products</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Product Detail</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Product detail page start -->
                        <div class="card product-detail-page">
                            <div class="card-block">
                                <div class="row">
                                    @if (!empty($images))
                                        <div class="col-lg-5 col-xs-12">
                                            <div class="port_details_all_img row">
                                                <div class="col-lg-12 m-b-15">
                                                    <div id="big_banner">
                                                        @foreach ($images as $image)
                                                            <div class="port_big_img">
                                                                <img class="img img-fluid"
                                                                    src="{{ asset('uploads/' . $image->image) }}"
                                                                    alt="Big_ Details">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 product-right">
                                                    <div id="small_banner">
                                                        @foreach ($images as $image)
                                                            <div>
                                                                <img class="img img-fluid"
                                                                    src="{{ asset('uploads/' . $image->image) }}"
                                                                    alt="small-details">
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                        <div class="row">
                                            <div>
                                                {{-- <div class="col-lg-12">
                                                        <span class="txt-muted d-inline-block">Product Code: <a href="#!"> PRDT1234 </a> </span>
                                                        <span class="f-right">Availablity : <a href="#!"> In Stock </a> </span>
                                                    </div> --}}
                                                <div class="col-lg-12">
                                                    <h4 class="pro-desc">{{ $product->name }}</h4>
                                                </div>
                                                <div class="col-lg-12">
                                                    <span class="text-primary product-price">Rs {{ $product->price }}</span>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product detail page end -->
                    </div>
                </div>
                <!-- Nav tabs start-->
                <div class="card product-detail-page">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description"
                                role="tab">Description</a>
                            <div class="slide"></div>
                        </li>

                    </ul>
                </div>
                <!-- Nav tabs start-->

                <!-- Nav tabs card start-->
                <div class="card">
                    <div class="card-block">
                        <!-- Tab panes -->
                        <div class="tab-content bg-white">
                            <div class="tab-pane active" id="description" role="tabpanel">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                    <!-- Nav tabs card end-->
                </div>
                <!-- Page body end -->
            </div>
        </div>
    </div>

    @push('js')
        <!-- slick js -->
        <script type="text/javascript" src="{{ asset('bower_components/slick-carousel/js/slick.min.js') }}"></script>
        <!-- product detail js -->
        <script type="text/javascript" src="{{ asset('pages/product-detail/product-detail.js') }}"></script>
    @endpush
</x-app-layout>
