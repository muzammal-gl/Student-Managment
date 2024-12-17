<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Create an Teacher</h2>

        <form method="POST" action="{{ route('signup.post') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-medium">Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                @error('name') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-medium">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                @error('email') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-gray-600 font-medium">Password:</label>
                <input type="password" name="password" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                @error('password') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-600 font-medium">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation') 
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">Signup</button>
        </form>

        <p class="mt-4 text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800">Login</a></p>
    </div>

</body>
</html>
