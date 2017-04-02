@extends('client.layout.layout_client')

@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- End inner-header -->


<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <h2 class="color-full">ĐẶT HÀNG</h2>
            <hr>
            <form action="#" method="post" class="beta-form-checkout">
                <div class="row">
                    <div class="col-sm-6 form-left">
                        <div class="your-order-head">
                        	<h4>Thông tin</h4>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block form-group">
                            <div class="col-md-3">
                                <label for="name">Họ tên*</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="name" 
                                	name="name" placeholder="Họ tên" 
                                	class="form-control" required>
                            </div>                                        
                        </div> <!-- .form-block -->

                        <div class="form-block form-group">
                            <div class="col-md-3">
                                <label for="gender">Giới tính </label>
                            </div>
                            <div class="col-md-9" 
                            	style="text-align: center;">
                                <input id="gender" type="radio" 
                                	class="input-radio" name="gender" 
                                	value="nam" checked="checked" 
                                	style="width: 10%">
                                	<span style="margin-right:5%">Nam</span>
                                <input id="gender" type="radio" 
                                	class="input-radio" name="gender" 
                                	value="nữ" style="width: 10%">
                                	<span>Nữ</span>
                            </div>                    
                        </div> <!-- .form-block -->
                        
                        <div class="form-block form-group">
                            <div class="col-md-3">
                                <label for="email">Email*</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" id="email" name="email" 
                                	placeholder="expample@gmail.com" 
                                	class="form-control" required>
                            </div>                                        
                        </div> <!-- .form-block -->                            

                        <div class="form-block form-group">
                            <div class="col-md-3">
                                <label for="phone">Điện thoại*</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="phone" 
                                	placeholder="Số điện thoại" 
                                	class="form-control" required>
                            </div>                                        
                        </div> <!-- .form-block -->

                        <div class="form-block form-group">
                            <div class="col-md-3">
                                <label for="status">Ghi chú</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="status" rows="6" 
                                	class="form-control"></textarea>
                            </div>                                        
                        </div> <!-- .form-block -->
                    </div> <!-- .form-left -->
                    <div class="col-sm-6 in-order">
                        <div class="your-order">
                            <div class="your-order-head">
                            	<h4>Đơn hàng của bạn</h4></div>
                            <div class="your-order-body">
                                <div class="your-order-item">
                                    <div>
                                    <!--  one item   -->
                                        <div class="media">
                                            <img width="25%" src="{{ asset('customer\images\products\banh-kem-01.jpg') 
                                                }}" alt="" class="pull-left" 
                                            	style="margin-top: 13px;">
                                            <div class="media-body-checkout">
                                                <h3 class="font-large">
                                                	Bánh số 1</h3>
                                                <span class="your-order-info" 
                                                	style="color: grey">
                                                	Số lượng: 1</span> <br>
                                                <span class="your-order-info" 
                                                	style="color: grey">
                                                	Giá: 20000</span>
                                            </div>
                                        </div> <!-- .media -->
                                        <hr>
                                        <div class="media">
                                            <img width="25%" src="{{ asset('customer\images\products\banh-kem-01.jpg') 
                                                }}" alt="" class="pull-left" 
                                                style="margin-top: 13px;">
                                            <div class="media-body-checkout">
                                                <h3 class="font-large">
                                                    Bánh số 1</h3>
                                                <span class="your-order-info" 
                                                    style="color: grey">
                                                    Số lượng: 1</span> <br>
                                                <span class="your-order-info" 
                                                    style="color: grey">
                                                    Giá: 20000</span>
                                            </div>
                                        </div> <!-- .media -->
                                        <hr>
                                        <div class="media">
                                            <img width="25%" src="{{ asset('customer\images\products\banh-kem-01.jpg') 
                                                }}" alt="" class="pull-left" 
                                                style="margin-top: 13px;">
                                            <div class="media-body-checkout">
                                                <h3 class="font-large">
                                                    Bánh số 1</h3>
                                                <span class="your-order-info" 
                                                    style="color: grey">
                                                    Số lượng: 1</span> <br>
                                                <span class="your-order-info" 
                                                    style="color: grey">
                                                    Giá: 20000</span>
                                            </div>
                                        </div> <!-- .media -->
                                        <hr>
                                    <!-- end one item -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="your-order-item">
                                    <div class="pull-left">
                                    	<p class="your-order-f18">Tổng tiền:
                                    	</p></div>
                                    <div class="pull-right">
                                    	<h5 class="color-black">$235.00</h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- .your-order-item -->
                            </div>
                            <div class="your-order-head">
                            	<h4>Hình thức thanh toán</h4></div>           
                            <div class="your-order-body">
                                <div class="payment_methods methods">
                                    <div class="payment_method_bacs">
                                        <input id="payment_method_bacs" 
                                        	type="radio" class="input-radio" 
                                        	name="payment_method" value="COD" 
                                        	checked="checked" 
                                        	data-order_button_text="">
                                        <label for="payment_method_bacs">
                                        	Thanh toán khi nhận hàng </label>
                                        <div class="clearfix"></div>
                                        <div class="payment_box 
                                        	payment_method_bacs_model" 
                                        	style="display: block;">
                                            Cửa hàng sẽ gửi hàng đến địa chỉ của 
                                            bạn, bạn xem hàng rồi thanh toán 
                                            tiền cho nhân viên giao hàng
                                        </div>                   
                                    </div> <!-- .payment_method_bacs -->

                                    <div class="payment_method_cheque">
                                        <input id="payment_method_cheque" 
                                        	type="radio" class="input-radio" 
                                        	name="payment_method" 
                                        	value="ATM" 
                                        	data-order_button_text="">
                                        <label for="payment_method_cheque">
                                        	Chuyển khoản </label>
                                        <div class="clearfix"></div>
                                        <div class="payment_box 
                                        	payment_method_cheque_model" 
                                        	style="display: none;">
                                            Chuyển tiền đến tài khoản sau:
                                            <input type="text" name="cart" 
                                            value="" class="form-control" 
                                            placeholder="">
                                        </div>                   
                                    </div> <!-- .payment_method_cheque -->
                                </div> <!-- .payment_method_methods -->
                            </div> <!-- .your-order-body -->

                            <div class="btn-order"><a class="beta-btn primary" 
                            	href="#">Đặt hàng 
                            	<i class="fa fa-chevron-right"></i></a></div>
                        </div> <!-- .your-order -->
                    </div> <!-- .in-order -->
                </div> <!-- .row -->
            </form>
        </div> <!-- .col-md-12 -->
    </div> <!-- .row -->
</div> <!-- End container -->

@endsection