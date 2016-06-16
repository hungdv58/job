
@extends('templates.home')
@section('menu')
<li><a href="congviec">Tìm việc <span class="sr-only">(current)</span></a></li>
<li><a href="sinhvien">Tuyển người </a></li>
@stop
@section('content')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border" style="background-color:steelblue">
            <div class="box-title" style="color: white">
                Đăng nhập
            </div>
        </div>
        <div class="box-header with-border">
            <form>
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Đăng nhập">
            </div>
            <div >
                <a href="#">Quên mật khẩu</a>

            </div>
            <div >

                <a href="#">Đăng kí</a>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
