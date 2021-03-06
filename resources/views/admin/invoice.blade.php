
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <link rel="icon" href="favicon.ico">

    <title>Spark - Responsive Admin &amp; Dashboard Template</title>

    <link href="{{asset('css/admin.css')}}" rel="stylesheet">

</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <svg>
                <use xlink:href="#ion-ios-pulse-strong"></use>
            </svg>
            Spark <small class="d-none d-sm-inline">| v3.0</small>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Messages</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-envelope-open"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                            <div class="position-relative">
                                4 New Messages
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Michelle Bilodeau</div>
                                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                        <div class="text-muted small mt-1">5m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Kathie Burton</div>
                                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                        <div class="text-muted small mt-1">30m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Alexander Groves</div>
                                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
                                    </div>
                                    <div class="col-10 pl-2">
                                        <div class="text-dark">Daisy Seger</div>
                                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                        <div class="text-muted small mt-1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all messages</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ml-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Notifications</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-bell"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                            4 New Notifications
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-danger fas fa-fw fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Update completed</div>
                                        <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Lorem ipsum</div>
                                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                        <div class="text-muted small mt-1">6h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-primary fas fa-fw fa-building"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Login from 192.186.1.1</div>
                                        <div class="text-muted small mt-1">8h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">New connection</div>
                                        <div class="text-muted small mt-1">Anna accepted your request.</div>
                                        <div class="text-muted small mt-1">12h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ml-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">Profile</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-cog"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i> Contacts</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="header">
    <div class="container">
        <div class="media text-white">
            <img src="img/avatar.jpg" class="avatar img-fluid rounded-circle mr-3" alt="Linda Miller" />
            <div class="media-body">
                <h3 class="mb-1 text-white font-weight-normal">Linda Miller</h3>
                <span class=" font-weight-normal">831 Arron Smith Drive, NE 68438</span>
            </div>
        </div>
    </div>
</div>

