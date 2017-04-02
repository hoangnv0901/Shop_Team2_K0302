@extends("client.layout.layout_client")

@section('content')
<div class="inner-header">
    <div class="container">
        <!--<div class="pull-left">-->
        <!--<h6 class="inner-title">Đăng kí</h6>-->
        <!--</div>-->
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Trang chủ</a> / <span>Đăng nhập</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Container -->
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-login">
            <br>
                <fieldset>
                    <legend>Đăng nhập</legend>
                    <form action="#" method="post" class="beta-form-checkout">
                        <div class="space20">&nbsp;</div>
                        <div class="form-group form-block">
                            <label for="email">
                                <i class="glyphicon glyphicon-envelope"></i> 
                                Email address</label>
                            <input type="email" class="form-control" id="email" 
                                placeholder="Email" required>
                        </div>
                        <div class="form-group form-block">
                            <label for="phone">
                                <i class="glyphicon glyphicon-lock"></i> Password
                            </label>
                            <input type="password" class="form-control" 
                                id="phone" placeholder="Password" required>
                        </div>
                        <button type="submit" 
                            class="btn btn-default submit-beta-form-checkout">
                            Submit</button>
                    </form>
                </fieldset>
                <br>
            </div> 
        </div> <!-- .form-login -->
    </div> <!-- #content -->
</div> <!-- .container -->
<!-- End container -->
@endsection