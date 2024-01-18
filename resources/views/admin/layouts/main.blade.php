@include('admin.layouts.utilities')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khukuri Store</title>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layouts.side-nav-bar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('admin.layouts.top-nav-bar')
                <div class="content-wrapper">
                    @include('errors.session')
                    <!-- Content -->
                    @yield('admin-content')
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    /* .layout-page {
        width: 82%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
    } */

    .content-wrapper {
        position: absolute;
        top: 10%;
        left: 20%;
        width: 80%;
        height: 90%;
        overflow-y: scroll;
        padding: 0 2.5rem;
    }
</style>
</html>
