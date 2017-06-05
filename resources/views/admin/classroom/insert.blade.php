@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm
                    <small>Phòng</small>
                </h1>
            </div>
            
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            
                <form action="admin/classroom/insert" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Phòng</label>
                        <input class="form-control" name="name" placeholder="Vui lòng nhập họ tên..." />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm phòng</button>
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