
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
            foreach ($jobs as $job) {
            echo '
                <div class="box-header with-border" style="background-color:steelblue">
                    <div class="box-title" style="color: white">
                        '.$job->title.'
                    </div>
                </div>';


            echo '<div class="box-header with-border">';
            echo '<p><b>Đơn đăng kí: </b>'.$job->apply.'</p>';
            echo '<p><b>Lương: </b>'.$job->rate.'</p>';
            echo '<p><b>Chi tiết: </b>'.$job->detail.'</p>';
            echo '<p><b>Nhiệm vụ: </b>'.$job->duty.'</p>';
            echo '<p><b>Kĩ năng cần thiết: </b>'.$job->skill.'</p>';
            echo '<p><b>Thời gian ứng tuyển: </b>'.$job->time.'</p>';
            echo '<p><b>Bạn có thể học được: </b>'.$job->learn.'</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>
@stop
