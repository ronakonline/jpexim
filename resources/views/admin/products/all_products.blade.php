<x-app-layout>
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>All Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">All Products</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>All Products</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable"
                                        role="grid" aria-describedby="simpletable_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 155.422px;">Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="simpletable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 234.609px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="simpletable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 110.656px;">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $product->name }}</td>
                                                    <td>{{ $product->price }}</td>

                                                    <td style="white-space: nowrap; width: 1%;">
                                                        <div class="tabledit-toolbar btn-toolbar"
                                                            style="text-align: left;">
                                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                                <button type="button"
                                                                    class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                    style="float: none;margin: 5px;"><span
                                                                        class="icofont icofont-ui-edit"></span>Edit</button><button
                                                                    type="button"
                                                                    class="tabledit-delete-button btn btn-danger waves-effect waves-light"
                                                                    style="float: none;margin: 5px;"><span
                                                                        class="icofont icofont-ui-delete"></span>Delete</button>
                                                            </div>

                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
