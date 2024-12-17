<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login Teacher</h2>

        @if (session('success'))
            <p class="text-green-500 text-center">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <p class="text-red-500 text-center mb-4">{{ $errors->first('email') }}</p>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-medium">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-600 font-medium">Password:</label>
                <input type="password" name="password" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">Login</button>
        </form>

        <p class="mt-4 text-center text-gray-600">Don't have an account? <a href="{{ route('signup') }}" class="text-blue-600 hover:text-blue-800">Signup</a></p>
    </div>

</body>
</html>
