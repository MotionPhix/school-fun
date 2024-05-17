<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" href="{{ asset('favicon_io/favicon.ico') }}">

      <link rel="shortcut icon" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">

      <link rel="shortcut icon" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">

      <link rel="apple-touch-icon" href="{{ asset('favicon_io/apple-touch-icon.png') }}">

      <link rel="icon" href="{{ asset('favicon_io/android-chrome-192x192.png') }}" sizes="192x192">

      <link rel="icon" href="{{ asset('favicon_io/android-chrome-512x512.png') }}" sizes="512x512">

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">

      <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

      <link href="https://fonts.bunny.net/css?family=source+serif+pro:400,600,700&display=swap" rel="stylesheet" />

      @spladeHead

      @vite('resources/js/app.js')

    </head>

    <body class="font-sans antialiased">

      @splade

    </body>

</html>
