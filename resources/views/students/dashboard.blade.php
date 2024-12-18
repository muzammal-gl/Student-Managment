<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <a href="{{route('logout')}}" 
       class="bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-300 block mx-auto mt-8 w-64 text-center transition-all">
       Logout
    </a>
    <h1 class="text-center">{{ Auth::guard('students')->user()->name }}</h1>
    <h1 class="text-3xl font-bold text-center mt-16 text-blue-600">
        Welcome to the Student Dashboard
    </h1>
</body>
</html>
