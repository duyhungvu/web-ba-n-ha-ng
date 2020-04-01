@extends('welcome') 
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			<?php
			$content = Cart::content();
			?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/upload/Product/'. $v_content->options->image)}}" width="50" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).''.'vnd'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('update-cart-quantity')}}"
									method="POST">
									{{ csrf_field() }}

									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" autocomplete="off" size="2">
									<input class="" type="hidden" name="rowId_cart" value="{{$v_content->rowId}}">
									<input class="btn btn-default btn-sm" type="submit" name="update_qty" value="update" >
								
                                    </form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								{{Cart::subtotal().''.'vnd'}}
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'. $v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>	
						@endforeach					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng <span>{{Cart::subtotal().''.'vnd'}}</span></li>
							<li>thuế <span>{{Cart::tax().''.'vnd'}}</span></li>
							<li>phí vận chuyển <span>Free</span></li>
							<li>thành tiền <span>
							{{Cart::total().''.'vnd'}}
							</span></li>
						</ul>
						<?php 
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=null){
                                ?>
                                <a class="btn btn-default check_out" type="submit" href="{{URL::to('/show-checkout')}}">check out</a>                                
                        <?php
                                }else{
                                ?>
                                <a class="btn btn-default check_out" type="submit" href="{{URL::to('/login-checkout')}}">check out</a>
                                 <?php
                                 }
                                 ?>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection
