@extends('frontend.master')


@section('content')



<div class="slider">

<div class="container">

    <div class="row">

        <div class="col-md-8 col-sm-8">

            <div class="slider big-slider">

                <div id="featured" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->

                  <ol class="carousel-indicators">

                    <li data-target="#featured" data-slide-to="0" class="active"></li>

                  </ol>



                  <!-- Wrapper for slides -->

                  <div class="carousel-inner" role="listbox">

                    <div class="item active" style="background-image:url('images/slider-1.jpg')">

                       <div class="carousel-caption">

                            <h4>Save up to 30%</h4>

                            <h2 class="raleway">New collection <span>2016</span></h2>

                            <a href="" class="btn btn-theme">Shop Now</a>

                        </div>

                    </div>

                  </div>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-4">

            <div class="slider small-slider">

                <div id="small-featured" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->

                  <ol class="carousel-indicators">

                    <li data-target="#small-featured" data-slide-to="0" class="active"></li>

                  </ol>



                  <!-- Wrapper for slides -->

                  <div class="carousel-inner" role="listbox">

                    <div class="item active" style="background-image:url('images/slider-small-1.jpg')">

                       <div class="carousel-caption">

                            <h3>Kids Fashion</h3>

                            <p>Save up to 50%</p>

                            <a href="" class="btn btn-theme">Shop Now</a>

                        </div>

                    </div>

                  </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<div class="banner">

<div class="container">

    <div class="row">

        <div class="col-md-4 col-sm-4">

            <div class="single-banner" style="background-image:url(images/banner-1.jpg)">

               <div class="banner-caption">

                    <h3>Awesome Bag Collection</h3>

                    <a href="" class="btn btn-theme">Shop Now</a>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-4">

            <div class="single-banner" style="background-image:url(images/banner-2.jpg)">

               <div class="banner-caption">

                    <h3>Men Shirt Collection</h3>

                    <a href="" class="btn btn-theme">Shop Now</a>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-4">

            <div class="single-banner" style="background-image:url(images/banner-3.jpg)">

               <div class="banner-caption">

                    <h3>Women Bag Collection</h3>

                    <a href="" class="btn btn-theme">Shop Now</a>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<div class="shopping-process text-center">

<div class="container">

    <div class="row">

        <div class="col-md-3 col-sm-3">

           <div class="single-process">

                <i class="fa fa-check"></i>

                <h3>Choose a Product</h3>

                <p>The European languages are members the same family. Their separate existence science </p>

            </div>

        </div>

        <div class="col-md-3 col-sm-3">

           <div class="single-process">

                <i class="fa fa-cart-arrow-down"></i>

                <h3>Add to Cart</h3>

                <p>The European languages are members the same family. Their separate existence science </p>

            </div>

        </div>

        <div class="col-md-3 col-sm-3">

           <div class="single-process">

                <i class="fa fa-money"></i>

                <h3>Make Order</h3>

                <p>The European languages are members the same family. Their separate existence science </p>

            </div>

        </div>

        <div class="col-md-3 col-sm-3">

           <div class="single-process">

                <i class="fa fa-dashcube"></i>

                <h3>Deliver For Free</h3>

                <p>The European languages are members the same family. Their separate existence science </p>

            </div>

        </div>

    </div>

</div>

</div>

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li class="active"><a href="#trending" data-toggle="tab">Trending Items</a></li>

            <li><a href="#best-seller" data-toggle="tab">Best Seller</a></li>

            

            <li class="pull-right collection-url"><a href="">View All <i class="fa fa-long-arrow-right"></i></a></li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="trending">

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-1.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-2.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-3.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-4.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-5.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-6.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-7.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-8.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="best-seller">

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-9.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-10.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-11.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-12.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-13.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-14.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-15.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-16.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<div class="popular-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>

            <li><a href="#special" data-toggle="tab">Special</a></li>

            <li class="pull-right collection-url"><a href="">View All <i class="fa fa-long-arrow-right"></i></a></li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="popular">

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-16.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-15.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-14.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-13.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-12.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-11.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-10.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-9.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="special">

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-8.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-7.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-6.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-5.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-4.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-3.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-2.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="images/product-1.jpg" alt="" class="thumbnail">

                            <div class="product-description text-center">

                                <p class="title">Date Tiffany Torchiere</p>

                                <p class="price">$ 55.00</p>

                            </div>

                            <div class="product-hover">

                                <ul>

                                    <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                                    <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                                    <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<div class="blog">

<div class="container">

    <div class="row">

        <div class="blog-title">

            <h2 class="pull-left text-left">From The Blog</h2>

            <a href="" class="pull-right text-right">More Post <i class="fa fa-long-arrow-right"></i></a>

        </div>

        <div class="clearfix"></div>

        <div class="col-md-4 col-sm-4">

            <div class="single-post">

                <div class="post-inner">

                    <div class="post-thumbnail">

                        <img src="images/post-1.jpg" alt="">

                        <div class="date">31<br> Jun</div>

                        <a href="" class="read-more raleway">Read More <i class="fa fa-long-arrow-right"></i>

                        </a>

                    </div>

                    <h4 class="post-title">Party Night Dresses Available Delivery Let's Start</h4>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-4">

           <div class="single-post">

                <div class="post-inner">

                    <div class="post-thumbnail">

                        <img src="images/post-2.jpg" alt="">

                        <div class="date">31<br> Jun</div>

                        <a href="" class="read-more raleway">Read More <i class="fa fa-long-arrow-right"></i>

                        </a>

                    </div>

                    <h4 class="post-title">At the early beginnings of the Web written content</h4>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-4">

            <div class="single-post">

                <div class="post-inner">

                    <div class="post-thumbnail">

                        <img src="images/post-3.jpg" alt="">

                        <div class="date">31<br> Jun</div>

                        <a href="" class="read-more raleway">Read More <i class="fa fa-long-arrow-right"></i>

                        </a>

                    </div>

                    <h4 class="post-title">Let’s start with the most essential part of any written content</h4>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

@endsection