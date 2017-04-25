@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">

                <video src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" id="video1" controls autoplay></video>
                <div>
                    <button onclick="document.getElementById('video1').play()">Reproducir video</button>
                    <button onclick="document.getElementById('video1').pause()">Pausar el video</button>
                    <button onclick="document.getElementById('video1').volume+=0.1">Aumentar el Volumen</button>
                    <button onclick="document.getElementById('video1').volume-=0.1">Disminuir el Volumen</button>
                </div>

            </div>
        </div>
    </div>
@endsection