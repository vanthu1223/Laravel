<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang web của tou</title>
    <link rel="stylesheet" href="{{ asset('asserts/clients/css/bootstrap.min.css') }}">
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
    @include('client.blocks.header')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidabar')
                        @include('client.blocks.sidebar')
                        @show
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('client.blocks.footer')
    <script src="{{ asset('asserts/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asserts/clients/js/custome.js') }}"></script>
    @stack('scripts');
</body>
</html>