<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="{{ route('dashboard') }}" class="active">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.products.add') }}">
                            <span class="pcoded-mtext">Add Product</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.products.all') }}">
                            <span class="pcoded-mtext">All Products</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('admin.homeslider') }}">
                    <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                    <span class="pcoded-mtext">Home Slider</span>
                </a>
            </li>
        </ul>

    </div>
</nav>
