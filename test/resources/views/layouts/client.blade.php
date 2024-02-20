<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trang web của tou</title>
</head>
<body>
    <p>Main sidebar</p>
    <header>
        <h1>Header</h1>
    </header>
    <main>
        <aside>
            Main sidebar
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        <h1>Footer</h1>
    </footer>
</body>
</html>