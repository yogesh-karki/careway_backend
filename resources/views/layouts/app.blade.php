<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    @yield('body')
    @include('includes.footer')
    @include('includes.foot')
</body>

</html>
    