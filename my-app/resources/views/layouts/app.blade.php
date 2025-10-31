<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Benedicto College School Clinic')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'clinic-blue': '#3498db',
                        'clinic-orange': '#f39c12',
                        'clinic-red': '#e74c3c',
                        'clinic-green': '#27ae60',
                        'clinic-purple': '#9b59b6',
                        'clinic-dark': '#2c3e50',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    @include('header.header')

    <div class="flex min-h-screen">
        @include('sidebar.sidebar')

        <div class="flex-1 ml-64 p-5 mt-16">
            @if(session('status'))
                <div class="mb-4 p-4 rounded-lg bg-clinic-green text-white shadow">{{ session('status') }}</div>
            @endif
            
            @yield('content')
        </div>
    </div>
</body>
</html>


