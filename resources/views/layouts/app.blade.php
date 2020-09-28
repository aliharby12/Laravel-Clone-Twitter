<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <div class="px-8 py-4 mb-6 flex justify-between mb-3 mt-8 items-center">
              <div>
                <a href="{!! route('home') !!}">
                  <img src="/images/logo.png" alt="Twitter" style="height:50px">
                </a>
              </div>
          </div>
        </div>
        <section class="px-8">
          <main class="container mx-auto">

            <div class="lg:flex lg:justify-between">
              @if (auth()->check())
                <div class="lg:w-32">
                  @include('_sidebar-links')
                </div>
              @endif

              {{-- end of _sidebar div --}}

              <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                @yield('content')
              </div>
              {{-- end of feeds and timeline --}}


              @if (auth()->check())
                <div class="lg:w-1/6 rounded-lg">
                  @include('_friends-list')
                </div>
              @endif
              {{-- end of friends div --}}

            </div>
            {{-- end of base div --}}

          </main>
        </section>
    </div>
</body>
</html>
