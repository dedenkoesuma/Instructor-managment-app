<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar.guest.navbar')
    @yield('page')
    @include('partials.footers.guest.footer')
    @include('partials.script')
</body>
</html>