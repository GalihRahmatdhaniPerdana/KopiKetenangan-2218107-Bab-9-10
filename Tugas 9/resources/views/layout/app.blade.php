<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{ asset('assets/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/adminkopi.css') }}" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
</head>
<body>
<div id="overlay" class="overlay"></div>
@include('partial.nav')
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name"> Kopi Ketenangan</span>
            </div>
        </nav>
        <div class="home-content">
            @yield('content')
        </div>
    </section>
    <script src="{{ asset('js/jeniskopi.js') }}"></script>
</body>
</html>