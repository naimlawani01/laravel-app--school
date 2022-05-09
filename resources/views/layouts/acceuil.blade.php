<!DOCTYPE html>
<html lang="en">
@include('includes.head')
    <body>
        @include('includes.header')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
        <!-- End footer Area -->

        @include('includes.script')

        </body>
</html>