<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                <a class="card d-block d-md-none mt-4" data-toggle="collapse" data-target="#sidebar">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Menu</h5>
                    </div>
                </a>

                <nav id="sidebar" class="collapse collapse-disabled-md sidebar sidebar-sticky">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Main</h5>
                        </div>
                        <div class="sidebar-content">
                            <a href="index.html" class="sidebar-item">
                                <i class="align-middle mr-1 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                            </a>
                            <a class="sidebar-item" href="#layouts" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-desktop"></i> <span class="align-middle">Layouts</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="layouts" data-parent="#sidebar">
                                <a class="sidebar-item" href="layouts-sidebar-right.html">Right Sidebar</a>
                                <a class="sidebar-item" href="layouts-sidebar-static.html">Static Sidebar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Elements</h5>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#ui" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-flask"></i> <span class="align-middle">User Interface</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="ui" data-parent="#sidebar">
                                <a class="sidebar-item" href="ui-alerts.html">Alerts</a>
                                <a class="sidebar-item" href="ui-buttons.html">Buttons</a>
                                <a class="sidebar-item" href="ui-cards.html">Cards</a>
                                <a class="sidebar-item" href="ui-general.html">General</a>
                                <a class="sidebar-item" href="ui-grid.html">Grid</a>
                                <a class="sidebar-item" href="ui-modals.html">Modals</a>
                                <a class="sidebar-item" href="ui-notifications.html">Notifications</a>
                                <a class="sidebar-item" href="ui-tabs.html">Tabs</a>
                                <a class="sidebar-item" href="ui-typography.html">Typography</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#charts" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="charts" data-parent="#sidebar">
                                <a class="sidebar-item" href="charts-chartjs.html">Chart.js</a>
                                <a class="sidebar-item" href="charts-apexcharts.html">ApexCharts</a>
                                <a class="sidebar-item" href="charts-morrisjs.html">Morris.js</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#forms" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-check-square"></i> <span class="align-middle">Forms</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="forms" data-parent="#sidebar">
                                <a class="sidebar-item" href="forms-layouts.html">Layouts</a>
                                <a class="sidebar-item" href="forms-basic-elements.html">Basic Elements</a>
                                <a class="sidebar-item" href="forms-advanced-elements.html">Advanced Elements</a>
                                <a class="sidebar-item" href="forms-input-groups.html">Input Groups</a>
                                <a class="sidebar-item" href="forms-editors.html">Editors</a>
                                <a class="sidebar-item" href="forms-validation.html">Validation</a>
                                <a class="sidebar-item" href="forms-wizard.html">Wizard</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#tables" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-table"></i> <span class="align-middle">Tables</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="tables" data-parent="#sidebar">
                                <a class="sidebar-item" href="tables-bootstrap.html">Bootstrap</a>
                                <a class="sidebar-item" href="tables-datatables.html">DataTables</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#maps" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-map-marker-alt"></i> <span class="align-middle">Maps</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="maps" data-parent="#sidebar">
                                <a class="sidebar-item" href="maps-google.html">Google Maps</a>
                                <a class="sidebar-item" href="maps-vector.html">Vector Maps</a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#icons" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-heart"></i> <span class="align-middle">Icons</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="icons" data-parent="#sidebar">
                                <a class="sidebar-item" href="icons-font-awesome.html">Font Awesome</a>
                                <a class="sidebar-item" href="icons-ion.html">Ion Icons</a>
                                <a class="sidebar-item" href="icons-feather.html">Feather Icons</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Extras</h5>
                        </div>
                        <div class="sidebar-content">
                            <a class="sidebar-item" href="#pages" data-toggle="collapse">
                                <i class="align-middle mr-1 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
                            </a>
                            <div class="sidebar-dropdown collapse" id="pages" data-parent="#sidebar">
                                <a class="sidebar-item " href="pages-sign-in.html">Sign In</a>
                                <a class="sidebar-item " href="pages-sign-up.html">Sign Up</a>
                                <a class="sidebar-item " href="pages-reset-password.html">Reset Password</a>
                                <a class="sidebar-item " href="pages-blank.html">Blank Page</a>
                                <a class="sidebar-item " href="pages-404.html">404 Page</a>
                                <a class="sidebar-item " href="pages-500.html">500 Page</a>
                                <a class="sidebar-item  active" href="pages-invoice.html">Invoice</a>
                            </div>
                            <a href="documentation.html" class="sidebar-item">
                                <i class="align-middle mr-1 fas fa-fw fa-book"></i> <span class="align-middle">Getting Started</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body m-sm-3 m-md-5">
                                <div class="mb-4">
                                    Hello <strong>Linda Miller</strong>,
                                    <br /> This is the receipt for a payment of <strong>$268.00</strong> (USD) you made to Spark.
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-muted">Payment No.</div>
                                        <strong>741037024</strong>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="text-muted">Payment Date</div>
                                        <strong>October 2, 2018 - 03:45 pm</strong>
                                    </div>
                                </div>

                                <hr class="my-4" />

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="text-muted">Client</div>
                                        <strong>
                                            Linda Miller
                                        </strong>
                                        <p>
                                            4183 Forest Avenue <br> New York City <br> 10011 <br> USA <br>
                                            <a href="#">
                                                lida.miller@gmail.com
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="text-muted">Payment To</div>
                                        <strong>
                                            Spark LLC
                                        </strong>
                                        <p>
                                            354 Roy Alley <br> Denver <br> 80202 <br> USA <br>
                                            <a href="#">
                                                info@spark.com
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Spark Theme Customization</td>
                                        <td>2</td>
                                        <td class="text-right">$150.00</td>
                                    </tr>
                                    <tr>
                                        <td>Monthly Subscription </td>
                                        <td>3</td>
                                        <td class="text-right">$25.00</td>
                                    </tr>
                                    <tr>
                                        <td>Additional Service</td>
                                        <td>1</td>
                                        <td class="text-right">$100.00</td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Subtotal </th>
                                        <th class="text-right">$275.00</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Shipping </th>
                                        <th class="text-right">$8.00</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Discount </th>
                                        <th class="text-right">5%</th>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Total </th>
                                        <th class="text-right">$268.85</th>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="text-center">
                                    <p class="text-sm">
                                        <strong>Extra note:</strong> Please send all items at the same time to the shipping address. Thanks in advance.
                                    </p>

                                    <a href="#" class="btn btn-primary">
                                        Print this receipt
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <hr />
        <div class="text-muted text-center">
            <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Support</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Terms of Service</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-muted" href="#">Contact</a>
                </li>
            </ul>
            <p>
                &copy; 2018 - <a href="index.html" class="text-muted">Spark</a>
            </p>
        </div>
    </div>
</footer>
<script src="{{asset('js/admin.js')}}"></script>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong"><path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"></path></symbol>
    </defs>
</svg>
</body>

</html>