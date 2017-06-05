@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giảng Viên - Môn Học
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
                <thead>

                    <tr align="center">
                        <th class="text-center">id</th>
                        <th class="text-center">Tên Giảng Viên</th>
                        <th class="text-center">Tên Môn Học</th>
                        
                    </tr>
                </thead>
                <tbody>
                     @foreach($users_subject as $us)
                    <tr class="odd gradeX">
                        <td value="id">{{$us->id}}</td>
                        <td value="name_user">{{$us->users->Name}}</td>
                        <td value="time_start">{!! $us->subject->Name !!}</td> 
                       
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