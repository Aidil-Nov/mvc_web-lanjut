@extends ('layouts.app')

@section('title', 'products')

@section('content')
    <div>
        <h1 class="font-bold text-3xl mb-4">Daftar Produk</h1>
        <ul class="ml-4 text-white">
            @foreach ($products as $id => $product)
                <li><a href="{{ url('/products/' . $id) }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">
                        {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.')}}
                    </a>
                </li>
            @endforeach
        </ul>
        <h1>test</h1>
    </div>


@endsection