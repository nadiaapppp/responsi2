<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Matchalatte Coffeeshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 text-gray-800">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-6">Admin Login</h2>

            <!-- Menampilkan error jika ada kesalahan login -->
            @if ($errors->any())
                <div class="bg-red-200 p-4 rounded-lg mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-md" required>
                </div>

                <button type="submit" class="w-full bg-[#85A98F] text-white py-2 px-4 rounded-md hover:bg-[#698269] transition">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
