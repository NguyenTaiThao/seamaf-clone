<!-- start header -->
<header class="header navbar-light bg-light row align-items-center">
    <div class="col-md-2 offset-md-1 header-box d-flex align-items-center justify-content-center justify-content-md-start">
        <a class="brand" href="#">RVM SeaMaf</a>
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
                <i class="fal fa-heart extension-icon cursor"></i>
                <span class="cursor">Wishlist</span>
            </div>
            <div class="col-4">
                <a href="{{asset('/cart')}}">
                    <i class="fal fa-shopping-cart extension-icon cursor"></i>
                    <span class="cursor">Shopping cart</span>
                    <span class="badge bg-danger">4</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- end header -->