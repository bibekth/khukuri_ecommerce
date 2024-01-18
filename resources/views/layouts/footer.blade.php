<aside>

        <div class="main-container ">
            <div class="third-footer">
                <ul>
                    <p style=" color: var(--secondar, rgba(159, 9, 9, 0.92));"><b>CONTACT US</b></p>
                    <li><i class="bi bi-instagram"></i>Instagram</li>
                    <li><i class="bi bi-phone"></i>+977 9876543210</li>
                    <li><i class="bi bi-geo-alt-fill">Location</i></li>
                </ul>
            </div>
            <div class="second-footer ">
                <ul>
                    <p style=" color: var(--secondar, rgba(159, 9, 9, 0.92));"><b>FOR BUYERS</b></p>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                    <li><a href="{{ route('product') }}">ADD TO CART</a></li>
                </ul>
            </div>
            <div class="first-footer">
                <img src="{{ asset('favicon.ico') }}" alt="Logo">
                <p>
                    Embrace the spirit of the legendary Gurkha warriors and<br> explore our curated selection, where
                    every
                    Khukuri is a <br>testament to the rich history and unparalleled<br> skill of Nepalese craftsmanship.
                </p>
            </div>
        </div>
    <style>

        .main-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            background-color: #386e75;
            /* background: url(storage/images/1702881463footer.jpg); */
            /* background: url(storage\images\1702881463footer.jpg); */
            /* background: {{ asset('storage/images/1702881463footer.jpg') }}; */
            /* background-size: cover; */
            /* background-position: center; */
            justify-content: center;
            color: white;
        }

        /* .first-footer ul li{
            text-align: center;
            list-style-type: none;
        } */
        .first-footer {
            padding: 20px;
            align-items: center;
        }

        .first-footer img {
            width: 60px;
            height: auto;
            display: block;
        }

        .first-footer p {
            max-width: 600px;
            margin: 20px auto;
            line-height: 1.5;
        }

        .second-footer {
            padding: 20px;
        }

        .second-footer ul li {
            list-style-type: none;
            text-align: center;
        }

        .second-footer ul p {
            text-align: center;
            list-style-type: none;
        }

        .third-footer {
            padding: 20px;
        }

        .third-footer ul li {
            text-align: center;
            list-style-type: none;
        }

        .third-footer p {
            text-align: center;
        }

        @media screen and (max-width:800px) {
            .main-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /* background: linear-gradient(180deg, #bfdbeb 0%, rgba(251, 173, 156, 0.00) 100%); */
            }

            .first-footer {
                padding: 20px;
                align-items: center;
            }
        }
    </style>
</aside>
