<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Page Component</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
   
    <x-navbar />
    <div class="max-w-3xl m-auto p-3 bg-red">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>