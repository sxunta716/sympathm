<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sympathm</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                width: 100%;
                height:100vh;
                background-image: url(../images/sympathm.jpg);  
                background-position: center center; 
                background-repeat: no-repeat;  
                background-attachment: fixed; 
                background-size: cover;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        
        body::before {
    /* 透過させた黒を重ねる */
    background-color: rgba(0,0,0,0.5);
    /* どの範囲に重ねるかを指定 */
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: ' ';
}   

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
                color: #FFF;
                font-size: 250px;
                font-height: 200px;
                
            }

            .links > a {
                color: #FFF;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .color-green {
                color: green !important;
            }    
            
            .m-b-md {
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="color-green">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="color-green">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            
            
                <div class="title m-b-md">
                    sympathm
                </div>
            </div>
        </div>
    </body>
</html>
