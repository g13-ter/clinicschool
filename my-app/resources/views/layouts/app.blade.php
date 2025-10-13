<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Benedicto College School Clinic')</title>
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <style>
            /* Fallback utility classes to mirror your Tailwind custom theme */
            .bg-clinic-blue { background-color: #3498db; }
            .text-clinic-blue { color: #3498db; }
            .border-clinic-blue { border-color: #3498db; }

            .bg-clinic-orange { background-color: #f39c12; }
            .text-clinic-orange { color: #f39c12; }
            .border-clinic-orange { border-color: #f39c12; }

            .bg-clinic-red { background-color: #e74c3c; }
            .text-clinic-red { color: #e74c3c; }
            .border-clinic-red { border-color: #e74c3c; }

            .bg-clinic-green { background-color: #27ae60; }
            .text-clinic-green { color: #27ae60; }
            .border-clinic-green { border-color: #27ae60; }

            .bg-clinic-purple { background-color: #9b59b6; }
            .text-clinic-purple { color: #9b59b6; }
            .border-clinic-purple { border-color: #9b59b6; }

            .bg-clinic-dark { background-color: #2c3e50; }
            .text-clinic-dark { color: #2c3e50; }
        </style>
    @endif
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    @include('header.header')

    <div class="flex">
        @include('sidebar.sidebar')

        <main class="flex-1 min-w-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                @yield('content')
            </div>
        </main>
    </div>
    @fluxScripts
</body>
</html>


