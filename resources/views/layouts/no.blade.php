<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="/resources/js/app.js" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> {{$title}} | Sabang Trip </title>
    @vite('resources/css/app.css')
</head>
<style>
    body {
        font-family: 'Poppins';
        background-color: #EEE9DA;
        background-image: url('{{asset('image/background.svg')}}');
        background-size: cover;
        background-attachment: fixed;
    }
</style>


<body @yield('body')>



@include('sweetalert::alert')
    <main class="min-h-screen">
        @yield('content')

    </main>

    @vite('resources/js/app.js')


</body>

</html>