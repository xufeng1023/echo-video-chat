<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <video></video>
            </div>
        </div>
        <script>
            var constraints = { audio: true, video: { width: 350, height: 720 } }; 

            navigator.mediaDevices.getUserMedia(constraints)
            .then(function(mediaStream) {
              var video = document.querySelector('video');
              video.srcObject = mediaStream;
              video.onloadedmetadata = function(e) {
                video.play();
              };
            })
            .catch(function(err) { alert(err.name + ": " + err.message); });
        </script>
    </body>
</html>
