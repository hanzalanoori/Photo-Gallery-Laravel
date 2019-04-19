<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Gallery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css">
</head>
<body>
@include('inc.topbar')
<div class="row">
<div class="container">@include('inc.message')</div>


@yield('content')

</div>

<footer id="footer" class="text-center">
<p>Copyright 2019 &copy; Hanzala</p>
</footer>  
</body>
</html>