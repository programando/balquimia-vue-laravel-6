<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Balquimia S.A.S. | Chemical Solutions </title>

        <!-- Fonts -->
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
        <script src="https://kit.fontawesome.com/69f5e9bf38.js" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
