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
                                <h4>Edit Product</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Product</a> </li>
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
                                <h5 class="sub-title">Edit product</h5>
                                <form method="POST" action="{{ route('admin.products.update',Crypt::encrypt($product->id)) }}" >
                                    @csrf


                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $product->name; }}" placeholder="Enter title">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>

                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Price</label>
                                            <input type="text" class="form-control" name="price" value="{{ $product->price }}" placeholder="Enter price">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class="col-form-label">Description</label>
                                            <textarea class="form-control" id="summernote" name="description" placeholder="Enter description">{{ $product->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary m4-2 ">Update</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-block">
                                <h5 class="sub-title">Edit product Images</h5>
                                <form method="POST" action="{{ route('admin.products.updateimages',Crypt::encrypt($product->id)) }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class="col-form-label">Product Image</label>
                                            <input type="file" id="product-images" class="form-control" name="images[]" multiple>

                                            @error('images.*')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row preview">
                                        <div class="col-sm-12">
                                            <label class="col-form-label">Product Images</label>
                                            <div class="row">
                                                @foreach ($product->images as $image)
                                                    <div class="col-sm-3">
                                                        <img src="{{ asset('uploads/'.$image->image) }}" class="img-fluid" alt="" height="200px" width="200px" data-img-name="{{ $image->image }}">
                                                        <a href="" class="btn btn-danger rounded mt-2 delete-img" >Delete</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="delete_images" class="delete-images" hidden>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
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

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var data = '<div class="col-4 mt-4"><img src="'+event.target.result+'" height="200px" width="200px"></div>'
                            console.log(data);
                            $(placeToInsertImagePreview).append(data);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#product-images').on('change', function() {
                imagesPreview(this, '.preview');
            });
        });

        $(document).on('click', '.delete-img', function(e) {
            e.preventDefault();
            img = $(".delete-images");
            img.val(img.val() + $(this).parent().find('img').data('img-name') + ',');
            $(this).parent().remove();
        });
    </script>
    @endpush


</x-app-layout>

