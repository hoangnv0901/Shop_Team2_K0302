@extends('client.layout.layout_client')

@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Trang chủ</a> / <span>Loại sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> <!-- End container -->
</div> <!-- inner-header -->
<div class="name-product_type">
    <h2 class="color-full">TÊN CỦA LOẠI SẢN PHẨM</h2>
</div>
<div class="filter-product_type">
    <div class="container">
        <div class="content">
            <span>Khoảng giá</span>
            <span class="span-product_type">Dưới 100.000</span>
            <span class="span-product_type">Dưới 200.000</span>
            <span class="span-product_type">Trên 200.000</span>
        </div>
    </div> <!-- End container -->
</div> <!-- End filer-product_type -->
<br>
<div class="content-product_type">
    <div class="container">
        <div class="row">          
            <div class="filter-content">
                <button class="margin-btn">Tất cả</button>
                <button class="margin-btn">Hot</button>
                <button class="margin-btn">Mới</button>
                <button class="margin-btn">Khuyến mại</button>
                <button class="margin-btn">Hight</button>
            </div>
        </div> <!-- .row -->
        <hr>
        <div class="content">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="each-list">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" src="{{ asset(
                                            		'customer\images\products\banh-kem-01.jpg'
                                            		) }}" alt="">
                                                <div class="products-details 
                                                	animate">
                                                    <div class="products-header">
                                                    </div>
                                                    <div class="products-detail">
                                                        <p>bánh kem socola đường
                                                        	</p>
                                                        <div class="social">
                                                            <a href="" 
                                                            class="social-icon 
                                                            facebook animate">
                                                            <span class="fa 
                                                            fa-facebook"></span>
                                                            </a>
                                                            <a href="" 
                                                            class="social-icon 
                                                            twitter animate">
                                                            <span class="fa 
                                                            fa-twitter"></span>
                                                            </a> 
                                                            <a href="" 
                                                            class="social-icon 
                                                            google-plus 
                                                            animate"><span 
                                                            class="fa 
                                                            fa-google-plus">
                                                            </span></a>
                                                        </div>
                                                    </div> <!-- .products-detai -->
                                                </div> <!-- animate -->
                                            </div> <!-- .products -->
                                        </div> <!-- End single-item-header -->

                                        <div class="single-item-body">
                                            <p class="single-item-title">
                                            	Bánh kem socola </p>
                                            <p class="single-item-price">
                                                Giá: <span>100.000</span> VND
                                            </p>
                                        </div> <!-- End single-item-body -->

                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" 
                                            	href="shopping_cart.html">
                                            	<i class="fa fa-shopping-cart">
                                            	</i></a>
                                            <a class="beta-btn primary" 
                                            	href="product.html">Details 
                                            	<i class="fa fa-chevron-right">
                                            	</i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                            </div> <!-- .row -->
                            <div class="clearfix"></div>
                        </div> <!-- .each-list -->
                    </div> <!-- .col-sm-3 -->

                    <div class="col-sm-3">
                        <div class="each-list">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" src="{{ asset(
                                            		'customer\images\products\banh-kem-01.jpg'
                                            		) }}" alt="">
                                                <div class="products-details 
                                                	animate">
                                                    <div class="products-header">
                                                    </div>
                                                    <div class="products-detail">
                                                        <p>bánh kem socola đường
                                                        	</p>
                                                        <div class="social">
                                                            <a href="" 
                                                            class="social-icon 
                                                            facebook animate">
                                                            <span class="fa 
                                                            fa-facebook"></span>
                                                            </a>
                                                            <a href="" 
                                                            class="social-icon 
                                                            twitter animate">
                                                            <span class="fa 
                                                            fa-twitter"></span>
                                                            </a> 
                                                            <a href="" 
                                                            class="social-icon 
                                                            google-plus 
                                                            animate"><span 
                                                            class="fa 
                                                            fa-google-plus">
                                                            </span></a>
                                                        </div>
                                                    </div> <!-- .products-detai -->
                                                </div> <!-- animate -->
                                            </div> <!-- .products -->
                                        </div> <!-- End single-item-header -->

                                        <div class="single-item-body">
                                            <p class="single-item-title">
                                            	Bánh kem socola </p>
                                            <p class="single-item-price">
                                                Giá: <span>100.000</span> VND
                                            </p>
                                        </div> <!-- End single-item-body -->

                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" 
                                            	href="shopping_cart.html">
                                            	<i class="fa fa-shopping-cart">
                                            	</i></a>
                                            <a class="beta-btn primary" 
                                            	href="product.html">Details 
                                            	<i class="fa fa-chevron-right">
                                            	</i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                            </div> <!-- .row -->
                            <div class="clearfix"></div>
                        </div> <!-- .each-list -->
                    </div> <!-- .col-sm-3 -->

                    <div class="col-sm-3">
                        <div class="each-list">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" src="{{ asset(
                                            		'customer\images\products\banh-kem-01.jpg'
                                            		) }}" alt="">
                                                <div class="products-details 
                                                	animate">
                                                    <div class="products-header">
                                                    </div>
                                                    <div class="products-detail">
                                                        <p>bánh kem socola đường
                                                        	</p>
                                                        <div class="social">
                                                            <a href="" 
                                                            class="social-icon 
                                                            facebook animate">
                                                            <span class="fa 
                                                            fa-facebook"></span>
                                                            </a>
                                                            <a href="" 
                                                            class="social-icon 
                                                            twitter animate">
                                                            <span class="fa 
                                                            fa-twitter"></span>
                                                            </a> 
                                                            <a href="" 
                                                            class="social-icon 
                                                            google-plus 
                                                            animate"><span 
                                                            class="fa 
                                                            fa-google-plus">
                                                            </span></a>
                                                        </div>
                                                    </div> <!-- .products-detai -->
                                                </div> <!-- animate -->
                                            </div> <!-- .products -->
                                        </div> <!-- End single-item-header -->

                                        <div class="single-item-body">
                                            <p class="single-item-title">
                                            	Bánh kem socola </p>
                                            <p class="single-item-price">
                                                Giá: <span>100.000</span> VND
                                            </p>
                                        </div> <!-- End single-item-body -->

                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" 
                                            	href="shopping_cart.html">
                                            	<i class="fa fa-shopping-cart">
                                            	</i></a>
                                            <a class="beta-btn primary" 
                                            	href="product.html">Details 
                                            	<i class="fa fa-chevron-right">
                                            	</i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                            </div> <!-- .row -->
                            <div class="clearfix"></div>
                        </div> <!-- .each-list -->
                    </div> <!-- .col-sm-3 -->

                    <div class="col-sm-3">
                        <div class="each-list">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" src="{{ asset(
                                            		'customer\images\products\banh-kem-01.jpg'
                                            		) }}" alt="">
                                                <div class="products-details 
                                                	animate">
                                                    <div class="products-header">
                                                    </div>
                                                    <div class="products-detail">
                                                        <p>bánh kem socola đường
                                                        	</p>
                                                        <div class="social">
                                                            <a href="" 
                                                            class="social-icon 
                                                            facebook animate">
                                                            <span class="fa 
                                                            fa-facebook"></span>
                                                            </a>
                                                            <a href="" 
                                                            class="social-icon 
                                                            twitter animate">
                                                            <span class="fa 
                                                            fa-twitter"></span>
                                                            </a> 
                                                            <a href="" 
                                                            class="social-icon 
                                                            google-plus 
                                                            animate"><span 
                                                            class="fa 
                                                            fa-google-plus">
                                                            </span></a>
                                                        </div>
                                                    </div> <!-- .products-detai -->
                                                </div> <!-- animate -->
                                            </div> <!-- .products -->
                                        </div> <!-- End single-item-header -->

                                        <div class="single-item-body">
                                            <p class="single-item-title">
                                            	Bánh kem socola </p>
                                            <p class="single-item-price">
                                                Giá: <span>100.000</span> VND
                                            </p>
                                        </div> <!-- End single-item-body -->

                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" 
                                            	href="shopping_cart.html">
                                            	<i class="fa fa-shopping-cart">
                                            	</i></a>
                                            <a class="beta-btn primary" 
                                            	href="product.html">Details 
                                            	<i class="fa fa-chevron-right">
                                            	</i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                            </div> <!-- .row -->
                            <div class="clearfix"></div>
                        </div> <!-- .each-list -->
                    </div> <!-- .col-sm-3 -->

                    <div class="col-sm-3">
                        <div class="each-list">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" src="{{ asset(
                                            		'customer\images\products\banh-kem-01.jpg'
                                            		) }}" alt="">
                                                <div class="products-details 
                                                	animate">
                                                    <div class="products-header">
                                                    </div>
                                                    <div class="products-detail">
                                                        <p>bánh kem socola đường
                                                        	</p>
                                                        <div class="social">
                                                            <a href="" 
                                                            class="social-icon 
                                                            facebook animate">
                                                            <span class="fa 
                                                            fa-facebook"></span>
                                                            </a>
                                                            <a href="" 
                                                            class="social-icon 
                                                            twitter animate">
                                                            <span class="fa 
                                                            fa-twitter"></span>
                                                            </a> 
                                                            <a href="" 
                                                            class="social-icon 
                                                            google-plus 
                                                            animate"><span 
                                                            class="fa 
                                                            fa-google-plus">
                                                            </span></a>
                                                        </div>
                                                    </div> <!-- .products-detai -->
                                                </div> <!-- animate -->
                                            </div> <!-- .products -->
                                        </div> <!-- End single-item-header -->

                                        <div class="single-item-body">
                                            <p class="single-item-title">
                                            	Bánh kem socola </p>
                                            <p class="single-item-price">
                                                Giá: <span>100.000</span> VND
                                            </p>
                                        </div> <!-- End single-item-body -->

                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" 
                                            	href="shopping_cart.html">
                                            	<i class="fa fa-shopping-cart">
                                            	</i></a>
                                            <a class="beta-btn primary" 
                                            	href="product.html">Details 
                                            	<i class="fa fa-chevron-right">
                                            	</i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                            </div> <!-- .row -->
                            <div class="clearfix"></div>
                        </div> <!-- .each-list -->
                    </div> <!-- .col-sm-3 -->
                    <!-- <div class="clearfix"></div> -->
                </div> <!-- .row -->
            </div> <!-- .col-sm-12 -->
        </div> <!-- .content -->
        <div class="col-sm-12">
        	<div class="pull-right">
	            <ul class="pagination">
	                <li><a href="#">1</a></li>
	                <li class="active"><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	            </ul>
	        </div> <!-- .pull-right -->
        </div> <!-- .row -->
    </div> <!-- End container -->
</div> <!-- End content-product_type-->

@endsection