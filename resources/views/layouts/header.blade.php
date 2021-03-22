<!-- start header -->
<header class="header navbar-light bg-light row align-items-center">
    <div class="col-md-2 offset-md-1 header-box d-flex align-items-center justify-content-center justify-content-md-start">
        <a class="brand" href="{{route('homepage')}}">RVM SeaMaf</a>
    </div>

    <div class="col-md-4 search-box">
        <input type="text" class="form-control search-input remove-outline" placeholder="Search on RVM SeaMaf...">
    </div>

    <div class="col-md-4 header-extension">
        <div class="row align-items-center">
            <div class="col-4">
                <select class="form-select select-input remove-outline" aria-label="Default select example">
                    <option value="1" selected>VND</option>
                    <option value="2">USD Dollar</option>
                    <option value="3">SNG Dollar</option>
                </select>
            </div>
            <div class="col-4">
                <li class="dropdown dropdown-notifications">
                    <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                        <i data-count="0" class="glyphicon glyphicon-bell notification-icon extension-icon"></i>
                    </a>

                    <div class="dropdown-container">
                        <div class="dropdown-toolbar">
                            <div class="dropdown-toolbar-actions">
                                <a href="#">Mark all as read</a>
                            </div>
                            <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                        </div>
                        <ul class="dropdown-menu">
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
            </div>
            <div class="col-4">
                <a href="{{asset('/cart')}}" class="cart-box">
                    <i class="fal fa-shopping-cart extension-icon cursor">
                        <span class="badge bg-danger">4</span>
                    </i>
                    <span class="cursor">Shopping cart</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- end header -->