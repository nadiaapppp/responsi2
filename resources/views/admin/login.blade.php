<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Matchalatte Coffeeshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-semibold text-center text-gray-700">Admin Login</h1>
        <form method="POST" action="{{ route('admin.login.submit') }}" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required>
            </div>
            <button type="submit" class="w-full py-2 mt-4 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none">Log in</button>
        </form>
    </div>
</body>
</html>
