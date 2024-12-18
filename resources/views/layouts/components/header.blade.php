<header>
    <nav class="bg-gray-800 p-4">
        <div class="container-fluid mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white text-2xl font-bold hover:text-yellow-400 transition-colors no-underline">Dashboard</a>
            <div class="text-white text-lg">
                <span>{{ auth()->user()->name }}</span>
            </div>
        </div>

        {{-- <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://www.example.com/your-image.jpg" alt="Profile" class="rounded-circle" width="30" height="30">
                Username
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div> --}}
    </nav>
</header>

