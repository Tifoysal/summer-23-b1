<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>

            @if(checkUserPermission('dashboard'))
            <a class="nav-link" href="{{route('dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            @endif


            @if(checkUserPermission('category.list'))
            <a class="nav-link" href="{{route('category.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Categories
            </a>
            @endif

           
            @if(auth()->user()->role =='admin')
            <a class="nav-link" href="{{route('brand.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Brand
            </a>
            <a class="nav-link" href="{{route('order.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Orders
            </a>

            @endif

            <a class="nav-link" href="{{route('product.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Products
            </a>
            <a class="nav-link" href="{{route('role.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Roles
            </a>
           





        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
