<x-app-layout>

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Contact Settings</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Contact Settings</a> </li>
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

                            <div class="card-block">
                                <h5 class="sub-title">Contact Settings</h5>
                                <form method="POST" action="{{ route('admin.contact_setting.store') }}"  enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_no" value="{{ $settings->phone_no }}" placeholder="Enter Phone Number">
                                                @error('phone_no')
                                                    <span class="text-danger">{{ $message }}</span>

                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Phone Number 2</label>
                                            <input type="text" class="form-control" name="phone_no1" value="{{ $settings->phone_no1 }}"  placeholder="Enter Phone Number 2">
                                            @error('phone_no1')
                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $settings->email }}" placeholder="Enter Email">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>

                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Address</label>
                                            <textarea class="form-control" name="address" placeholder="Enter Address">{{ $settings->address }}</textarea>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Facebook URL</label>
                                            <input type="text" class="form-control" name="facebook_url" value="{{ $settings->facebook_url }}" placeholder="Enter Facebook url">
                                                @error('facebook_url')
                                                    <span class="text-danger">{{ $message }}</span>

                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Instagram URL</label>
                                            <input type="text" class="form-control" name="instagram_url" value="{{ $settings->instagram_url }}" placeholder="Enter instagram url">
                                            @error('instagram_url')
                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>



                                    </div>





                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary m4-2 ">Save</button>
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

