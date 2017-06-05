@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giảng viên
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            
                <thead>

                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Họ tên</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Địa chỉ</th>
                        <th class="text-center">Số điện thoại</th>
                        <th class="text-center">Giới tính</th>
                        <th class="text-center">Quyền</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Details</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($users as $u)
                    <tr class="odd gradeX">
                        <td value="id">{{$u->id}}</td>
                        <td value="name_user">{{$u->Name}}</td>
                        <td value="email">{{$u->Email}}</td>
                        <td value="address">{{$u->Address}}</td>
                        <td value="phone">{{$u->Phone}}</td>
                        <td>
                            @if($u->Gender==0)
                                {{"Nam"}}
                            @else
                                {{"Nữ"}}
                            @endif
                        </td>
                        
                        <td value="role">{{$u->Role->Role}}</td>
                   
                        <td type="hidden" class="center"><i class="fa fa-trash-o  fa-fw"></i>
                        
                        <a href="admin/users/delete/{{$u->id}}"> Delete</a>
                        
                        </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        
                         <a href="admin/users/edit/{{$u->id}}">Edit</a>
                        
                         </td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                        
                        <a href="admin/users/details/{{$u->id}}">Details</a>
                       
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