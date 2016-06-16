
@extends('templates.home')
@section('menu')
<li ><a href="congviec">Tìm việc <span class="sr-only">(current)</span></a></li>
<li class="active"><a href="sinhvien">Tuyển người </a></li>
@stop
@section('content')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border" style="background-color:steelblue">
            <div class="box-title" style="color: white">
                Danh sách sinh viên
            </div>
        </div>

        <?php
        foreach ($students as $student) {
            echo '<div class="box-header with-border">';
            echo '<p><a href="#">'.$student->name.'</a></p>';
            echo '<p><b>Kĩ năng: </b>'.$student->skill.'</p>';
            echo '<p><b>Lương: </b>'.$student->rate.'</p>';
            echo '<a href="sinhvien/'.$student->student_id.'" style="float: right">Đọc thêm</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>
@stop
