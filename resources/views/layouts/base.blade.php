<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedições</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-700"
    style="background-image: url(https://guikao.files.wordpress.com/2012/01/pokemon_wallpaper01_1680.jpg);">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Extreme
                    adventures</span>
            </a>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="{{url('expeditions/create')}}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Expedição</a>
                    </li>
                    <li>
                        <a href="{{url('explorers/create')}}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Explorador</a>
                    </li>
                    <li>
                        <a href="{{url('artifacts/create')}}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Artefatos</a>
                    </li>
                    <li>
                        <a href="{{url('guides/create')}}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Guia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>