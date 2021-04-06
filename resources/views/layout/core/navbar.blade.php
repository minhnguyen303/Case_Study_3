<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        @php($routeName = \Illuminate\Support\Facades\Route::currentRouteName())
        @if($routeName != 'home' && $routeName != 'shop' && $routeName != 'cart.index' && $routeName != 'shop.search')
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        @endif
        @if($routeName == 'home' || $routeName == 'shop' || $routeName == 'cart.index' || $routeName == 'shop.search')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link text-bold {{($routeName == 'home') ? 'bg-danger rounded' : ''}}">Home</a>
            </li>
        @endif
        @if($routeName == 'home' || $routeName == 'shop' || $routeName == 'cart.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('shop')}}" class="nav-link text-bold {{($routeName == 'shop') ? 'bg-danger rounded' : ''}}">Shop</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.index')}}" class="nav-link text-bold">Tài khoản</a>
            </li>
        @endif
    </ul>

@if($routeName == 'shop')
    <!-- SEARCH FORM -->
        <form class="form-inline ml-3" action="{{route('shop.search')}}" method="post">
            @csrf
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
@endif

<!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @if($routeName == 'shop' || $routeName == 'cart.index')
            <li class="nav-item bg-">
                <a class="nav-link {{($routeName == 'cart.index') ? 'bg-danger rounded' : ''}}" href="{{route('cart.index')}}" role="button">
                    {{ (\Illuminate\Support\Facades\Session::has('cart')) ? \Illuminate\Support\Facades\Session::get('cart')->totalQty : 0 }}
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
