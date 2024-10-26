<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/68f8681dba.js"></script>
    <title>@yield('title', 'Murdy.Party - Best Murder Script Party in UK')</title>
</head>
<body>
    @include('partials.header')

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
