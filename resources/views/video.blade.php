@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

				<div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Example box</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <video id="demovideo" src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" preload="auto" controls></video>

                        <div>
                            <button onclick="document.getElementById('demovideo').play()">Reproducir video</button>
                            <button onclick="document.getElementById('demovideo').pause()">Pausar el video</button>
                            <button onclick="document.getElementById('demovideo').volume+=0.1">Aumentar el Volumen</button>
                            <button onclick="document.getElementById('demovideo').volume-=0.1">Disminuir el Volumen</button>
                        </div
                    </div>
                    <!-- /.box-body -->
                </div>

			</div>
		</div>
	</div>
@endsection
