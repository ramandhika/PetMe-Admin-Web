<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    @include('layout.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
