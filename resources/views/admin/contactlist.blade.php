<x-app-layout>

    @push('css')
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('pages/data-table/css/buttons.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    @endpush

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>All Enquireis</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Contact Messages</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            @if(session('success'))
                <x-alert message="{{ session('success') }}" type="success" title="Success!"/>
            @endif

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>All Messages</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table  table-bordered nowrap dataTable"
                                        role="grid" aria-describedby="simpletable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach ($contacts as $contact )
                                            <tr role="row" class="odd">
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->title }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->message }}</td>
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

    @push('js')

        <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('pages/data-table/js/data-table-custom.js') }}"></script>
    @endpush

</x-app-layout>
