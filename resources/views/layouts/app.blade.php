<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') :: {{ $settings->app_name }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $settings->app_name }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{ public_asset('assets/front/css/style.css') }}" rel="stylesheet" />
    @stack('styles')
</head>

<body class="bg-white">
    @include('layouts.header')


    <main>
        @yield('content')
        <section class="py-12 text-center">
            <h2 class="text-xl font-semibold">DISCOVER US ON INSTAGRAM</h2>
        </section>
    </main>
    @include('layouts.footer')
    <div class="whatsapp-icon">
        <img alt="whatsapp icon"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUcxm1ZZ_qN-xJpbGeqOyKlJnMq1993wrv7TzV1OiZGOKp35oX9lbQjGLVZFrZzg1CqDhXjYyqgQx1NneMJcCbuSnvwKV0nfKAj23lcuLaa2LoQyOmVvsOBkcoyxiVaXwyU2pHKJfvSvvqSaaaBGmvyz_oOLehbBqXtNr8VYHDg1waqPUbQMlgcufI2cMGyHSykbPIspaGB3FXsyhAM7bzSiogc9nbmYxHGzGYEHw8qO6gvaK25Oonoj13xQUMiJnDYsF0Q6L8qO97" />
    </div>

</body>

</html>
