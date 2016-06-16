
@extends('templates.home')
@section('menu')
<li class="active"><a href="congviec">Tìm việc <span class="sr-only">(current)</span></a></li>
<li><a href="sinhvien">Tuyển người </a></li>
@stop
@section('content')
<div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border" style="background-color:steelblue">
            <div class="box-title" style="color: white">
                Danh sách công việc
            </div>
        </div>

        <?php
        foreach ($jobs as $job) {
            echo '<div class="box-header with-border">';
            echo '<p><a href="'.$job->job_id.'">'.$job->title.'</a></p>';
            echo '<p><b>Lương: </b>'.$job->rate.'</p>';
            echo '<p><b>Thời gian ứng tuyển: </b>'.$job->time.'</p>';
            echo '<a href="congviec/'.$job->job_id.'" style="float: right">Đọc thêm</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>
@stop
