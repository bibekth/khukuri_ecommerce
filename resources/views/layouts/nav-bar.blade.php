<aside>
    <div class="top-nav container-fluid d-flex justify-content-between">
        <div class="logo col-8">
            <a href="/home">
                <div class="famous wow animate__animated animate__fadeInLeft">FAMOUS </div> &nbsp;
                <div class="gurkha wow animate__animated animate__fadeInLeft">GURKHA </div> &nbsp;
                <div class="khukuri wow animate__animated animate__fadeInLeft">KHUKURI</div>
            </a>
        </div>
        @if($user)
        <div class="col-4 row d-flex justify-content-end align-content-center">
            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> --}}
                <div class="col-2">
                    <div class="profile-icon d-flex " onclick="showDetails()">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="profile-details text-nowrap " id="profileDetails">
                        <div class="detail-info d-flex justify-content-center p-2">
                            <span><strong>{{ $user->name }}</strong></span>
                        </div>
                        <div class="logout d-flex justify-content-center p-2">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="bi bi-power"></i><span> LogOut</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="history d-flex justify-content-center">
                            <a href="{{ route('history') }}"><i class="bi bi-clock"></i> History</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 cart-icon d-flex align-content-center">
                    <a href="{{ route('cart.index') }}"><i class="bi bi-cart-check cart"></i></a>
                    {{-- <a href="/cart-list"><i class="bi bi-cart-check cart"></i></a> --}}
                </div>
            </div>
            @else
            <div class="signup col-4 d-flex justify-content-around">
                <div class="login">
                    <a href="{{ route('login') }}">Login</a>
                    {{-- <a href="/login">Login</a> --}}
                </div>
                <div class="register">
                    <a href="/register">Register</a>
                </div>
                <div class="cart-icon d-flex align-content-center">
                    <a href="{{ route('cart.index') }}"><i class="bi bi-cart-check cart"></i></a>
                    {{-- <a href="/cart-list"><i class="bi bi-cart-check cart"></i></a> --}}
                </div>
            </div>
            @endif
        </div>
        <div class="nav-bar" id="navbar">
            <div class="hamburger-menu" id="hamburger" onclick="toggleMenu()">&#9776;</div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact</a>
                </li>
            </ul>
        </div>

        <style>
            .logo {
                display: flex;
                justify-content: space-between;
                padding: 10px;
            }

            /* The profile view icon  */
            .profile-details {
                display: none;
                position: absolute;
                top: 4rem;
                right: 4rem;
                background-color: #1e1817;
                width: auto;
                height: auto;
                padding: 1rem;
                z-index: 1;
                color: white;
            }

            .profile-icon {
                font-size: 2.3rem;
                align-items: center;
            }

            a {
                text-decoration: none !important;
                /* color: #cccccc !important; */
            }

            .logo a {
                font-family: 'Roboto';
                display: flex;
                text-decoration: none;
                font-size: 30px;
                font-style: normal;
                font-weight: 700;
            }

            .gurkha {
                color: #386e75;
            }

            .famous, .khukuri {
                color: var(--secondar, rgba(159, 9, 9, 0.92));
            }

            .main-nav {
                margin: 5px;
            }

            /* .login-register button{
                background-color: var(--liniear, linear-gradient(180deg, #00B2CA 0%, #1D4E89 100%));
            } */


            .signup {
                /* display: flex;
                justify-content: space-between; */
            }

            .signup {
                display: flex;
                align-items: center;
                /* justify-content: space-between; */
                font-weight: 15px;

            }

            .login a {
                border-radius: 10px;
                /* background: var(--primary-color, #00B2CA); */
                background: #386e75;
                padding: 8px 40px;
                margin-right: -30px;
                color: white;
                text-decoration: none;

            }

            .login a:hover {
                color: var(--secondar, rgba(159, 9, 9, 0.92));
            }

            .register a:hover {
                color: var(--secondar, rgba(159, 9, 9, 0.92));
            }

            .register a {
                border-radius: 10px;
                border: 1px solid #386e75;
                padding: 8px 35px;
                margin-left: -30px;
                text-decoration: none;
                color: #00B2CA;
            }

            .cart {
                font-size: 30px;
                color: var(--secondar, rgba(159, 9, 9, 0.92));
                "

            }

            .hamburger-menu {
                position: absolute;
                left: 1rem;
                top: 3.5rem;
                font-size: 1.5rem;
                font-weight: 900;
                display: none;
                padding: 20px;
            }


            .nav-link {
                font-weight: bold;
                font-size: 18px;
                color: white ! important;
                background-color: #386e75;
                /* background-color: rgb(245, 190, 234); */
            }

            .nav-bar {
                /* background-color: #386e75; */
                /* padding: 5px; */
            }

            .nav {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                justify-content: center;
                background-color: #386e75;

            }

            .nav-item {
                margin: 0 15px;
            }


            @media(max-width:700px) {

                .logo img {
                    width: 80px;
                    height: auto;
                }

                .login a {
                    border-radius: 7px;
                    background: var(--primary-color, #00B2CA);
                    padding: 3px 10px;
                    margin-right: 2px;
                    color: white;
                    text-decoration: none;


                }

                .register a {
                    border-radius: 7px;
                    border: 1px solid var(--primary-color, #00B2CA);
                    padding: 2px 8px;
                    margin-left: 1px;
                    margin-right: 8px;
                    text-decoration: none;
                    color: #00B2CA;
                }

                .cart {
                    font-size: 15px;
                }

                .logo a {
                    font-family: 'Roboto';
                    display: flex;
                    text-decoration: none;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 500;
                }

                .hamburger-menu {
                    padding: 10px;
                    display: block;
                }

                .nav {
                    display: none;
                    flex-direction: column;
                    text-align: left;
                    width: 100%;
                }

                .nav-item {
                    margin: 10px 0;
                }

                .nav.active {
                    display: flex;
                }


            }

            @media(max-width:900px) {
                .login a {
                    border-radius: 7px;
                    background: var(--primary-color, #00B2CA);
                    padding: 5px 13px;
                    margin-right: 2px;
                    color: white;
                    text-decoration: none;


                }

                .register a {
                    border-radius: 7px;
                    border: 1px solid var(--primary-color, #00B2CA);
                    padding: 3px 10px;
                    margin-left: 2px;
                    margin-right: 8px;
                    text-decoration: none;
                    color: #00B2CA;
                }
            }
        </style>
        <script>
            function showDetails() {
    var profileDetails = document.getElementById("profileDetails");

    // Toggle the visibility of the profile-details element
    if (profileDetails.style.display === "block" || profileDetails.style.display === "") {
        profileDetails.style.display = "none";
    } else {
        profileDetails.style.display = "block";
    }
}
        </script>
        <script>
            function toggleMenu() {
                var navBar = document.querySelector('.nav-bar');
                navBar.classList.toggle('active');
            }
        </script>
</aside>
