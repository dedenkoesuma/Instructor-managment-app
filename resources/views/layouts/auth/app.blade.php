<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar.auth.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        @include('partials.navbar.auth.navbar')
        @yield('page') 
        @include('partials.footers.auth.footer')
    </div>
    @include('partials.script')
</body>
</html>