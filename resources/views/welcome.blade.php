<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchalatte Coffeeshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#D3D3D3] text-gray-800">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<!-- Navbar -->
<header class="bg-[#D3D3D3] shadow-md py-4">
    <div class="container mx-auto flex items-center px-4">
        <!-- Logo dengan ukuran lebih besar -->
        <img src="images/nadia-removebg-preview.png" alt="Logo" class="w-16 h-16 mr-3">

        <!-- Judul dengan font khusus dan efek bayangan -->
        <h1 
            class="text-3xl font-semibold text-[#85A98F] inline-block px-2" 
            style="font-family: 'Lobster', cursive; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            Nad's Latte
        </h1>

        <!-- Menu navigasi -->
        <div class="ml-auto">
            @if (Route::has('login'))
                @auth
                    <!-- Link Dashboard untuk pengguna biasa -->
                    <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-primary">Dashboard</a>

                    <!-- Link Admin hanya untuk pengguna dengan peran 'admin' -->
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ url('/admin') }}" class="ml-4 text-gray-700 hover:text-primary">Admin</a>
                    @endif
                @else
                    <!-- Link Login -->
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-primary">Log in</a>
                    
                    <!-- Link Register -->
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-700 hover:text-primary">Register</a>
                    @endif

                    <!-- Link[] About Us -->
                    <a href="/about" class="ml-4 text-gray-700 hover:text-primary">About Us</a>
                @endauth
            @endif
        </div>
    </div>
</header>



<!-- Hero Section -->
<section class="bg-[#D3D3D3] py-16 relative">
    <!-- Card Container for Hero Section -->
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-70 z-10"></div>
    
    <div class="container mx-auto text-center px-4 relative z-20">
        <!-- Teks Selamat datang -->
        <h2 class="text-5xl font-bold mb-6 text-white p-6 rounded-lg w-full transform-gpu transition duration-1000 ease-out animate__animated animate__fadeIn animate__delay-1s animate__bounceIn text-shadow-lg hover:scale-110 hover:text-[#85A98F] font-[Poppins] hover:animate__pulse">
            Hello Matcha Love!
        </h2>
        <!-- Teks Green Goodness -->
        <p class="text-xl mb-8 text-white p-6 rounded-lg w-full transform-gpu transition duration-1000 ease-out animate__animated animate__fadeIn animate__delay-2s animate__pulse text-shadow-lg hover:scale-105 hover:text-[#85A98F] font-[Lobster] hover:animate__pulse">
            "Green Goodness in Every Sip!"
        </p>
        <!-- Tombol -->
        <a href="#" class="bg-transparent border-2 border-[#85A98F] text-[#85A98F] py-2 px-6 rounded-md hover:bg-[#85A98F] hover:text-white transition w-full transform-gpu hover:scale-105 hover:rotate-6 hover:shadow-lg active:text-white">
            Open Our Menu
        </a>
    </div>
    
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0" style="background-image: url('images/hd.jpg');"></div>
</section>


<!-- Produk Unggulan -->
<section class="container mx-auto py-12 px-4">
    <h3 class="text-3xl font-extrabold mb-6 text-center text-black pb-4 border-b-4 border-[#698269] mx-auto">
    Top Pour
    </h3>
</section>


<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Produk 1 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/product1.jpg') }}" alt="Produk 1" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Serene Matcha</h4>
        <p class="text-gray-600 text-sm mb-4">Serene Matcha menggabungkan ketenangan "serene" dengan matcha, menciptakan pengalaman minum yang menenangkan dan menyegarkan, ideal untuk suasana santai di coffeshop.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Beli Sekarang</button>
        </div>
    </div>

    <!-- Produk 2 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/product2.jpg') }}" alt="Produk 2" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Golden Morn</h4>
        <p class="text-gray-600 text-sm mb-4">Golden Morn adalah kopi latte dengan rasa lembut dan keemasan, dipadukan dengan kenyalnya boba untuk sensasi manis dan tekstur unik.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Beli Sekarang</button>
        </div>
    </div>

    <!-- Produk 3 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/product3.jpg') }}" alt="Produk 3" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Salty Dream</h4>
        <p class="text-gray-600 text-sm mb-4">Salty Dream adalah kopi salted caramel dengan perpaduan rasa manis dan gurih yang lembut dan memanjakan.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Beli Sekarang</button>
        </div>
    </div>
</div>


<!-- Menu Makanan -->
<section class="container mx-auto py-12 px-4">
    <h3 class="text-3xl font-extrabold mb-6 text-center text-black pb-4 border-b-4 border-[#698269] mx-auto">
    Star Plate
    </h3>
</section>


<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Makanan 1 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/ui.jpg') }}" alt="Makanan 1" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Matcha Cheesecake</h4>
        <p class="text-gray-600 text-sm mb-4">Cheesecake lembut dengan rasa matcha yang kaya, sempurna untuk pecinta manis dan teh hijau.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Pesan Sekarang</button>
        </div>
    </div>

    <!-- Makanan 2 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/cr.jpg') }}" alt="Makanan 2" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Croffle Matcha</h4>
        <p class="text-gray-600 text-sm mb-4">Croffle renyah di luar, lembut di dalam, disajikan dengan saus matcha yang lezat.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Pesan Sekarang</button>
        </div>
    </div>

    <!-- Makanan 3 -->
    <div class="bg-[#85A98F] rounded-xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 flex flex-col">
        <div class="h-48 bg-gray-300 rounded-md mb-4 overflow-hidden">
            <img src="{{ asset('images/tr.jpg') }}" alt="Makanan 3" class="w-full h-full object-cover rounded-md">
        </div>
        <h4 class="text-lg font-semibold mb-2">Matcha Tiramisu</h4>
        <p class="text-gray-600 text-sm mb-4">Tiramisu dengan lapisan matcha yang creamy, menawarkan perpaduan rasa kopi dan matcha.</p>
        <div class="mt-auto">
            <button class="bg-transparent text-white py-2 px-4 rounded-md border-2 border-[#698269] hover:bg-[#698269] hover:text-white transition w-full">Pesan Sekarang</button>
        </div>
    </div>
</div>



    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2024 Matchalatte Coffeeshop. All Rights Reserved.</p>
    </footer>

   
</body>
</html>
