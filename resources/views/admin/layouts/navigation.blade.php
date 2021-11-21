<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel">Home</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Route::is('dashboard') ? 'active' : ' ' }}">
                <a href="{{ route('dashboard') }}" class="active">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{ Route::is('admin.products.add')||Route::is('admin.products.all') ? 'active pcoded-trigger' : ' ' }} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{ Route::is('admin.products.add') ? 'active' : ' ' }}">
                        <a href="{{ route('admin.products.add') }}">
                            <span class="pcoded-mtext">Add Product</span>
                        </a>
                    </li>
                    <li class=" {{ Route::is('admin.products.all') ? 'active' : ' ' }}">
                        <a href="{{ route('admin.products.all') }}">
                            <span class="pcoded-mtext">All Products</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- make link active on his route -->

            <div class="pcoded-navigatio-lavel">Site Settings</div>
            <li class="{{ Route::is('admin.homeslider') ? 'active' : ' ' }}">
                <a href="{{ route('admin.homeslider') }}">
                    <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                    <span class="pcoded-mtext">Home Slider</span>
                </a>
            </li>
        </ul>

    </div>
</nav>
