<!DOCTYPE html>
<html>
    <head>
        <title>DigitalDrom - Ajouter un produit</title>
        <style>
            body {
                padding: 2% 5%;
                background-color: #F4F2F2;
            }
            .products {
                display: flex;
                flex-direction: row-reverse;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            .products .product {
                margin-top: 2%;
                width: 30%;
                border: solid 0.5px black;
                background-color: white;
                border-radius: 5px;
                text-align: center;
                padding-bottom: 5px;
            }

            .product h3 {
            }
            .error {
                color: red;
            }
            .form-create-product .form-group {
                display: flex;
                justify-content: space-around;
            }

            .form-group .form-control {
                width: 45%;
                margin-bottom: 3%
            }

            input{
                width: 100%;
                height: 60%;
            }
            .input {
                width: 100%;
                height: auto%;
            }

            input[type="submit"] {
                margin-top: 5%;
                width: 50%;
            }

            h1 a {
                color: black;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
        <h1><a href="/">Bienvenue sur DigitalDrom</a></h1>
        <a href="{{ route('create') }}">Ajouter un produit</a>
        @yield('content')
    </body>
    </html>
