<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang Barang</title>
</head>
<body>
    <header>
        <h1>Gudang Barang</h1>
        <nav>
            <a href="{{ route('barang.create') }}">Daftar Barang</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
