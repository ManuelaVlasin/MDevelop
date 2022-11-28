<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>


<div class="app-container">

    <header>

        @include('layout.partials.navbar')

    </header>


    <div class="main">

        @yield('content')

    </div>

    <footer class="row">


    </footer>

</div>

@include('includes.footer')
</body>

</html>
