@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm
                    <small>Lịch Bận</small>
                </h1>
            </div>
            
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            
                <form action="admin/busy-schedule/insert" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Giảng Viên</label>
                        <input class="form-control" name="username" value="{{-- {{$users->Name}} --}}" disabled="" />
                    </div>
                      <div class="form-group">
                        <label>Buổi Học</label>
                        <select class="form-control" name="week" id="week">
                            @foreach($week as $w)
                                <option  value="{{$w->id}}">{{$w->Day_week}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                        <label>Tiết Bắt Đầu</label>
                        <select class="form-control" name="id_period_start" id="id_period_start">
                            @foreach($period as $p)
                                <option  value="{{$p->id}}">{{$p->Name_period}}</option>
                            @endforeach
                        </select>
                    </div>
                       <div class="form-group">
                        <label>Tiết Kết Thúc</label>
                        <select class="form-control" name="id_period_start" id="id_period_start">
                            @foreach($period as $p)
                                <option  value="{{$p->id}}">{{$p->Name_period}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm lịch</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach()
                    </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection