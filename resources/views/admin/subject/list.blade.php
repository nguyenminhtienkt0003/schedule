@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Môn Học
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên Môn Học</th>
                        <th class="text-center">Số Tín Chỉ</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($subject as $s)
                    <tr class="odd gradeX">
                        <td value="id">{{$s->id}}</td>
                        <td value="name_user">{{$s->Name}}</td>
                        <td value="email">{{$s->Credit}}</td>   
                        <td type="hidden" class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        <a href="admin/subject/delete/{{$s->id}}"> Delete</a>
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i>
                         <a href="admin/subject/edit/{{$s->id}}">Edit</a>
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