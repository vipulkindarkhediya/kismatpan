<div class="container-fluid white mb-3">
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="text-muted m-0 display-5 font-weight-semi-bold"><span
                        class="blue font-weight-bold px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control pt-3 pb-3  bg-color rounded"
                        placeholder="Search for more products">

                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn" title="Cart">
                <i class="fas fa-shopping-cart text-dark"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>

<!-- Navbar Start -->
<div class="container-fluid mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 rounded">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0 position-relative d-flex w-100 justify-content-around">
                @for ($q = 1; $q <= 8; $q++)
                    <div class="nav-item dropdowm position-relative d-flex">
                        <a href="#" class="nav-link font-weight-semi-bold" id="menu" data-toggle="dropdown">
                            {{-- <a href="index.html" class="nav-item nav-link font-weight-semi-bold" id="menu"> --}}
                            <div class="flex">
                                <img src="{{ asset('user/img/carousel-1.jpg') }}" class="rounded"
                                    style="width: 64px; height:64px;" alt="">
                                <div class="d-flex position-relative align-items-center">
                                    <span>gcosery</span>
                                    <i class="fa-solid fa-caret-down ml-lg-1"></i>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                            <a href="checkout.html" class="dropdown-item">Checkout</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<div class="container-fluid mb-3">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 310px;">
                <img class="img-fluid" src="{{ asset('user/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                            Order</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                        <a href="" class="btn btn-light py-2 px-3 rounded">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 310px;">
                <img class="img-fluid" src="{{ asset('user/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                            Order</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                        <a href="" class="btn btn-light py-2 px-3 rounded">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" id="just-left" data-slide="prev">
            <div class="btn btn-black" style="width: 45px; height: 100px;">
                <span class="carousel-control-prev-icon" style="margin-top: 2rem"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" id="just-right" data-slide="next">
            <div class="btn btn-black" style="width: 45px; height: 100px;">
                <span class="carousel-control-next-icon" style="margin-top: 2rem"></span>
            </div>
        </a>
    </div>
</div>
