<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="logotemanku.png">

    <title>
        @yield('title')
    </title>

    @include('includes.user.style')
</head>

<body>
    @include('includes.user.header')

    @yield('content')

    @include('includes.user.footer')
    @include('includes.user.script')
</body>

</html>
