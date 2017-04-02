@extends('client.layout.layout_client')

@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> <!-- End container -->
</div> <!-- End inner-header -->

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">
                <h2 class="color-full">SẢN PHẨM CHI TIẾT</h2>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#info-img"><img src="{{ asset('customer\images\products\banh-kem-01.jpg') }}" class="img-responsive" alt=""></button>
                        <div id="info-img" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{ asset('customer\images\products\banh-kem-01.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div> <!-- .model-content -->
                            </div> <!-- .model-dialog -->
                        </div> <!-- .model -->
                    </div> <!-- .col-sm-4 -->
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <h3 class="single-item-title">Bánh kem 01</h3>
                            <hr>
                            <h4>
                                Mã sản phẩm: <span>12345</span>
                            </h4>
                            <hr>
                            <h3 class="single-item-price">
                                Giá: <span class="promotion-price">34.000</span> VND <i class="glyphicon glyphicon-chevron-down"></i><span class="price-each"> 30.000</span> VND
                            </h3>
                            <hr>
                        </div>

                        <div class="clearfix"></div>

                        <div class="single-item-desc">
                            <button class="btn btn-info btn-xs"><i class=" glyphicon glyphicon-thumbs-up"></i> like</button> : 10
                            <br>
                            <button class="btn btn-danger btn-xs"><i class=" glyphicon glyphicon-thumbs-down"></i> dislike</button> :1
                        </div>
                        <hr>

                        <div class="single-item-options form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label for="wc-select"><span class="product-single-item-span">Số lượng: </label>
                                </div>
                                <div class="col-xs-2">
                                    <select class="wc-select form-control" id="wc-select" name="color">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div> <!-- .row -->
                            <hr>
                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div> <!-- .single-item-options -->
                    </div> <!-- .col-sm-8 -->
                </div> <!-- .row -->

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description" class="color-full" style="font-size: 20px;">Mô tả</a></li>
                    </ul>
                    <div class="space15">&nbsp;</div>
                    <div class="panel" id="tab-description">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div> <!-- .woocommerce-tabs -->
            </div> <!-- .col-sm-9 -->
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h4 class="color-full">SẢN PHẨM CÙNG LOẠI</h4>
                    <hr>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists row">
                            <div class="each-list">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" 
                                            	src="{{ asset(
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
                                                            <a href="" class="
                                                            social-icon facebook 
                                                            animate"><span 
                                                            class="fa 
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
                                                    </div>  <!-- .products-header -->
                                                </div> <!-- .products-details -->
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
                                            href="product.html">Details <i 
                                            class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                                <div class="clearfix"></div>
                            </div> <!-- .each-list -->

                            <div class="each-list">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <div class="products"> <img 
                                            	style="width: 100%" 
                                            	src="{{ asset(
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
                                                            <a href="" class="
                                                            social-icon facebook 
                                                            animate"><span 
                                                            class="fa 
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
                                                    </div>  <!-- .products-header -->
                                                </div> <!-- .products-details -->
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
                                            href="product.html">Details <i 
                                            class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div> <!-- End single-item-caption -->
                                    </div> <!-- End single-item -->
                                </div> <!-- .col-xs-10 -->
                                <div class="clearfix"></div>
                            </div> <!-- .each-list -->
                        </div> <!-- .beta-lists -->
                    </div> <!-- .widget-body -->
                </div> <!-- best sellers widget -->
            </div> <!-- .aside .col-sm-3 -->
            <div class="clearfix"></div>
        </div> <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
	            <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h3 class="color-full">SẢN PHẨM ĐANG BÁN CHẠY</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <div class="products"> <img 
                                    	style="width: 100%" src="{{ asset(
                                    		'customer\images\products\banh-kem-01.jpg'
                                    		) }}" alt="">
                                        <div class="products-details animate">
                                            <div class="products-header">
                                            </div>
                                            <div class="products-detail">
                                            	<p>bánh kem socola đường</p>
                                            	<div class="social">
	                                                <a href="" class="social-icon 
	                                                facebook animate"><span 
	                                                class="fa fa-facebook">
	                                                </span></a>
	                                                <a href="" class="social-icon 
	                                                twitter animate"><span 
	                                                class="fa fa-twitter"></span>
	                                                </a> <a href="" 
	                                                class="social-icon 
	                                                google-plus animate"><span 
	                                                class="fa fa-google-plus">
	                                                </span></a>
                                            	</div>
                                        	</div> <!-- .products-detail -->
                                    	</div> <!-- .products -->
                                	</div> <!-- End single-item-header -->
                            	</div> <!-- .single-item -->

	                            <div class="single-item-body">
	                                <p class="single-item-title">Bánh kem socola 
	                                	</p>
	                                <p class="single-item-price">
	                                    Giá: <span>100.000</span> VND
	                                </p>
	                            </div> <!-- End single-item-body -->

                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" 
                                    	href="shopping_cart.html"><i 
                                    	class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" 
                                    	href="product.html">Details <i class="fa 
                                    	fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div> <!-- End single-item-caption -->
                            </div> <!-- End single-item -->
                        </div> <!-- End col-sm-3 -->

                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <div class="products"> <img 
                                    	style="width: 100%" src="{{ asset(
                                    		'customer\images\products\banh-kem-01.jpg'
                                    		) }}" alt="">
                                        <div class="products-details animate">
                                            <div class="products-header">
                                            </div>
                                            <div class="products-detail">
                                            	<p>bánh kem socola đường</p>
                                            	<div class="social">
	                                                <a href="" class="social-icon 
	                                                facebook animate"><span 
	                                                class="fa fa-facebook">
	                                                </span></a>
	                                                <a href="" class="social-icon 
	                                                twitter animate"><span 
	                                                class="fa fa-twitter"></span>
	                                                </a> <a href="" 
	                                                class="social-icon 
	                                                google-plus animate"><span 
	                                                class="fa fa-google-plus">
	                                                </span></a>
                                            	</div>
                                        	</div> <!-- .products-detail -->
                                    	</div> <!-- .products -->
                                	</div> <!-- End single-item-header -->
                            	</div> <!-- .single-item -->

	                            <div class="single-item-body">
	                                <p class="single-item-title">Bánh kem socola 
	                                	</p>
	                                <p class="single-item-price">
	                                    Giá: <span>100.000</span> VND
	                                </p>
	                            </div> <!-- End single-item-body -->

                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" 
                                    	href="shopping_cart.html"><i 
                                    	class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" 
                                    	href="product.html">Details <i class="fa 
                                    	fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div> <!-- End single-item-caption -->
                            </div> <!-- End single-item -->
                        </div> <!-- End col-sm-3 -->

                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <div class="products"> <img 
                                    	style="width: 100%" src="{{ asset(
                                    		'customer\images\products\banh-kem-01.jpg'
                                    		) }}" alt="">
                                        <div class="products-details animate">
                                            <div class="products-header">
                                            </div>
                                            <div class="products-detail">
                                            	<p>bánh kem socola đường</p>
                                            	<div class="social">
	                                                <a href="" class="social-icon 
	                                                facebook animate"><span 
	                                                class="fa fa-facebook">
	                                                </span></a>
	                                                <a href="" class="social-icon 
	                                                twitter animate"><span 
	                                                class="fa fa-twitter"></span>
	                                                </a> <a href="" 
	                                                class="social-icon 
	                                                google-plus animate"><span 
	                                                class="fa fa-google-plus">
	                                                </span></a>
                                            	</div>
                                        	</div> <!-- .products-detail -->
                                    	</div> <!-- .products -->
                                	</div> <!-- End single-item-header -->
                            	</div> <!-- .single-item -->

	                            <div class="single-item-body">
	                                <p class="single-item-title">Bánh kem socola 
	                                	</p>
	                                <p class="single-item-price">
	                                    Giá: <span>100.000</span> VND
	                                </p>
	                            </div> <!-- End single-item-body -->

                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" 
                                    	href="shopping_cart.html"><i 
                                    	class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" 
                                    	href="product.html">Details <i class="fa 
                                    	fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div> <!-- End single-item-caption -->
                            </div> <!-- End single-item -->
                        </div> <!-- End col-sm-3 -->

                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <div class="products"> <img 
                                    	style="width: 100%" src="{{ asset(
                                    		'customer\images\products\banh-kem-01.jpg'
                                    		) }}" alt="">
                                        <div class="products-details animate">
                                            <div class="products-header">
                                            </div>
                                            <div class="products-detail">
                                            	<p>bánh kem socola đường</p>
                                            	<div class="social">
	                                                <a href="" class="social-icon 
	                                                facebook animate"><span 
	                                                class="fa fa-facebook">
	                                                </span></a>
	                                                <a href="" class="social-icon 
	                                                twitter animate"><span 
	                                                class="fa fa-twitter"></span>
	                                                </a> <a href="" 
	                                                class="social-icon 
	                                                google-plus animate"><span 
	                                                class="fa fa-google-plus">
	                                                </span></a>
                                            	</div>
                                        	</div> <!-- .products-detail -->
                                    	</div> <!-- .products -->
                                	</div> <!-- End single-item-header -->
                            	</div> <!-- .single-item -->

	                            <div class="single-item-body">
	                                <p class="single-item-title">Bánh kem socola 
	                                	</p>
	                                <p class="single-item-price">
	                                    Giá: <span>100.000</span> VND
	                                </p>
	                            </div> <!-- End single-item-body -->

                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" 
                                    	href="shopping_cart.html"><i 
                                    	class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" 
                                    	href="product.html">Details <i class="fa 
                                    	fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div> <!-- End single-item-caption -->
                            </div> <!-- End single-item -->
                        </div> <!-- End col-sm-3 -->
                    </div> <!-- End row -->
                </div> <!-- End beta-products-list -->
            </div> <!-- .col-sm-12 -->
        </div> <!-- .row-->
    </div> <!-- #content -->
</div> <!-- .container -->
<!-- End content -->

@endsection