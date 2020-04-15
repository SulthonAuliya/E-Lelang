<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .slider{
                z-index: 1;
                  position: absolute;
                  width: 100%;
                  height: 100vh;
                  background: #fff;
                  top: 0%:
            }
            .slider h1 {
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  font-size: 35px;
                  font-weight: bolder;
                  letter-spacing: 12px;
            }
            .full-height {
                height: 100vh;

            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                color: #fff;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-color: #5A92FF">
        <div class="slider">
            <h1>WELCOME</h1>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    e-lelang
                </div>
                <div class="coment">
                    <h2>"lelang everything you want as simple as possible"</h2>
                </div>
            </div>
        </div>
        <script type="text/javascript">

              TweenMax.to(".slider h1", 2, {
                    opacity: 0,
                    y: -60,
                    ease: Expo.easeInOut
              })

              TweenMax.to(".slider", 2, {
                    delay: 1,
                    top: "-100%",
                    ease: Expo.easeInOut
              })
              TweenMax.from(".title", 1, {
                    delay: 2.4,
                    opacity: 0,
                    y: 20,
                    ease: Expo.easeInOut
              })
              TweenMax.from(".coment", 1, {
                    delay: 2.8,
                    opacity: 0,
                    y: 20,
                    ease: Expo.easeInOut
              })
        </script>
    </body>
</html>
