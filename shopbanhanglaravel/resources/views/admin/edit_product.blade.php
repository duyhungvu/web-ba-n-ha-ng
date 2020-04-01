@extends('admin_layout') @section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                update sản phẩm
            </header>
            <div class="panel-body">
                <?php 
	                     $message = Session::get('message');
	                     if($message){
		                 echo $message;
		                 Session::put('message',null);
	                       }
	                    ?>
                    <div class="position-center">
                        @foreach($edit_product as $key => $pro)
                        <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">giá sản phẩm</label>
                                <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{$pro->product_price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                <img src="{{URL::to('public/upload/Product/'.$pro->product_image)}}" hight="100" width="100">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_content" id="exampleInputPassword1" 
                                >{{$pro->product_content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" 
                               >{{$pro->product_desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nhãn hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $key => $brand )
                                    @if($brand->brand_id ==$pro->brand_id)
                                    <option selected value=" {{$brand ->brand_id}} "> {{$brand ->brand_name}} </option>
                                    @esle
                                    <option value=" {{$brand ->brand_id}} "> {{$brand ->brand_name}} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate )
                                    @if($cate->category_id ==$pro->category_id)
                                    <option selected value="{{$cate ->category_id}}">{{$cate ->category_name}}</option>
                                    @else
                                    <option value="{{$cate ->category_id}}">{{$cate ->category_name}}</option>
                                    @endif
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">ẩn</option>
                                    <option value="1">hiển thị</option>

                                </select>
                            </div>

                            <button type="submit" name="edit_product" class="btn btn-info">update</button>
                        </form>
                        @endforeach
                    </div>
            </div>
    </div>
</div>    
@endsection