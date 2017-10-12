@extends('layouts.app')

@section('content')
<!-- page content header -->
@foreach ($projects as $project)

@endforeach
<section class="content-header">
    <h1>Dashboard<small>Control Panel</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">

<!-- Info Box -->
   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-usd ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Earnings</span>
              <span class="info-box-number"><small>#</small>0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-tint fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Project</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-grain ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
     </div><hr>
   <!-- End of Info Box  -->
   <!-- Solid box of Assigned project -->
      <div class="bg-warning">
         <h3 class="text-center">Projects</h3>
      </div>
      <div class="row">
         @foreach($projects as $pro)
         <div class="col-md-4">
            <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title"><b>{{$pro->title}}</b></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                   <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                      <li><a href="#">Add new event</a></li>
                      <li><a href="#">Clear events</a></li>
                      <li class="divider"></li>
                      <li><a href="#">View calendar</a></li>
                    </ul>
                 </div>
                   <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>Minimize
                   </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Project Type:</span>
                    <small class="pull-right"><b>{{ $pro->type}}</b></small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-primary" style="width: 100%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Client:</span>
                    <small class="pull-right"><b>{{$pro->client}}</b></small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-warning" style="width: 100%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Project Earning:</span>
                    <small class="pull-right"><b>{{$pro->cost * 0.25}}</b></small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 100%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Due Date:</span>
                    <small class="pull-right"><b>{{$pro->due_date}}</b></small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
       </div>
       @endforeach
      </div>


 </section>
@endsection
