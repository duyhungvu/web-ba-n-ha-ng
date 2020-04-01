@extends('welcome') 
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
<!--/checkout-options-->

			<div class="register-req">
				<p>Lưu ý đăng nhập tài khoản trước khi thanh toán</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">	
								{{ csrf_field() }}								
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_address" placeholder="Địa chỉ">									
								    <input type="text" name="shipping_phone" placeholder="phone number">
									<textarea name="shipping_notes"  placeholder="ghi chú đơn hàng" rows="16"></textarea>
									<input class="btn btn-primary btn-sm" type="submit" name="send_order" value="thanh toán" >
								</form>
							</div>
						
						</div>
					</div>					
				</div>
			</div>
			<div class="review-payment" style="font-size: 30px;margin-bottom: 40px;">
				<h2>xem lại giỏ hàng</h2>
			</div>			
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

@endsection