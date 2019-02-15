<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    @include('inc/navbar')
    

    <main role="main" class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-sm-7 offset-sm-2">
                @include('inc/message')
                @yield('content') 
                @if(Request::is('home'))
                    <h1>this is home page</h1>
                @endif
            </div>
            <div class="col-sm-3">
                 @include('inc/sidebar')
            </div>
        </div>
        {{--@include('inc.sidebar') --}}
    </main>
    <!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VoPFvGr9GxhDT3n8vqqZ46twP5lgex+raTCfICQy73NLhN7ZqSfCtfSn4mLA2EFA"
        crossorigin="anonymous"></script>
</body>

</html>