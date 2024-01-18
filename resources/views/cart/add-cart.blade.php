@extends('layouts.main')

@section('content')
<aside>
    <div class="container container-add-cart d-flex justify-content-center">
        <div class="add-cart-section">
            <div class="form-wrapper">
                <form action="{{ route('cart.store',['cart' => $product->id]) }}" method="POST">
                    @csrf
                    <div class="upper-container">
                        <h2 style="color:#9F0909"><b>{{ $product->name }}</b></h2>
                        <div class="image-container">
                            <img src="{{ asset('storage/images/'.$product->image ) }}" class="img-fluid" alt="Image"
                                onclick="openLightbox()">
                        </div>
                        <div class="details-container">
                            <p>{{ $product->description }}</p>
                            <p style="color: rgb(236, 125, 33)">Price: Rs {{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="lower-container">
                        <div class="quantity">
                            <label for="quantity">Quantity: </label>
                            <input type="number" id="quantity" name="quantity" min="1" value="1">
                        </div>
                        <div class="more-details">
                            <p>more details Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vel
                                necessitatibus
                                iusto aperiam, debitis tenetur.</p>
                        </div>
                    </div>
                    <input hidden type="text" name="product_id" id="" value={{ $product->id }}>
                    <div class="button">
                        <button class=" btn btn-warning " onclick="openModal()">Add to
                            Cart</button>
                    </div>
                </form>
            </div>
            {{-- <div class="tashi">
                <form method="POST" action="{{ route('cart.store', ['cart' => $item->id]) }}">
                    @csrf
                    @method('POST')
                    <input hidden type="text" name="product_id" id="" value={{ $item->id }}>
                    <button type="submit" class="btn"><i class="bi bi-cart-check-fill fs-4 "></i></button>
                </form>
            </div> --}}

            {{-- <div id="lightbox" class="lightbox">
                <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
                <img src="{{ asset('images/khukuri.jpg') }}" class="" alt="">
            </div> --}}
        </div>
    </div>

    <style>
        .container-add-cart  {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .lower-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .quantity {
            display: flex;
            align-items: center;
        }

        .quantity input {
            width: 60px;
            text-align: center;
            margin: 0 7px;
            padding: 5px;
        }

        .btn {
            align-items: center;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .lightbox img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 8px;
        }

        .close-lightbox {
            color: #fff;
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 20px;
            cursor: pointer;
        }

        @media screen and (max-width:800px) {
            .container {
                width: 20rem;
                /* height: 15rem; */
                margin-top: 50px;
            }

            .lower-container {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
    <script>
        function openLightbox() {
            var lightbox = document.getElementById("lightbox");
            lightbox.style.display = "flex";
        }
        function closeLightbox() {
            var lightbox = document.getElementById("lightbox");
            lightbox.style.display = "none";
        }
    </script>
</aside>
@endsection
