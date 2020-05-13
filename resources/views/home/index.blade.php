@extends("theme.$theme.layout")
@section('titulo')
    Home
@endsection

@section('contenido')
@include('includes.mensaje')
<div class="home-slider-container">
    <div class="home-slider owl-carousel owl-theme">
        <div class="col-md-12 col-sm-12 home-slide">
            <!--pegar imagem--->
            <div class="slide-bg owl-lazy"  data-src="{{asset("assets/$theme/images/slider/slide-1.jpg")}}"></div><!-- End .slide-bg -->
            <div class="home-slide-content container">
                <!--
                <div class="slide-text">Up to <br>
                    
                    <div>
                        <span class="slide-sale">50</span>
                        <span>
                            <span class="slide-perc">%</span><br>
                            OFF
                        </span>
                    </div>
                </div>-->
                <!--
                <h1>Veca's Online</h1>
                <h3>consigelo ya a <strong>$99.00</strong></h3>
                <a href="category.html" class="btn btn-primary">Shop Now</a>-->
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="slide-bg owl-lazy"  data-src="{{asset("assets/$theme/images/slider/slide-2.jpg")}}"></div><!-- End .slide-bg -->
            <div class="home-slide-content container">
                <div class="row">
                    <div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
                        <h1>Cool Shoes</h1>
                        <h2>$199</h2>
                        <h4>* bLUE OR ORANGE WHILE IT LAST</h4>
                        <a href="category.html" class="btn btn-primary">Shop Now</a>
                    </div><!-- End .col-lg-5 -->
                </div><!-- End .row -->
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
    </div><!-- End .home-slider -->
</div><!-- End .home-slider-container -->               
<div class="banners-group">
    <div class="row no-gutters">
        <div class="col-sm-6 col-lg-3">
            <div class="banner banner-image">
                <a href="#">
                    <img src="{{asset("assets/$theme/images/banners/banner-1.jpg")}}" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->
        
        <div class="col-sm-6 col-lg-3">
            <div class="banner banner-image">
                <a href="#">
                    <img src="{{asset("assets/$theme/images/banners/banner-2.jpg")}}" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->

        <div class="col-sm-6 col-lg-3">
            <div class="banner banner-image">
                <a href="#">
                    <img src="{{asset("assets/$theme/images/banners/banner-3.jpg")}}" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->

        <div class="col-sm-6 col-lg-3">
            <div class="banner banner-image">
                <a href="#">
                    <img src="{{asset("assets/$theme/images/banners/banner-4.jpg")}}" alt="banner">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .col-lg-3 -->
    </div><!-- End .row -->
</div><!-- End .banners-group -->

<div class="half-section">
    <div class="row no-gutters">
        <div class="col-md-6 order-md-last half-img" style="background-image: url('{{asset("assets/$theme/images/bg-1.jpg")}}');">
            <h2 class="half-title">Men's<br>Collection</h2>
        </div><!-- End .col-md-6 -->

        <div class="col-md-6">
            <div class="half-content">
                <div class="title-group">
                    <h2 class="subtitle">New Men's Collection</h2>
                    <p>Yes, this is our new collection, check it out our new arrivals.</p>
                </div>

                <div class="products-slider owl-carousel owl-theme owl-nav-top">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-1.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>

                    
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-2.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-1.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .products-slider -->
            </div><!-- End .half-content -->
        </div><!-- End .col-md-6 -->
    </div><!-- End .no-gutters -->
</div><!-- End .half-section -->

<div class="half-section">
    <div class="row no-gutters">
        <div class="col-md-6 half-img" style="background-image: url('{{asset("assets/$theme/images/bg-2.jpg")}}');">
            <h2 class="half-title">Women's<br>Collection</h2>
        </div><!-- End .col-md-6 -->

        <div class="col-md-6">
            <div class="half-content">
                <div class="title-group">
                    <h2 class="subtitle">New Men's Collection</h2>
                    <p>Yes, this is our new collection, check it out our new arrivals.</p>
                </div>

                <div class="products-slider owl-carousel owl-theme owl-nav-top">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-3.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-4.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset("assets/$theme/images/products/home/product-3.jpg")}}">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .products-slider -->
            </div><!-- End .half-content -->
        </div><!-- End .col-md-6 -->
    </div><!-- End .no-gutters -->
</div><!-- End .half-section -->
<div class="container-fluid products-bottom">
    <div class="title-group text-center">
        <h2 class="subtitle">Featured Products</h2>
        <p>Check it out our this week's featured products.</p>
    </div>

    <div class="featured-products owl-carousel owl-theme">
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-1.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-2.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-3.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-4.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-5.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="product.html">
                    <img src="{{asset("assets/$theme/images/products/product-6.jpg")}}">
                </a>
                <div class="label-group">
                    <div class="product-label label-cut">-20%</div>
                </div>
                <div class="btn-icon-group">
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                </div>
                <a href="{{asset("assets/$theme/ajax/product-quick-view.html")}}" class="btn-quickview" title="Quick View">Quick View</a> 
            </figure>
            <div class="product-details">
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="category.html" class="product-category">category</a>
                    </div>
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                </div>
                <h2 class="product-title">
                    <a href="product.html">Product Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="old-price">$90</span>
                    <span class="product-price">$70</span>
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>
    </div><!-- End .featured-products -->
</div>
@endsection