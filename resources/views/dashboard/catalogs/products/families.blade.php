@extends('dashboard.layout')


@section('pageheader')
	<h1>
		Dashboard
		{{-- <small>Descripcion de titulo</small> --}}
	</h1>
@stop


@section('content')
	{{-- <h1>Contenido del dashboard</h1> --}}
	<!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span> --}}
            <span class="info-box-icon bg-aqua"><i class="ion ion-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Productos</span>
              <span class="info-box-number">399<small> productos</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            {{-- <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span> --}}
            <span class="info-box-icon bg-red"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Servicios</span>
              <span class="info-box-number">43 servicios</span>
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
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ventas</span>
              <span class="info-box-number">$ 760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-gears"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Produccion</span>
              <span class="info-box-number">12,000 m</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop