<x-app-layout>
    @push('css')
        <!-- radial chart.css -->
        <link rel="stylesheet" href="{{ asset('pages/chart/radial/css/radial.css') }}" type="text/css" media="all">
    @endpush
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">

                    <!-- statustic-card start -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-yellow text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Products</p>
                                        <h4 class="m-b-0">2</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-shopping-cart f-50 text-c-yellow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-green text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Blogs</p>
                                        <h4 class="m-b-0">3</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-book f-50 text-c-green"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-pink text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Visitors</p>
                                        <h4 class="m-b-0">42</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-eye f-50 text-c-pink"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-blue text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5">Enquiries</p>
                                        <h4 class="m-b-0">5</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-mail f-50 text-c-blue"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- statustic-card start -->

                    <!-- statustic-card start -->
                    <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-left ">
                                    <h5>Monthly View</h5>
                                    <span class="text-muted">For more details about usage, please refer <a
                                            href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a>
                                        licences.</span>
                                </div>
                            </div>
                            <div class="card-block-big">
                                <div id="monthly-graph" style="height:250px"></div>
                            </div>
                        </div>
                    </div>
                    <!-- statustic-card start -->

                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script type="text/javascript" src="{{ asset('pages/dashboard/crm-dashboard.min.js') }}"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="{{ asset('bower_components/chart.js/js/Chart.js') }}"></script>

        <!-- gauge js -->
        <script src="{{ asset('pages/widget/gauge/gauge.min.js') }}"></script>
        <script src="{{ asset('pages/widget/amchart/amcharts.js') }}"></script>
        <script src="{{ asset('pages/widget/amchart/serial.js') }}"></script>
        <script src="{{ asset('pages/widget/amchart/gauge.js') }}"></script>
        <script src="{{ asset('pages/widget/amchart/pie.js') }}"></script>
        <script src="{{ asset('pages/widget/amchart/light.js') }}"></script>
    @endpush
</x-app-layout>
