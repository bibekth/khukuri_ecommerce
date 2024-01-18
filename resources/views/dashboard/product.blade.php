@extends('layouts.main')

@section('content')
<aside>
    <div class="product">
        @foreach ($products as $item)
        <div class="picture">
            <div class="img1">
                <img src="{{ asset('storage/images/'.$item->image) }}" class="img-fluid" alt="">
            </div>

            <div class="text3">
                <p class="p2">{{ $item->name }}</p>
                <p class="p1">Price: Rs {{ $item->price }}</p>

                <div class="box2">
                    {{-- <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div> --}}
                    <div class="col-9"></div>
                    <div class="tashi"> <a href="/add-cart/{{ $item->id }}"><i class="bi bi-cart-check-fill"></i></a></div>
                    {{-- <div class="tashi"> <a href="{{ route('add-cart') }}"><i class="bi bi-cart-check-fill"></i></a></div> --}}
                    {{-- <div class="tashi">
                        <form method="POST" action="{{ route('cart.store', ['cart' => $item->id]) }}">
                            @csrf
                            @method('POST')
                            <input hidden type="text" name="product_id" id="" value={{ $item->id }}>
                            <button type="submit" class="btn"><i class="bi bi-cart-check-fill fs-4 "></i></button>
                        </form>
                </div> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</aside>
<style>
    /* nav-barstart */


    /* nav-bar-ends */
    .picture {
        /* width: 23%; */
        margin: auto;
        margin-bottom: 24px;
        background-color: wheat;
        border: 1px solid #ccc;
        /* border-radius: 5px; */
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        /* display: grid;
    grid-template-columns: repeat(3,1fr); */
    }

    .product {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        align-items: center;
        padding: 30px;
    }

    .img1 {
        height: 150px;
        width: 100%;

    }

    .img1 img {
        height: 100%;

        object-fit: cover;
    }

    .text3 {
        background-color: rgb(204, 201, 195);
        border-radius: 20px 20px 0 0;
        margin: auto;
        box-shadow: -4px 10px 20px rgba(221, 208, 208, 0.25);
        margin-top: -10%;
        position: relative;
        z-index: 1;
        padding: 20px 20px
    }

    .p2 {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #000;
        font-weight: 600;
        font-size: 16px;
    }

    .p1 {
        font-family: 'Poppins', sans-serif;
        opacity: 0.7;
        font-size: 14px;
        font-weight: 600;
    }

    .box2 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 6px;
        /* display: grid;
    grid-template-columns: repeat(2, 1fr);
} */
    }

    .text4 p {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #000;

    }

    .stars {
        display: flex;
        color: rgb(250, 184, 4);

    }

    .stars i {
        font-size: 14px;
        padding: 1px;
    }

    .tashi a {
        font-size: 24px;
        color: #a10312;
    }

    @media screen and (max-width:800px) {
        .product {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
        }
    }

    @media screen and (max-width:500px) {
        .product {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }
    }
</style>
@endsection
