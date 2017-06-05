@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tiết Học
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
                <thead>

                    <tr align="center">
                        <th class="text-center">id</th>
                        <th class="text-center">Tiết học</th>
                        <th class="text-center">Thời gian bắt đầu</th>
                        <th class="text-center">Thời gian kết thúc</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($period as $p)
                    <tr class="odd gradeX">
                        <td value="id">{{$p->id}}</td>
                        <td value="name_user">{{$p->Name_period}}</td>
                        <td value="time_start">{!! $p->Time_Start !!}</td> 
                        <td value="time_end">{{$p->Time_End}}</td> 
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection