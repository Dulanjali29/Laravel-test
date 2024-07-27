<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('libraries.styles')

    <title>Home| xxx</title>
</head>

<body style="height:100vh ">
    @include('components.nav-bar')
    <div class="container" style="height:85vh">
       @yield('pages')
    </div>
   
    @include('components.footer')

    @include('libraries.scripts')

</body>

</html>
