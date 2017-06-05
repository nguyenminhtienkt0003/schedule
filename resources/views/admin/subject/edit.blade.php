@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @can('edit.users')
                <form action="admin/users/edit/{{$user->id}}" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" name="username" value="{{$user->name}}" placeholder="Vui lòng nhập họ tên..." />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type ="email" class="form-control" name="email" readonly="" value="{{$user->email}}" placeholder="Vui lòng nhập Email..." />
                    </div>
                     <div class="form-group">
                        <input type="checkbox" id="changePass" name="changePass">
                        <label>Đổi mật khẩu</label>
                        <input type="password"  class="form-control password" disabled="" name="password" placeholder="Vui lòng nhập mật khẩu..." />
                    </div>
                     <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control password" disabled="" name="passwordAgain" placeholder="Vui lòng nhập lại mật khẩu..." />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" value="{{$user->Address}}" placeholder="Vui lòng nhập địa chỉ..." />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="phone" value="{{$user->Phone}}" placeholder="Vui lòng nhập số điện thoại" />
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <label class="radio-inline">
                             <input name="sex" value="0" 
                             @if($user->Sex==0)
                                {{"checked"}}
                            @endif
                              type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="sex" value="1" 
                            @if($user->Sex==1)
                                {{"checked"}}
                            @endif
                            type="radio">Nữ
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <select class="form-control" name="role">
                            @foreach($role as $r)
                                <option 
                                    @if($user->id_Role == $r->id)
                                        {{"selected"}}
                                    @endif
                                value="{{$r->id}}">{{$r->Role}}</option>          
                            @endforeach
                        </select>

                    </div>
                
                    <button type="submit" class="btn btn-default">Sửa</button>
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

@section('Script')
    <script>
        $(document).ready(function(){
            $("#changePass").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection