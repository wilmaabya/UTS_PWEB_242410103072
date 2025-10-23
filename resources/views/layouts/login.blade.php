<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SnakeAdopt</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-3xl mb-6 font-semibold">Login ke SnakeAdopt</h1>

<form action="{{ route('processLogin') }}" method="POST" class="bg-gray-800 p-6 rounded-xl shadow-md w-80">
    @csrf
    
        <div class="mb-4">
            <label for="username" class="block mb-2">Username</label>
            <input type="text" id="username" name="username" class="w-full px-3 py-2 rounded text-black" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded text-black" required>
        </div>

        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 py-2 rounded font-semibold">
            Login
        </button>
    </form>
</body>
</html>
