<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" 
            href="http://cestore.dev:8009/css/themes/united/bootstrap.min.css">
        <title>CE Store</title>        
    </head>
    <body clase>
        <div class="container">@include('partials.header')</div>
        <div class="row container">
              <div class="col-md-2">@include('partials.navbar')</div>
                <div class="col-md-10">@yield('content')</div>
        </div>
        <div class="container">@include('partials.footer')</div>
    </body>
</html>
