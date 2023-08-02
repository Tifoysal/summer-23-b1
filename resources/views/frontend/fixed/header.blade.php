<div class="top-bar">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="social pull-left">

                        <ul>

                            <li><a href=""><i class="fa fa-facebook"></i></a></li>

                            <li><a href=""><i class="fa fa-twitter"></i></a></li>

                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-md-6">)
                    <div class="action pull-right">

                        <ul>
                            @if(auth('customer')->user())
                            <li style="color:white"><i class="fa fa-user"></i> {{auth('customer')->user()->name}}</li>
                            
                            <li><a href="{{route('customer.logout')}}"><i class="fa fa-key"></i> Logout</a></li>

                             @else 
                            <li><a href="{{route('customer.login')}}"><i class="fa fa-user"></i> Login</a></li>

                            <li><a href="{{route('customer.registration')}}"><i class="fa fa-lock"></i> Register</a></li>

                            @endif

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="header">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-4">

                    <div class="logo">

                        <a href="index.html">

                            <img src="images/logo.png" alt="Orani E-shop">

                        </a>

                    </div>

                </div>

                <div class="col-md-7 col-sm-5">

                    <div class="search-form">

                        <form action="{{route('search')}}" class="navbar-form" role="search">

                            <div class="form-group">

                              <input name="search" type="text" class="form-control" placeholder="Search products . . .">

                            </div>

                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>

                        </form>

                    </div>

                </div>

                <div class="col-md-2 col-sm-3">

                    <div class="cart">

                        <div class="cart-icon">

                            <a href="{{route('cart.view')}}"><i class="fa fa-shopping-cart"></i></a>

                        </div>

                        <div class="cart-text">

                            SHOPPING CART

                            <br>

                           {{session()->has('cart')?count(session()->get('cart')):0}} items

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="navigation">

        <nav class="navbar navbar-theme">

          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">

                <span class="sr-only">Menu</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

              </button>

            </div>

            <div class="shop-category nav navbar-nav navbar-left">

                <!-- Single button -->

                <div class="btn-group">

                  <button type="button" class="btn btn-shop-category dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Shop By Category <span class="caret"></span>

                  </button>

                  <ul class="dropdown-menu">

                  @foreach($cats as $cat)
                  
                    <li>
                        <a href="{{route('category.products',$cat->id)}}">{{$cat->name}}</a>
                    </li>

                @endforeach

                  </ul>

                </div>

                <div class="btn-group">

                  <button type="button" class="btn btn-shop-category dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Shop By Type <span class="caret"></span>

                  </button>

                  <ul class="dropdown-menu">
                  
                    <li>
                        <a href="{{route('products.by.type','new')}}">New</a>
                    </li>


                    <li>
                        <a href="{{route('products.by.type','upcomming')}}">Upcomming</a>
                    </li>


                    <li>
                        <a href="{{route('products.by.type','top')}}">Top</a>
                    </li>

                    <li>
                        <a href="{{route('products.by.type','best sale')}}">Best Sale</a>
                    </li>


                  </ul>

                </div>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar">

              <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Home</a></li>

                <li><a href="{{route('website.all-products')}}">All Products</a></li>

                <li><a href="#">Shortcode</a></li>

                <li><a href="#">Features</a></li>

                <li><a href="#">Media</a></li>

                <li><a href="#">About Us</a></li>

                <li><a href="#">Contact Us</a></li>

              </ul>

            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->

        </nav>

    </div>