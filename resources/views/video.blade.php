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

                <div class="test">Audio Another day in paradise:</div>

                <audio id="demo2" src="https://upload.wikimedia.org/wikipedia/en/9/9f/Sample_of_%22Another_Day_in_Paradise%22.ogg" preload="auto" controls></audio>

                <div>
                    <button onclick="document.getElementById('demo2').play()">Reproducir el Audio</button>
                    <button onclick="document.getElementById('demo2').pause()">Pausar el Audio</button>
                    <button onclick="document.getElementById('demo2').volume+=0.1">Aumentar el Volumen</button>
                    <button onclick="document.getElementById('demo2').volume-=0.1">Disminuir el Volumen</button>
                </div>

                <div class="test">Audio Bullet in the head:</div>

                <audio id="demo3" src="https://upload.wikimedia.org/wikipedia/en/1/17/Bullet_In_The_Head.ogg" preload="auto" controls></audio>


                <div>
                    <button onclick="document.getElementById('demo3').play()">Reproducir el Audio</button>
                    <button onclick="document.getElementById('demo3').pause()">Pausar el Audio</button>
                    <button onclick="document.getElementById('demo3').volume+=0.1">Aumentar el Volumen</button>
                    <button onclick="document.getElementById('demo3').volume-=0.1">Disminuir el Volumen</button>
                </div>

                <a href="https://developer.mozilla.org/es/docs/Web/HTML/Usando_audio_y_video_con_HTML5">Més info</a>

            </div>
        </div>
    </div>
@endsection