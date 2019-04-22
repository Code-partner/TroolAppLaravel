
@extends('admin.app')

@section('content')
            <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

                <div class="row">
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Sales Today</p>
                                        <h2><i class="text-primary fas fa-caret-up"></i> 2562</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-danger">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Visitors Today</p>
                                        <h2><i class="text-danger fas fa-caret-down"></i> 17212</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-success">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Total Earnings</p>
                                        <h2><i class="text-primary fas fa-caret-up"></i> $ 24300</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col-12 col-sm-4 align-self-center text-center text-sm-left">
                                        <div class="icon icon-warning">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 align-self-center text-center text-sm-right">
                                        <p class="text-muted mb-1">Pending Orders</p>
                                        <h2><i class="text-danger fas fa-caret-down"></i> 43</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Top Selling Products</h5>
                            </div>
                            <table id="datatables-dashboard" class="table table-striped my-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">License</th>
                                    <th class="d-none d-xl-table-cell">Technology</th>
                                    <th class="d-none d-xl-table-cell">Tickets</th>
                                    <th>Sales</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>AppStack</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">720</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">540</td>
                                </tr>
                                <tr>
                                    <td>Milo</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">40</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Ada</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">60</td>
                                    <td class="d-none d-xl-table-cell">610</td>
                                </tr>
                                <tr>
                                    <td>Abel</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">80</td>
                                    <td class="d-none d-xl-table-cell">150</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                <tr>
                                    <td>Libre</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">30</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Von</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">350</td>
                                </tr>
                                <tr>
                                    <td>Material Blog</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge badge-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">10</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function(event) {
                                $('#datatables-dashboard').DataTable({
                                    pageLength: 6,
                                    lengthChange: false,
                                    bFilter: false,
                                    autoWidth: false
                                });
                            });
                        </script>
                    </div>
                    <div class="col-12 col-xl-4 col-xxl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Calendar</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="chart">
                                        <div id="datetimepicker-dashboard"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function(event) {
                                $('#datetimepicker-dashboard').datetimepicker({
                                    inline: true,
                                    sideBySide: false,
                                    format: 'L'
                                });
                            });
                        </script>
                    </div>
                </div>

            </div>
@endsection
