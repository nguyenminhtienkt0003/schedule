@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đăng Ký
                    <small>Thêm người dùng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @can('create.users')
                <form action="admin/users/insert" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" name="username" placeholder="Vui lòng nhập họ tên..." />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type ="email" class="form-control" name="email" placeholder="Vui lòng nhập Email..." />
                    </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password"  class="form-control" name="password" placeholder="Vui lòng nhập mật khẩu..." />
                    </div>
                     <div class="form-group">
                        <label>Nhập lại Password</label>
                        <input type="password" class="form-control" name="passwordAgain" placeholder="Vui lòng nhập lại mật khẩu..." />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" placeholder="Vui lòng nhập địa chỉ..." />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="phone" placeholder="Vui lòng nhập số điện thoại" />
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Nữ
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label>Quyền</label>
                        <select class="form-control" name="role">
                            @foreach($role as $r)
                                <option name="role" value="{{$r->id}}" >{{$r->Role}}</option>
                            @endforeach
                        </select>

                    </div>
                
                    <button type="submit" class="btn btn-default">Register</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            @endcan
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection