@extends('base')

@section("content")
    <div class="products">
        @foreach ($products as $product)
            <div class="product">
                <form method="POST" action="{{ route('delete-product', $product->product_id) }}">
                    @csrf
                    @method('DELETE')
                    <h3>{{ $product->product_name }}</h3>
                    <span>{{ $product->price }}</span>
                    <button onclick="return confirm('Êtes vous sûres de vouloir supprimer ce produit ?');" type="submit">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
@stop
