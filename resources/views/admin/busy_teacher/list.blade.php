@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lịch Bận
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
                <thead>

                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên Giảng Viên</th>
                        <th class="text-center">Buổi</th>
                        <th class="text-center">Tiết Bắt Đầu</th> 
                        <th class="text-center">Tiết Kết Thúc</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                        
                    </tr>
                </thead>
                <tbody>
                     @foreach($busy_teacher as $bs)
                    <tr class="odd gradeX">
                        <td value="id">{{$bs->id}}</td>
                        <td value="name_user">{{$bs->users->Name}}</td>
                        <td value="status">{{$bs->week->Day_week}}</td>
                        <td value="status">{{$bs->id_period_start}}</td>
                         <td value="status">{{$bs->id_period_end}}</td>
                        
                   
                        <td type="hidden" class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        
                        <a href="admin/busy-schedule/delete/{{$bs->id}}"> Delete</a>
                        
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        
                         <a href="admin/busy-schedule/edit/{{$bs->id}}">Edit</a>
                        
                         </td>
                    
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