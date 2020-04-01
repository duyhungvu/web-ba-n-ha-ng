@extends('admin_layout') @section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm thương hiệu sản phẩm
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
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">tên thương hiệu</label>
                                <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="ten danh muc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">mô tả thương hiệu</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="mo ta danh muc"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">hiển thị</label>
                                <select name="brand_product_status" class="form-control input-sm m-bot15">
                                    <option value="0">ẩn</option>
                                    <option value="1">hiển thị</option>

                                </select>
                            </div>

                            <button type="submit" name="add_brand_product" class="btn btn-info">thêm</button>
                        </form>
                    </div>
                    @endsection