<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('titulo','Veca´s') | Tu Tienda Online</title>

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Veca's - Tu Tienda Online">
        <meta name="author" content="Henry Perez">
            
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset("assets/$theme/images/icons/favicon.ico")}}">
        
     <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
            };
            (function(d) {
                var wf = d.createElement('script'), s = d.scripts[0];
                wf.src = '{{asset("assets/$theme/js/webfont.js")}}';
                wf.async = true;
                s.parentNode.insertBefore(wf, s);
            })(document);
        </script>

        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="{{asset("assets/$theme/css/bootstrap.min.css")}}">
        @yield('styles')
        <!-- Main CSS File -->
        <link rel="stylesheet" href="{{asset("assets/$theme/css/style.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("assets/$theme/vendor/fontawesome-free/css/all.min.css")}}">
    </head>
    <body>
        <div class="page-wrapper">
            <!---inicio header--->
            @include("theme/$theme/header")
            <!---fin de header--->
            <main class="main">
                <div class="home-slider-container">
                    <div class="home-slider owl-carousel owl-theme">
                        <div class="home-slide">
                            <div class="slide-bg owl-lazy"  data-src="{{asset("assets/$theme/images/slider/portada2.jpg")}}"></div><!-- End .slide-bg -->
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
                </div><!-- End .container-fluid -->
    
                

                
            </main><!-- End .main -->
            <!---Inicio  footer--->
            @include("theme/$theme/footer")
            <!---Fin de  footer--->
        </div>
<!------------------------------------------------------>

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url({{asset("assets/$theme/images/newsletter_popup_bg.jpg")}})">
        <div class="newsletter-popup-content">
            <img src="{{asset("assets/$theme/images/vecas-black.png")}}" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->
    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!------------------------------------------------------->


        <!-- Plugins JS File -->
    <script src="{{asset("assets/$theme/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/$theme/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/$theme/js/plugins.min.js")}}"></script>

    <!-- Main JS File -->
    <script src="{{asset("assets/$theme/js/main.min.js")}}"></script>
    @yield('scripts')
    </body>
</html>