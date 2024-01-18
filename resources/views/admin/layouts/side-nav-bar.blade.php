<aside class="layout-side-nav-bar-wrapper">
    <div class="layout-side-nav-bar">
        <div class="side-nav-bar-wrapper">
            <div class="side-nav-bar-section">
                <div class="logo-section">
                    <div class="logo d-flex justify-content-center p-5">
                        <a href="{{ route('dashboard') }}">
                            <div class="logo-house">
                                Famous
                            </div>
                            <div class="logo-khukuri">
                                Khukuri
                            </div>
                            <div class="logo-house">
                                House
                            </div>
                        </a>
                    </div>
                </div>
                <div class="nav-section ">
                    <ul>
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Product Management</span>
                            <div class="user-section">
                                {{-- @hasrole('Super-Admin') --}}
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('product.create') }}">Insert a Product</a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('product.index') }}">View Products</a>
                                    </li>
                                </ul>
                                {{-- @endhasrole --}}
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="menu-header text-uppercase pt-4 pb-4">
                            <span class="menu-header-text">Image Section</span>
                            <div class="image-section">
                                {{-- @hasrole('Super-Admin') --}}
                                <ul>
                                    <li class="small">
                                        <a href="{{ route('images.create') }}">Insert a Image</a>
                                    </li>
                                    <li class="small">
                                        <a href="{{ route('images.index') }}">View Images</a>
                                    </li>
                                </ul>
                                {{-- @endhasrole --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* .layout-side-nav-bar{
            height: 100%;
            width: 18%;
            position: sticky;
            left: 0;
            top: 0;
            background-color: #1e1817;
        } */



        .layout-side-nav-bar-wrapper {
            height: 100%;
            width: 20%;
            position: sticky;
            left: 0;
            top: 0;
            background-color: #7a7a7a;
            overflow-y: scroll;
        }

        .logo-house {
            color: var(--secondar, rgba(159, 9, 9, 0.92));
            /* background-color: var(--secondar, rgba(159, 9, 9, 0.92)); */
            padding: 0.5rem 0.3rem;

        }

        .logo a {
            display: flex;
            align-items: center;
        }

        .logo-khukuri {
            color: #386e75;
            /* background-color: #386e75; */
            padding: 0.5rem 0.3rem;
        }

        .logo{
            font-size: 1.4rem;
            font-weight: 700;
        }

        /* a span:hover{
            color: #ffa31a;
        } */
    </style>
</aside>
