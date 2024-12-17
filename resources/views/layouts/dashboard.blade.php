@extends('layouts.app')

@section('content')
<div class="mx-auto space-x-10 flex ">
   <!-- Total Students Card -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex-1" style="height: 115px;">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <span class="text-gray-700 text-lg font-medium">
                <i class="fas fa-users mr-2"></i> Total Students:
            </span>
            <span class="text-gray-900 text-lg font-bold">{{ $totalStudents }}</span>
        </div>
    </div>
</div>

<!-- Active Students Card -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex-1" style="height: 115px;">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <span class="text-gray-700 text-lg font-medium">
                <i class="fas fa-check-circle text-green-600 mr-2"></i> Active Students:
            </span>
            <span class="text-green-600 text-lg font-bold">{{ $activeStudents }}</span>
        </div>
    </div>
</div>

<!-- Inactive Students Card -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex-1" style="height: 115px;">
    <div class="p-6">
        <div class="flex justify-between items-center">
            <span class="text-gray-700 text-lg font-medium">
                <i class="fas fa-exclamation-circle text-red-500 mr-2"></i> Inactive Students:
            </span>
            <span class="text-red-500 text-lg font-bold">{{ $inactiveStudents }}</span>
        </div>
    </div>
</div>

</div>

@endsection
