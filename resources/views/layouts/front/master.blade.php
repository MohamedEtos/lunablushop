<!doctype html>
<html lang="en">

<!-- Head -->
@include('layouts.front.head')

<body class="animsition">

    @include('layouts.front.navbar')
    @include('layouts.front.aside')


    @yield('content')


    @include('layouts.front.footer')
    @include('layouts.front.scripts')

</body>

</html>
