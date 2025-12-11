<!doctype html>
<html lang="en">

<!-- Head -->
@include('layouts.front.head')
<body class="">

    @include('layouts.front.navbar')


    @yield('content')


    @include('layouts.front.footer')
    {{-- @include('store.layout.footer_script') --}}
    @yield('js')

</body>

</html>
