<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta id="token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

  <title>Flox - Collect Your Movie Watch List</title>
  <link rel="stylesheet" href="{{ url('assets/app.css') }}">
  <link href="{{ url('assets/favicon.ico?v=3') }}" rel="icon" type="image/x-icon">

</head>
<body
  data-url="{{ url('/') }}"
  data-uri="{{ config('app.CLIENT_URI') }}"
  data-scout-driver="{{ config('scout.driver') }}"
  data-auth="{{ Auth::check() }}"
  class="{{ Auth::check() ? 'logged' : 'guest' }}"
>

  <div id="app" :class="colorScheme">
    @if(Request::is('login'))
      <login></login>
    @else
      <site-header></site-header>
      <search></search>
      <router-view></router-view>
      <site-footer></site-footer>
    @endif
  </div>

  <script src="{{ url('assets/vendor.js') }}"></script>
  <script src="{{ url('assets/app.js') }}"></script>

</body>
</html>