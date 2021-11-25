<x-app-layout>
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Home Slider</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Home Slider</a> </li>
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
                                <h5>Add home slider image</h5>


                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>

                            </div>
                            <div class="card-block">
                                <h5 class="sub-title">Select Image</h5>
                                <form method="POST" action="{{ route('admin.homeslider.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" class="form-control">
                                                @error('image')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
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
                <div class="row">
                    <div class="col-sm-12">
                        <!-- List view card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>All Slider Images</h5>

                            </div>
                            <div class="row card-block">
                                <div class="col-md-12">
                                    <ul class="list-view">
                                        @if (count($images) > 0)

                                            @foreach ($images as $image)
                                                <li>
                                                    <div class="card list-view-media">
                                                        <div class="card-block">
                                                            <div class="media">

                                                                <div class="media-body">
                                                                    <div class="col-xs-12">
                                                                        <img src="{{ asset('uploads/home_slider/' . $image->image) }}"
                                                                            alt="{{ $image->image }}" width="100%"
                                                                            height="300px" style="object-fit: cover" />
                                                                    </div>

                                                                    <div class="m-t-15">
                                                                        <form
                                                                            action="{{ route('admin.homeslider.destroy', $image->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <p>No Image Found</p>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- List view card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
