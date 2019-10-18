<header class="app-header header">
    <!-- Navbar Right Menu-->
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="/eficor/administrator/dashboard">
                <img alt="logo" class="header-brand-img main-logo" src="{{ asset('themes/backend/assets/images/brand/logo-1.jpg') }}">
                <img alt="logo" class="header-brand-img mobile-logo" src="{{ asset('themes/backend/assets/images/brand/icon.png') }}">
            </a>
            <div class="d-none d-sm-flex">
                <a href="#" data-toggle="search" class="icon navsearch">
                    <i class="fe fe-search"></i>
                </a>
            </div>
            <!-- Sidebar toggle button-->
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="header-searchinput">
                <form class="form-inline">
                    <div class="search-element mr-3">
                        <input class="form-control header-search" type="search" placeholder="Search" aria-label="Search">
                        <span class="search-icon"><i class="fa fa-search"></i></span>
                    </div>
                </form>
            </div>
            <div class="dropdown d-sm-flex d-none header-message">
                <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-grid mr-2"></i><span class="lay-outstyle">Quick Menu</span>
                    <span class="pulse2 bg-danger" aria-hidden="true"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item d-flex pb-3" href="/eficor/administrator/cms/manage">CMS Page</a>
                    <a class="dropdown-item d-flex pb-3" href="/eficor/administrator/slider/manage-slider">Slider Management</a>
                    <a class="dropdown-item d-flex pb-3" href="/eficor/administrator/donation/manage-slider">Donation Management</a>
                    <a class="dropdown-item d-flex pb-3" href="/eficor/administrator/site-config">Site Config Management</a>
                    <a class="dropdown-item d-flex pb-3" href="/eficor/administrator/logout">Logout</a>
                </div>
            </div>

            <div class="d-flex order-lg-2 ml-auto">
                <div class="d-sm-flex d-none">
                    <a href="#" class="nav-link icon full-screen-link">
                        <i class="fe fe-minimize fullscreen-button"></i>
                    </a>
                </div>
                <!--Navbar -->
                <div class="dropdown">
                    <a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
                        <span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/25.jpg"></span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-dark">ADMIN</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="/eficor/administrator/logout"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
