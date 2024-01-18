@extends('layouts.main')

@section('content')
<div class="container first-container">
    <div class="image-container col-lg-8">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                <div class="swiper-slide img-fluid"><img class="img-thumbnail"
                        src="{{ asset('storage/images/' . $item->path) }}" alt="swiper"></div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="text-container col-lg 4">
        <p class=" d-sm-block text-center" style="color:#9F0909"> Best Place For Top Quality Khukuris </p>
    </div>
</div>

<div class="notice">
    <span class="notice-text">
        <marquee behavior="" direction="" scrollamount="12"> Offer Month! we are providing 11.11 offer this
            month.</marquee>
    </span>
</div>
<div class="container">
    <p class="line d-sm-block text-center" style="color:#9F0909">Why Us? </p>
    <p>Our website is your premier destination for acquiring authentic and high-quality khukuris. We pride ourselves
        on offering a diverse range of these iconic blades, crafted with precision and a deep respect for tradition.
        Whether you're a collector or an outdoor enthusiast, our platform ensures a seamless shopping experience
        with a focus on authenticity and cultural heritage. Explore our collection to discover khukuris that blend
        history, craftsmanship, and utility in a single blade.</p>
</div>

<div class="product-container container">
    <div class="line">OUR POPULAR KHUKURIS</div>
</div>

@include('dashboard.product-list')
<style>
    .inner-line {
        padding: 50px;
    }

    .swiper-slide img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .image-container {
        margin: 2px;
    }
</style>
<style>
    .first-container {
        padding: 10px;
        display: flex;
    }

    .container p {
        font-family: 'roboto';
    }

    .text-container {
        display: flex;
        font-weight: 700;
        font-size: 45px;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: url(storage/images/1703001099khukuri2.jpg);
        background-size: cover;
        background-position: center;
        justify-content: center;
        border: 1px solid #dee2e6;
        border-radius: 5px;
    }

    .line {
        color: var(--secondar, rgba(159, 9, 9, 0.92));
        text-align: center;
        font-family: Roboto;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        padding: 30px;
        margin: 20px;
    }

    @media(max-width:700px) {
        .first-container {
            padding: 10px;
        }

        .image-container {
            background: url(images/khukuri.jpg);
            max-width: 100%;
            max-height: 100vh;
            background-size: cover;
            background-position: center;
            justify-content: center;
        }

        .text-container {
            display: none;
        }
    }

    .notice {
        display: flex;
    }

    .text {
        background-color: #4caf50;
        color: gold;
        padding: 10px;
    }

    .notice-text {
        flex: 1;
        padding: 10px;
        font-family: sans-serif;
        color: var(--secondar, rgba(159, 9, 9, 0.92));
    }
</style>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection
