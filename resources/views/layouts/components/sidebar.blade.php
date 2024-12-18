<div class="w-full" style="width: 278px; height: 785;position: relative;top: 0px;"> 
    <div class="bg-gray-800 text-white h-full rounded-lg rounded-tl-none rounded-tr-none shadow-lg">
        <ul class="space-y-2 p-4">
            <li>
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 text-white no-underline">
                    <i class="fas fa-tachometer-alt mr-2"></i> 
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('students.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 text-white no-underline">
                    <i class="fas fa-users mr-2"></i> 
                    Students
                </a>
            </li>
            <li class="" style=" position: relative; top: 623px;left: -24px;">
                    <a href="{{route('logout')}}" class="btn btn-danger block px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 text-white no-underline" style="width: 278px;">Logout</a>
            </li>
        </ul>
        
    </div>
</div>
