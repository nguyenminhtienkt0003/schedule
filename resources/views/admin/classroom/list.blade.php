@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phòng
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
                <thead>

                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên Phòng</th>
                        <th class="text-center">Tình Trạng</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                        
                    </tr>
                </thead>
                <tbody>
                     @foreach($classroom as $c)
                    <tr class="odd gradeX">
                        <td value="id">{{$c->id}}</td>
                        <td value="name_user">{{$c->Name_Classroom}}</td>
                        <td value="status">{{$c->Status}}</td>
                   
                        <td type="hidden" class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        
                        <a href="admin/classroom/delete/{{$c->id}}"> Delete</a>
                        
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        
                         <a href="admin/classroom/edit/{{$c->id}}">Edit</a>
                        
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