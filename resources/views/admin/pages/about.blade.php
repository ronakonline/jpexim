<x-app-layout>
    @push('css')
       <!-- include summernote css/js -->
       <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    @endpush

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>About Page</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">About Page</a> </li>
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
                                <h5 class="sub-title">About Page Content</h5>
                                <form method="POST" action="{{ route('admin.about.update') }}"  enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label class="col-form-label">Description</label>
                                            @if(!empty($about->description))
                                            <textarea class="form-control" id="summernote" name="description" placeholder="Enter description">{{ $about->description }}</textarea>

                                            @else
                                            <textarea class="form-control" id="summernote" name="description" placeholder="Enter description"></textarea>
                                            @endif
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary m4-2 ">Submit</button>
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

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "250px"
            });
        });
    </script>
    @endpush


</x-app-layout>

