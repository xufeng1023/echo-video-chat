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
                
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            Echo.join('chat-room-1')
                .here((users) => {
                    //
                })
                .joining((user) => {
                    console.log(user.name + ' is joining');
                })
                .leaving((user) => {
                    console.log(user.name + ' is leaving');
                });
        </script>
    </body>
</html>
