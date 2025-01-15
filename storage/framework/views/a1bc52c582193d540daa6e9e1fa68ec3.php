<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-green {
            background-color: #A8C69E; /* Hijau Matcha */
        }
        .custom-gray {
            background-color: #F5F5F5; /* Abu-abu lembut */
        }
    </style>
</head>
<body class="custom-gray text-gray-800">

    <!-- Navbar -->
    <header class="custom-green shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold text-white">Admin Dashboard</h1>
            <div>
                <a href="<?php echo e(url('/')); ?>" class="text-white hover:underline">Home</a>
                <a href="<?php echo e(route('logout')); ?>" class="ml-4 text-white hover:underline"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <main class="container mx-auto py-12 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Manajemen Produk -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold">Manajemen Produk</h2>
                <ul class="mt-4 space-y-4">
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                        <div>
                            <p class="text-lg font-semibold">croffle matcha</p>
                            <p class="text-gray-600">Harga: Rp5.000.000</p>
                        </div>
                        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">
                            Hapus
                        </button>
                    </li>
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                        <div>
                            <p class="text-lg font-semibold">tiramisu matcha</p>
                            <p class="text-gray-600">Harga: Rp5.000.000</p>
                        </div>
                        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">
                            Hapus
                        </button>
                    </li>
                </ul>
                <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500">
                    Tambah Produk
                </button>
            </div>

            <!-- Pesanan Masuk -->
            <div class="md:col-span-2 bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold">Pesanan Masuk</h2>
                <ul class="mt-4 space-y-4">
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                        <div>
                            <p class="text-lg font-semibold">Pesanan #001</p>
                            <p class="text-gray-600">Produk: croffle matcha</p>
                            <p class="text-gray-600">Tanggal: 08 Januari 2025</p>
                        </div>
                        <span class="text-yellow-600 font-semibold">Dalam Proses</span>
                    </li>
                    <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                        <div>
                            <p class="text-lg font-semibold">Pesanan #002</p>
                            <p class="text-gray-600">Produk: tiramisu matcha</p>
                            <p class="text-gray-600">Tanggal: 05 Januari 2025</p>
                        </div>
                        <span class="text-green-600 font-semibold">Selesai</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Manajemen Pengguna -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Manajemen Pengguna</h2>
            <ul class="space-y-4">
                <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                    <div>
                        <p class="text-lg font-semibold">Nama Pengguna 1</p>
                        <p class="text-gray-600">Email: user1@example.com</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                        Lihat Profil
                    </button>
                </li>
                <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                    <div>
                        <p class="text-lg font-semibold">Nama Pengguna 2</p>
                        <p class="text-gray-600">Email: user2@example.com</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                        Lihat Profil
                    </button>
                </li>
            </ul>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2025 E-Commerce Dashboard. All Rights Reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\warungvrl\resources\views/admin_dashboard.blade.php ENDPATH**/ ?>