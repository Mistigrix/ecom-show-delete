@extends('base')

@section("content")

    <form class="form-create-product" method="POST" action="{{ route ('save-product') }}">
        @csrf
        <div class="form-group">
            <div class="form-control">
                <input id="product-name" type="text" name="product_name" placeholder="Entrer le nom du produit">
                {!! $errors->first('product_name', '<span class="error">:message</span>')!!}
            </div>
            <div class="form-control">
                <input id="price" type="number" name="price" placeholder="Prix">
                {!! $errors->first('price', '<span class="error">:message</span>')!!}
            </div>
        </div>

        <div class="form-group">

            <div class="form-control">
                <select class="input" id="category" name="category">
                    <option value="New arrivals">New arrivals</option>
                </select>
                {!! $errors->first('category', '<span class="error">:message</span>')!!}
            </div>

            <div class="form-control">
                <input id="product-name" type="url" name="image_url" placeholder="URL de l'image">
                {!! $errors->first('image_url', '<span class="error">:message</span>') !!}
            </div>

        </div>
        <div class="form-group">
            <input class="save" type="submit" value="Enregistrer">
        </div>
    </form>

@stop
