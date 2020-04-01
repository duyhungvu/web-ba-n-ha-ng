@extends('admin_layout') @section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
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
                        <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">giá sản phẩm</label>
                                <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputPassword1">nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_content" id="exampleInputPassword1" 
                                placeholder="mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" 
                                placeholder="mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nhãn hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand )

                                    <option value=" {{$brand ->brand_id}} "> {{$brand ->brand_name}} </option>
                                   
                                @endforeach  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate )
                                    <option value="{{$cate ->category_id}}">{{$cate ->category_name}}</option>
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

                            <button type="submit" name="add_product" class="btn btn-info">thêm</button>
                        </form>
                    </div>
                    @endsection