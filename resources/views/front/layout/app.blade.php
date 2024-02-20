@php

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egegen Task</title>
    @include('front.layout.styles')
</head>

<body>
    <div>
        @include('front.layout.header')
        @yield('main_content')
    </div>
    @include('front.layout.footer')
    @include('front.layout.scripts')
</body>

</html>
