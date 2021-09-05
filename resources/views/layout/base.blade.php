<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>MyProducts</title>

@include('partials.head-connects')
</head>
<body>
<header>
    @include('partials.head-menu')
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            @yield('jumbotron')
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

</main>

<footer class="text-muted">
    @include('partials.footer')
</footer>
@include('partials.footer-connects')
</body>
</html>
