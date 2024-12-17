<div class="w-full" style="width: 278px; height: 550;position: relative;top: -38px;"> 
    <div class="bg-gray-800 text-white h-full rounded-lg rounded-tl-none rounded-tr-none shadow-lg">
        <ul class="space-y-2 p-4">
            <li>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 text-white no-underline">
                    <i class="fas fa-tachometer-alt mr-2"></i>  <!-- Dashboard Icon -->
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('students.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 text-white no-underline">
                    <i class="fas fa-users mr-2"></i>  <!-- Users Icon -->
                    Students
                </a>
            </li>
            <!-- Add more links as needed -->
        </ul>
        
    </div>
</div>
