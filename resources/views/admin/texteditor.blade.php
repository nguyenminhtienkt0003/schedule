@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="row-item row">
			<body>
			<form method="Post" href="">
			<div class="form-group" style="margin-left: 300px; margin-right:31px">
                <h3 style="margin-left: 300px;">Trình soạn thảo văn bản</h3>
                <textarea name="details" class="form-control ckeditor" rows="5"></textarea>
            </div>
            <input type="submit" style="text-align: right; margin-left: 1100px" name="ok" value="submit">
			</form>
			</body>
			</div>
		</div>
	</div>
<!-- /#page-wrapper -->
@endsection

