@extends('admin_layout') @section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            thông tin khách hàng
        </div>
        <div class="table-responsive">
        <?php 
	                     $message = Session::get('message');
	                     if($message){
		                 echo $message;
		                 Session::put('message',null);
	                       }
	                    ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>tên khách hàng</th>
                        <th>số điện thoại</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
           thông tin vận chuyển
        </div>
        <div class="table-responsive">
        <?php 
	                     $message = Session::get('message');
	                     if($message){
		                 echo $message;
		                 Session::put('message',null);
	                       }
	                    ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>tên bưu chí</th>
                        <th>Địa chỉ</th>
                        <th>số điện thoại</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br></br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt Kê chi tiết order
        </div>
        <div class="table-responsive">
        <?php 
	                     $message = Session::get('message');
	                     if($message){
		                 echo $message;
		                 Session::put('message',null);
	                       }
	                    ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>tên sản phẩm</th>
                        <th>tổng giá tiền</th>
                        <th>số lương</th>
                        <th>tổng tiền</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection