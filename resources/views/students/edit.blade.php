@extends('layouts.app')

@section('content')

<div class="p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" 
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
            @error('name') 
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Phone Field -->
        <div>
            <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $student->phone_number) }}" 
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phone_number') border-red-500 @enderror">
            @error('phone_number') 
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" 
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
            @error('email') 
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Status Field -->
        <div>
            <label for="status" class="block text-sm font-medium text-gray-600">Status</label>
            <select name="status" id="status" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="active" {{ old('status', $student->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $student->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" 
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none">
                Save
            </button>
        </div>
    </form>
</div>

@endsection
