<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    </head>
    <body>

        <div id="wrapper">
            @include('header')
            @include('nav')
            <div class="content">
                <div class="canvas">
                   @yield('isi')

                </div>
            </div>
            <div class="footer">
                Created by Coco.Ads
            </div>
        </div>



    </body>
</html>
