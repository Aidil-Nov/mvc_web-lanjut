<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce Products</title>
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>

    <body>
        <div>
            <h1 class="font-bold text-3xl mb-4">Daftar Produk</h1>
            <ul class="ml-4 text-white">
                @foreach ($products as $id => $product)
                    <li><a href="{{ url('/product/' . $id) }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">
                            {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.')}}
                        </a></li>
                @endforeach
            </ul>
        </div>
    </body>

</html>