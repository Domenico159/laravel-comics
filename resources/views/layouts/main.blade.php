<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script src="{{ './js/app.js' }}"></script>
</body>

</html>
