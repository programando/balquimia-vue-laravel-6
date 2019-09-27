<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- Styles -->
 
    </head>
    <body>
        <div id="AppVue">
            <div class  ="content-body">
                <router-view :key="$route.fullPath" >
                 </router-view>
               </div>           
        
        </div>
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
