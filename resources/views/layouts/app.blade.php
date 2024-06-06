<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title> {{$title}} | Sabang Trip </title>
    @vite('resources/css/app.css')
</head>
<style>
    body {
        font-family: 'Poppins';
        background-color: #EEE9DA;
    }

</style>


<body @yield('body')>


    @include('partials.navbar')


    <main class="min-h-screen">
        @yield('content')

    </main>

    @include('partials.footer')
    @vite('resources/js/app.js')


</body>

</html>