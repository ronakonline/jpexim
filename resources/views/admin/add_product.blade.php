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
                    <h4>Add Product</h4>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>
                <div class="card-block">
                    <h5 class="sub-title">Add new product</h5>
                    <form method="POST" action="{{ route('admin.products.create') }}" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>

                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>

                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>

                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary ml-2 ">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</x-app-layout>
