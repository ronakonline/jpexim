<x-app-layout>
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header">
                    <h5>All Products</h5>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="simpletable_length"><label>Show <select
                                                name="simpletable_length" aria-controls="simpletable"
                                                class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div id="simpletable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="simpletable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
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
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 20 entries</div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="simpletable_previous"><a href="#" aria-controls="simpletable"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="simpletable" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="simpletable" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item next" id="simpletable_next"><a href="#"
                                                    aria-controls="simpletable" data-dt-idx="3" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
