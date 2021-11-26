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
                                <h4>Edit Blog</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Blog</a> </li>
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
                                <h5 class="sub-title">Add new blog</h5>
                                <form method="POST" action="{{ route('admin.blogs.update',Crypt::encrypt($blog->id)) }}"  enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Author</label>
                                            <input type="text" class="form-control" name="author" value="{{ $blog->author }}" placeholder="Enter author" required>
                                                @error('author')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $blog->title }}" placeholder="Enter title" required>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <div class='col-sm-12'>
                                            <label class="col-form-label">Blog Images</label>
                                            <input type="file" id="product-images" class="form-control" name="image">

                                            @error('image')

                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class='col-sm-12 '>
                                            <div class="row preview">
                                                <div class="col">
                                                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class="col-form-label">Description</label>
                                            <textarea class="form-control" id="summernote" name="description" placeholder="Enter description">{{ $blog->description }}</textarea>
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

    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;


                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var data = '<div class="col-4 mt-4"><img src="'+event.target.result+'" height="200px" width="400"></div>'
                            console.log(data);
                            $(placeToInsertImagePreview).html(data);
                        }
                        reader.readAsDataURL(input.files[0]);
                }

            };

            $('#product-images').on('change', function() {
                imagesPreview(this, 'div.preview');
            });
        });
    </script>
    @endpush


</x-app-layout>

