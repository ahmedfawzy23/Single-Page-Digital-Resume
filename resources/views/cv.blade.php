<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CV</title>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">My CV</h1>
        <nav class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-blue-500">Home</a>
            <a href="#" class="text-gray-600 hover:text-blue-500">About</a>
            <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
        </nav>
    </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white shadow-md rounded p-6">
                <h2 class="text-2xl font-semibold mb-4">Welcome to My CV</h2>
                <p class="text-gray-700 leading-relaxed">Here is some information about me.</p>
                <p> <strong>Full name:</strong> {{ $data['personal_info']['full_name'] ?? 'N/A' }}</p>
                <p> <strong>Email:</strong> {{ $data['personal_info']['email'] ?? 'N/A' }}</p>
            </div>
        </div>
    </main>
    <footer class="bg-gray-200 text-center text-sm text-gray-600 py-4 mt-12">
        &copy; 2025 My CV. All rights reserved.
    </footer>
</body>
</html>
