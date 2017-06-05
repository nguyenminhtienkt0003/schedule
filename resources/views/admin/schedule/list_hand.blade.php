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
                            <th class="text-center">{{$week2->Day_week}}</th>
                            <th class="text-center">{{$week3->Day_week}}</th>
                            <th class="text-center">{{$week4->Day_week}}</th>
                            <th class="text-center">{{$week5->Day_week}}</th>
                            <th class="text-center">{{$week6->Day_week}}</th>
                            <th class="text-center">{{$week7->Day_week}}</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period1->Name_period}}</td>
                            @foreach($schedule as $s)
                            @if($s->id_week==1 && $s->id_period==1)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==1)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==3 && $s->id_period==1)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==1)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==5 && $s->id_period==1)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==6 && $s->id_period==1)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period2->Name_period}}</td>
                            @foreach($schedule as $s)
                            @if($s->id_week==1 && $s->id_period==2)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==2)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==3 && $s->id_period==2)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==2)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==5 && $s->id_period==2)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==6 && $s->id_period==2)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @endforeach
                        </tr>
                       <tr class="odd gradeX">
                            <td value="id_period">{{$period3->Name_period}}</td>
                            @foreach($schedule as $s)
                            @if($s->id_week==1 && $s->id_period==3)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==3)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==3 && $s->id_period==3)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==3)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==5 && $s->id_period==3)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==6 && $s->id_period==3)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period4->Name_period}}</td>
                            @foreach($schedule as $s)
                            @if($s->id_week==1 && $s->id_period==4)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==4)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==3 && $s->id_period==4)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==4)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==5 && $s->id_period==4)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @if($s->id_week==6 && $s->id_period==4)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period5->Name_period}}</td>
                            @foreach($schedule as $s)

                            @if($s->id_week==1 && $s->id_period==5)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==5)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==5)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==5)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==5)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==5)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period6->Name_period}}</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                            <td value="id_t2">Nghỉ Trưa</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period7->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==6)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==6)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==6)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==6)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==6)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==6)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period8->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==7)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==7)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==7)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==7)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==7)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==7)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                         <tr class="odd gradeX">
                            <td value="id_period">{{$period9->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==8)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==8)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==8)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==8)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==8)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==8)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period10->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==9)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==9)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==9)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==9)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==9)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==9)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period11->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==10)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==10)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==10)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==10)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==10)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==10)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                        <tr class="odd gradeX">
                            <td value="id_period">{{$period12->Name_period}}</td>
                            @foreach($schedule as $s)
                            
                            @if($s->id_week==1 && $s->id_period==11)
                            <td value="id_t2">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==2 && $s->id_period==11)
                            <td value="id_t3">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==3 && $s->id_period==11)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif
                            
                            @if($s->id_week==4 && $s->id_period==11)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==5 && $s->id_period==11)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @if($s->id_week==6 && $s->id_period==11)
                            <td value="id_t4">{{$s->subject->Name}}</td>
                            @endif

                            @endforeach
                        </tr>
                    </tbody>
                    
                    
                </table>
              <a href="{{ URL::to('admin/schedule/downloadExcel/xls') }}"><button class="btn btn-success">Download Excel</button></a>
              <a href="{{ URL::to('admin/schedule/downloadPDF') }}"><button class="btn btn-success">Download PDF</button></a>

            
          </div>   
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