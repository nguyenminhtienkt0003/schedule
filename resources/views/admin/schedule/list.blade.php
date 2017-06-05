@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Schedule
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
          
               
                  <div class='col-md-5'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker6'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class='col-md-5'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker7'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th class="text-center"></th>
                            <th class="text-center">Thứ 2</th>
                            <th class="text-center">Thứ 3</th>
                            <th class="text-center">Thứ 4</th>
                            <th class="text-center">Thứ 5</th>
                            <th class="text-center">Thứ 6</th>
                            <th class="text-center">Thứ 7</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                         
                        <tr class="odd gradeX">
                        @foreach($period as $p)
                            <td value="id_period">{{$p->Name_period}}</td>
                            <td value="id_t2">Cấu Trúc Dữ Liệu - A2-101</td>
                            <td value="id_t3">Kỹ Thuật Lập Trình - A2-102</td>
                            <td value="id_t4">Toán Rời Rạc và Lý Thuyết Đồ Thị- A2-103</td>
                            <td value="id_t5">T5</td>
                            <td value="id_t6">T6</td>
                            <td value="id_t7">T7</td>
                        </tr>
                       @endforeach
                    </tbody>
                    
                    
                </table>
              
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('Script')
    <script>
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
@endsection