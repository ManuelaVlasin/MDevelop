<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>


<div class="container">

    <header class="row">

        @include('layout.partials.navbar')

    </header>


    <div id="main" class="row" style="margin-top: 4rem; padding: 20px">

        @yield('content')

    </div>

    <footer class="row">


    </footer>

</div>

@include('includes.footer')
</body>

</html>
