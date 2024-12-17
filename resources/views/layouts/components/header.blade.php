<header>
    <nav class="bg-gray-800 p-4">
        <div class="container-fluid mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white text-2xl font-bold hover:text-yellow-400 transition-colors no-underline">Dashboard</a>
            <div class="text-white text-lg">
                <span>{{ auth()->user()->name }}</span>
            </div>
        </div>
    </nav>
    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 hidden group-hover:block">
        <div class="py-2">
            <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Edit Profile</a>
            <form action="{{ route('logout') }}" method="POST" class="px-4 py-2 text-gray-700 hover:bg-gray-200">
                @csrf
                <button type="submit" class="w-full text-left">Logout</button>
            </form>
        </div>
    </div>
</header>

