<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{config('app.name')}}</title>
    <!-- CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container container-lg  p-2 p-lg-5 ">
    <div>
        @yield('content')
    </div>
</body>

</html>