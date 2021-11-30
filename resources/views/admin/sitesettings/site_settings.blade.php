<x-app-layout>
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Site Settings</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Site Settings</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        @if (session('success'))
                            <x-alert message="{{ session('success') }}" type="success" title="Success!" />

                        @endif
                        @if (session('error'))
                            <x-alert message="{{ session('error') }}" type="danger" title="Error!" />

                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Logo</h5>


                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>

                            </div>
                            <div class="card-block">
                                <h5 class="sub-title">Select Image</h5>
                                <form method="POST" action="{{ route('admin.site-setting.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo" class="form-control">
                                                @error('logo')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xs-12 mt-4">
                                                <img src="{{ asset('uploads/logo/' . $settings->logo) }}"
                                                    alt="{{ $settings->logo }}" width="100%"
                                                    height="300px" style="object-fit: cover" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary ">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
