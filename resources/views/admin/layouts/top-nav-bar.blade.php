<aside>
    <div class="layout-top-nav-bar d-flex align-items-center justify-content-end">
        <div class="top-nav-bar-wrapper">
            <div class="top-nav-bar-section ">
                <div class="profile-icon" onclick="showDetails()">
                    <i class="bi bi-person"></i>
                </div>
                <div class="profile-details text-nowrap " id="profileDetails">
                    <div class="detail-info d-flex justify-content-center p-2">
                        <span><strong>{{ $user->name }}</strong></span>
                    </div>
                    <div class="logout d-flex justify-content-center p-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-power"></i><span>LogOut</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .layout-top-nav-bar {
            width: 80%;
            height: 3.5rem;
            position: absolute;
            top: 0;
            right: 0;
            background-color: #20190d;
            color: #ccc;
        }

        .profile-details {
            display: none;
            position: absolute;
            top: 4rem;
            right: 0;
            background-color: #1e1817;
            width: auto;
            height: auto;
            z-index: 1;
            color: #ccc;

        }

        .profile-icon {
            font-size: 2rem;
            align-items: center;
        }

        .top-nav-bar-section {
            margin-right: 5rem;
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
</aside>
