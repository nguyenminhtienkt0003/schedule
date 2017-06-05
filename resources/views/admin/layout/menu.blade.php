 <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
            <h4>@include('marquee')</h4>
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="admin/home"><i class="fa fa-dashboard fa-fw"></i> Schedule </a>
                </li>
               
                <li>
                
                    <a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng<span class="fa arrow"></span></a>
               
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/users/list">Danh sách giảng viên</a>
                        </li>
                       
                        <li>
                            <a href="admin/users/insert">Đăng ký</a>
                        </li>
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                
                    <a href="#"><i class="fa fa-calendar"></i> Thời Khóa Biểu<span class="fa arrow"></span></a>
               
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/schedule/list"> Thời khóa biểu tự động</a>
                        </li>
                        <li>
                            <a href="admin/schedule/list-hand"> Thời khóa biểu tự tạo</a>
                        </li>
                        <li>
                            <a href="admin/schedule/insert">Thêm schedule</a>
                        </li>
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                 <li>
                    <a href="#"><i class="fa fa-calendar-o"></i> Lịch Bận-Giảng Viên<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/busy-teacher/list"> Lịch Bận</a>
                        </li>
                        <li>
                            <a href="admin/busy-teacher/insert">Thêm lịch bận</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar-o"></i> Lịch Bận-Phòng Học<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/busy-classroom/list"> Lịch Bận</a>
                        </li>
                        <li>
                            <a href="admin/busy-classroom/insert">Thêm lịch bận</a>
                        </li>
                        
                    </ul>
                </li>
                 <li>
                
                    <a href="#"><i class="fa fa-th-list"></i> Phòng Học<span class="fa arrow"></span></a>
               
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/classroom/list">Danh sách phòng</a>
                        </li>
                       
                        <li>
                            <a href="admin/classroom/insert">Thêm phòng</a>
                        </li>
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                
                    <a href="#"><i class="fa fa-list-alt"></i> Môn Học<span class="fa arrow"></span></a>
               
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/subject/list">Danh sách môn học</a>
                        </li>
                       
                        <li>
                            <a href="admin/subject/insert">Thêm môn học</a>
                        </li>
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="admin/period"><i class="fa fa-bars"></i> Tiết Học</a>
                </li>
                <li>
                    <a href="admin/users-subject"><i class="fa fa-arrows-h"></i> Giảng Viên - Môn Học</a>
                </li>
                <li>
                    <a href="admin/calculator"><i class="fa fa-calculator"></i> Máy Tính</a>
                </li>
                <li>
                    <a href="admin/texteditor"><i class="fa fa-text-width"></i> Trình Soạn Thảo</a>
                </li>
                <li>
                    <a href="admin/gamecaro"><i class="fa fa-gamepad"></i> Trò Chơi Caro</a>
                </li>
                <li>
                    <a href="admin/maps"><i class="fa fa-map-marker"></i> Bản Đồ</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    