<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title> @yield('Title','B.T.C.')</title>
</head>
<body>
    {{-- site_header --}}
    <header id="site_header">
        <div class="container-xl text-center">
            <h1>Boolean Travel Company</h1>
            <nav>
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('travels')}}">Travels</a>
            </nav>
        </div>
    </header>
    {{-- /site_header --}}

    {{-- site_main --}}
    <main id="site_main">
        @yield('content')
    </main>
    {{-- site_main --}}

    {{-- /site_footer --}}
    <footer id="site_footer">
        
    </footer>
    {{-- /site_footer --}}
</body>
</html>