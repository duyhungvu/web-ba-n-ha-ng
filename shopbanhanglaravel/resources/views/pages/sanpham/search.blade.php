@extends('welcome') @section('content')
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Tìm kiếm</h2> 
    @foreach($search_product as $key => $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
        <a href="#">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL::to('public/upload/Product/'.$product->product_image)}}" alt="" />
                    <h2>{{number_format($product->product_price).' '.'VND'}}</h2>
                    <p>{{($product->product_name)}}</p>
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i></i>chi tiết sản phẩm</a>
                </div>
            </div>
        </a>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection