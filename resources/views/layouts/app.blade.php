<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Matchalatte Coffeeshop')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#D3D3D3] text-gray-800">
    <header class="bg-[#85A98F] shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-semibold text-white">@yield('header', 'Dashboard')</h1>
            <a href="{{ route('logout') }}" class="text-white">Logout</a>
        </div>
    </header>

    <div class="py-12">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
