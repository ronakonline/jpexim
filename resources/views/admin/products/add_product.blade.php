<x-app-layout>
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Add Product</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add Product</a> </li>
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
                                <h5 class="sub-title">Add new product</h5>
                                <form method="POST" action="{{ route('admin.products.create') }}" >
                                    @csrf


                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>

                                                @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label">Price</label>
                                            <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter price">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class="col-form-label">Description</label>
                                            <textarea class="form-control" id="summernote" name="description" placeholder="Enter description">{{ old('description') }}</textarea>
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
    <script>
        Dropzone.options.uploadForm = { // The camelized version of the ID of the form element
  // The configuration we've talked about above
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 100,
  maxFiles: 100,
  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;
    // First change the button to actually tell Dropzone to process the queue.
    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      // Make sure that the form isn't actually being sent.
      e.preventDefault();
      e.stopPropagation();
      myDropzone.processQueue();
    });
    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
    // of the sending event because uploadMultiple is set to true.
    this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
    this.on("successmultiple", function(files, response) {
      // Gets triggered when the files have successfully been sent.
      // Redirect user or notify of success.
    });
    this.on("errormultiple", function(files, response) {
      // Gets triggered when there was an error sending the files.
      // Maybe show form again, and notify user of error
    });
  }

}
</script>

</x-app-layout>

