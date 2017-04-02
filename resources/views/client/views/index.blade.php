@extends('client.layout.layout_client')

@section('content')
<!-- Content -->
<!-- Slider -->
<div class="rev-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" 
                    data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="thumbnail"><a href=""><img 
                                class="img-rounded" src="{{ 
                                asset('customer/images/slider/slider-01.jpg') }}" 
                                alt=""></a>
                            </div>
                        </div> <!-- .item active -->
                        <div class="item">
                            <div class="thumbnail"><a href=""><img 
                                class="img-rounded" src="{{ 
                                asset('customer/images/slider/slider-01.jpg') }}" 
                                alt=""></a>
                            </div>
                        </div> <!-- .item -->
                        <div class="item">
                            <div class="thumbnail"><a href=""><img 
                                class="img-rounded" src="{{ 
                                asset('customer/images/slider/slider-01.jpg') }}" 
                                alt=""></a>
                            </div>
                        </div> <!-- .item -->
                        <div class="item">
                            <div class="thumbnail"><a href=""><img 
                                class="img-rounded" src="{{ 
                                asset('customer/images/slider/slider-01.jpg') }}" 
                                alt=""></a>
                            </div>
                        </div> <!-- .item -->
                    </div> <!-- .carousel-inner -->
                    <a class="left carousel-control" 
                        href="http://hocwebgiare.com/#carousel-example-generic" 
                        data-slide="prev"> 
                        <span class="glyphicon glyphicon-chevron-left"></span> </a> 
                    <a class="right carousel-control" 
                        href="http://hocwebgiare.com/#carousel-example-generic" 
                        data-slide="next"> 
                        <span class="glyphicon glyphicon-chevron-right"></span> </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" 
                            data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" 
                            data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" 
                            data-slide-to="2"></li>
                    </ol>
                </div> <!-- .slide -->
            </div> <!-- .col-md-12 -->
        </div> <!-- .row -->
    </div> <!-- End container -->
</div> <!-- End rev-slider -->
<!-- End Slider -->
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 styles found</p>
                            <a href="" title="" class="pull-right">Xem thêm</a>
                            <div class="clearfix"></div>
                        </div> <!-- End beta-products-details -->

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->
                        </div> <!-- End row -->
                    </div> <!-- End beta-products-list -->

                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 styles found</p>
                            <a href="" title="" class="pull-right">Xem thêm</a>
                            <div class="clearfix"></div>
                        </div> <!-- End beta-products-details -->

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->

                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <div class="products"> 
                                            <img style="width: 100%" 
                                            src="{{ 
                                            asset('customer/images/products/banh-kem-01.jpg') 
                                            }}" alt="">
                                            <div class="products-details animate">
                                                <div class="products-header">
                                                </div>
                                                <div class="products-detail">
                                                    <p>bánh kem socola đường</p>
                                                    <div class="social">
                                                        <a href="" 
                                                        class="social-icon 
                                                        facebook animate">
                                                        <span 
                                                        class="fa fa-facebook">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        twitter animate">
                                                        <span 
                                                        class="fa fa-twitter">
                                                        </span></a> 
                                                        <a href="" 
                                                        class="social-icon 
                                                        google-plus animate">
                                                        <span 
                                                        class="fa fa-google-plus"> 
                                                        </span></a>
                                                    </div>
                                                </div> <!-- .products-detail -->
                                            </div> <!-- .product-detail animate -->
                                        </div> <!-- .products -->
                                    </div> <!-- End single-item-header -->

                                    <div class="single-item-body">
                                        <p class="single-item-title">
                                            Bánh kem socola </p>
                                        <p class="single-item-price">
                                            <span>Giá: 100.000 VND</span>
                                        </p>
                                    </div> <!-- End single-item-body -->

                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" 
                                            href="shopping_cart.html">
                                            <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        <a class="beta-btn primary" 
                                            href="product.html">Details 
                                            <i class="fa fa-chevron-right"></i>
                                            </a>
                                        <div class="clearfix"></div>
                                    </div> <!-- End single-item-caption -->
                                </div> <!-- End single-item -->
                            </div> <!-- End col-sm-3 -->
                        </div> <!-- End row -->
                    </div> <!-- End beta-products-list -->
                </div> <!-- End col-sm-12 -->
            </div> <!-- End row -->
        </div> <!-- End main-content-->
    </div> <!-- End content-->
</div> <!-- End container -->
<!-- End content -->
@endsection