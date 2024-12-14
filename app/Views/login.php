<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://4.bp.blogspot.com/-CaNr6m41iuU/XAkqwcFsfTI/AAAAAAAAQrE/yXtyKuJr2Pk9fbGdZBbuzKgPYdP_gW6pgCLcBGAs/s1600/Siluet%2BMasjid.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white bg-opacity-90 rounded-lg shadow-lg p-8 backdrop-filter backdrop-blur-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Admin Login</h2>
        
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        
        <form action="/login" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200 transform hover:scale-105">Login</button>
        </form>
        <p class="mt-4 text-center text-gray-600">
            <a href="#" class="text-blue-500 hover:underline"> User: admin Pw:123</a>
        </p>
    </div>
</body>
</html>
