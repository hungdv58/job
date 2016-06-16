
@extends('templates.home')
@section('menu')
<li class="active"><a href="congviec">Tìm việc <span class="sr-only">(current)</span></a></li>
<li><a href="sinhvien">Tuyển người </a></li>
@stop
@section('content')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
    <?php
            foreach ($students as $student) {
            echo '
                <div class="box-header with-border" style="background-color:steelblue">
                    <div class="box-title" style="color: white">
                        '.$student->name.'
                    </div>
                </div>';


            echo '<div class="box-header with-border">';
            echo '<p><b>Tên: </b>'.$student->name.'</p>';
            echo '<p><b>Trường: </b>'.$student->school.'</p>';
            echo '<p><b>Lớp: </b>'.$student->class.'</p>';
            echo '<p><b>Năm: </b>'.$student->year.'</p>';
            echo '<p><b>Kĩ năng: </b>'.$student->skill.'</p>';
            echo '<p><b>Lương yêu cầu: </b>'.$student->rate.'</p>';
            echo '<p><b>Chi tiết: </b>'.$student->detail.'</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
@stop
