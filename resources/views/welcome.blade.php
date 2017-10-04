<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
    <body>
        <div class="flex-center position-ref full-height">

            <div>
                <h1>Description</h1>
                <p>You can modify the url as flows ,fill key & value ,then generate a new key=value pair<br/> which is store is database .
                and can access by $app->config->get('setting.your-key) </p>

                <h1>Demo</h1>
                <h1>url generate</h1>
                <p>URL Format :`http://www.yoursite.com/generate/key/{mykey}/value/{myvalue}`</p>

                <h2>retrive the saved k=>v pair </h2>
                <p>Echo :`http://www.yoursite.com/generate/key/{mykey}`</p>
            </div>
            <p class="clear"></p>
            <div class="content">

                <div class="">
                    <h1>Demo Config Application</h1>
                </div>

                <div class="links">
                    <a href="{{route('generate')}}">Save a random key & value</a>
                </div>

                <div>
                    @foreach( $result as $k=>$v )
                    <ul>
                        <li>key=>{{$k}}  ;  value=> {{$v}} </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>

        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

    </body>

</html>
