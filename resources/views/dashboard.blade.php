<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengguna - Nadiaa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-green {
            background-color: #A8C69E; /* Hijau Matcha */
        }
        .custom-gray {
            background-color: #F9FAFB; /* Abu-abu lembut */
        }
    </style>
</head>
<body class="custom-gray text-gray-800">

    <!-- Navbar -->
    <header class="custom-green shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-white">E-Commerce Dashboard</h1>
            <div>
                <a href="{{ url('/') }}" class="text-white hover:underline hover:text-gray-300">Home</a>
                <a href="{{ route('logout') }}" class="ml-4 text-white hover:underline hover:text-gray-300"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <main class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Profil Pengguna -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transform hover:scale-105 transition duration-300">
                <h2 class="text-xl font-semibold mb-4">Profil Pengguna</h2>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto Profil" class="w-20 h-20 rounded-full shadow-md mr-4">
                    <div>
                        <p class="text-lg font-bold">nadia putri</p>
                        <p class="text-gray-600">Email: verrelladriano08@gmail.com</p>
                        <p class="text-gray-600">Tanggal Bergabung: 10 Januari 2023</p>
                    </div>
                </div>
            </div>

            <!-- Pesanan Terbaru -->
            <div class="md:col-span-2 bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transform hover:scale-105 transition duration-300">
                <h2 class="text-xl font-semibold mb-4">Pesanan Terbaru</h2>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg hover:bg-green-50 transition duration-300">
                        <div>
                            <p class="text-lg font-semibold">Pesanan #001</p>
                            <p class="text-gray-600">Produk: croffle matcha</p>
                            <p class="text-gray-600">Tanggal: 08 Januari 2025</p>
                        </div>
                        <span class="text-green-600 font-semibold">Selesai</span>
                    </li>
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg hover:bg-yellow-50 transition duration-300">
                        <div>
                            <p class="text-lg font-semibold">Pesanan #002</p>
                            <p class="text-gray-600">Produk: tiramisu matcha</p>
                            <p class="text-gray-600">Tanggal: 05 Januari 2025</p>
                        </div>
                        <span class="text-yellow-600 font-semibold">Dalam Proses</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Wishlist -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <!-- Produk -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                <img src="images/tr.jpg" alt="Produk" class="w-24 h-24 mb-4 mx-auto rounded-lg">
                <p class="font-semibold text-lg text-center">Tiramisu Matcha</p>
                <p class="text-gray-600 text-center mb-4">Rp5.000.000</p>
                <button class="bg-green-600 text-white w-full py-2 rounded hover:bg-green-500 transition duration-300">
                    Tambah ke Keranjang
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                <img src="images/ball.jpg" alt="Produk" class="w-24 h-24 mb-4 mx-auto rounded-lg">
                <p class="font-semibold text-lg text-center">Jelly Ball</p>
                <p class="text-gray-600 text-center mb-4">Rp2.000.000</p>
                <button class="bg-green-600 text-white w-full py-2 rounded hover:bg-green-500 transition duration-300">
                    Tambah ke Keranjang
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                <img src="images/roll.jpg" alt="Produk" class="w-24 h-24 mb-4 mx-auto rounded-lg">
                <p class="font-semibold text-lg text-center">Matcha Roll</p>
                <p class="text-gray-600 text-center mb-4">Rp3.500.000</p>
                <button class="bg-green-600 text-white w-full py-2 rounded hover:bg-green-500 transition duration-300">
                    Tambah ke Keranjang
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2025 E-Commerce Dashboard. All Rights Reserved.</p>
    </footer>
</body>
</html>
