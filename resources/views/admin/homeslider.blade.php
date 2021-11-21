<x-app-layout>
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Home Slider</h4>


                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>
                <div class="card-block">
                    <h5 class="sub-title">Select Image</h5>
                    <form method="POST" action="{{ route('admin.homeslider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload File</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary ml-2 ">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>All Slider Images</h4>
                </div>
                <div class="card-body">
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                @if (!empty($images))

                                    @foreach ($images as $image )
                                        <tbody>
                                            <tr>
                                                <td>{{ $image->id }}</td>
                                                <td><img src="{{ asset('uploads/'.$image->image) }}" alt="{{ $image->image }}" width="200px" height="200px"></td>
                                                <td><form action="{{ route('admin.homeslider.destroy', $image->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form></td>

                                            </tr>
                                        </tbody>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">No Image Found</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form Inputs card end -->
            <!-- Input Grid card start -->

        </div>
        <!-- Input Grid card end -->
        <!-- Input Validation card start -->

        <!-- Input Validation card end -->
        <!-- Input Alignment card start -->

        <!-- Input Alignment card end -->
    </div>
</x-app-layout>
