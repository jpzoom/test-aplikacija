<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic layout</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @include("inc.navbar")
    <p></p> <!-- samo za odvajanje od headera -->
    <div class = "container">

        @if(Request::is('/')) <!-- specificira sa if-om, gdje će se showcase.blade.php prikazati -->
            @include('inc.showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8"> <!-- korištenje bootstrap grid sustava / main content stoji lijevo / -->



            @yield('content') <!-- zvanje main contenta iz  home.blade.php-->

            
            </div>

            <div class="col-md-4 col-lg-4"> <!-- korištenje bootstrap grid sustava / sidebar stoji desno / -->
            @include("inc.sidebar")
            <p class="col-md-4 col-lg-4">
            @include("inc.messages") <!-- zvanje greški (potrebno ime i email) -->
            </p>
            </div>
            
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Veleri</p>
    </footer>
    

</body>
</html>