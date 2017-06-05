@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Thêm schedule</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            
                <form action="admin/schedule/insert" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <div class="form-group">
                        <label>Học Kỳ</label>
                        <select class="form-control" name="semester" id="semester">
                            @foreach($semester as $s)
                                <option  value="{{$s->id}}">{{$s->Name_semester}} // {{$s->Year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Môn Học</label>
                        <select class="form-control" name="subject" id="subject">
                            @foreach($subject as $s)
                                <option  value="{{$s->id}}">{{$s->Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phòng Học</label>
                        <select class="form-control" name="classroom" id="classroom">
                            @foreach($classroom as $c)
                                <option  value="{{$c->id}}">{{$c->Name_Classroom}}</option>
                            @endforeach
                        </select>
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
                        <select class="form-control" name="start_period" id="start_period">
                            @foreach($period as $p)
                                <option  value="{{$p->id}}">{{$p->Name_period}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm Schedule</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection