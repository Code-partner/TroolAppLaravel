<nav id="sidebar" class="collapse collapse-disabled-md sidebar sidebar-sticky">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Main</h5>
        </div>
        <div class="sidebar-content">
            <a href="{{url('/admin')}}" class="sidebar-item">
                <i class="align-middle mr-1 fas fa-fw fa-tachometer-alt"></i> <span class="align-middle">Dashboard</span>
            </a>
            <a class="sidebar-item" href="#layouts" data-toggle="collapse">
                <i class="align-middle mr-1 fas fa-fw fa-users"></i> <span class="align-middle">Users</span>
            </a>
            <div class="sidebar-dropdown collapse" id="layouts" data-parent="#sidebar">
                <a class="sidebar-item" href="#">
                    <i class="align-middle mr-1 fas fa-fw fa-user-tag"></i> <span class="align-middle">Admin User</span>
                </a>
                <a class="sidebar-item" href="#">
                    <i class="align-middle mr-1 fas fa-fw fa-user"></i> <span class="align-middle">Seller User</span>
                </a>
            </div>
            <a href="#products" class="sidebar-item" data-toggle="collapse">
                <i class="align-middle mr-1 fas fa-fw fa-shopping-cart"></i> <span class="align-middle">Products</span>
            </a>
            <div class="sidebar-dropdown collapse" id="products" data-parent="#sidebar">
                <a class="sidebar-item" href="{{route('admin.allProduct')}}">Show All</a>
                <a class="sidebar-item" href="{{route('admin.createProduct')}}">Add A Product</a>
            </div>
            <a href="{{route('admin.order.dashboard')}}" class="sidebar-item">
                <i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Orders</span>
            </a>

            <a href="{{url('/admin/categories')}}" class="sidebar-item">
                <i class="align-middle mr-1 fas fa-fw fa-window-restore"></i> <span class="align-middle">Categories</span>
            </a>
            <a href="{{url('/admin/sizes')}}" class="sidebar-item">
                <i class="align-middle mr-1 fab fa-fw fa-slack-hash" aria-hidden="true"></i> <span class="align-middle">Sizes</span>
            </a>
            <a href="{{url('/admin/images')}}" class="sidebar-item">
                <i class="align-middle mr-1 fas fa-fw fa-image" aria-hidden="true"></i> <span class="align-middle">Images</span>
            </a>
            <a href="{{url('/admin/colors')}}" class="sidebar-item">
                <i class="align-middle mr-1 fa fa-fw fa-tint"></i> <span class="align-middle">Colors</span>
            </a>
            <a href="{{url('/admin/inventory')}}" class="sidebar-item">
                <i class="align-middle mr-1 fab fa-stack-overflow"></i> <span class="align-middle">Inventory</span>
            </a>
        </div>
    </div>

</nav>