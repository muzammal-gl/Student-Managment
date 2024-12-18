@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 text-end">
    {{-- <a data-bs-toggle="modal" data-bs-target="#studentModal" class="bg-blue-500 hover:bg-blue-600 text-white cursor-pointer font-semibold py-2 px-4 rounded mb-4 inline-block text-end no-underline">
        Add New Student
    </a> --}}
    <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mb-4 inline-block text-end no-underline">
        Add New Student
    </a>
    <!-- Student Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-800 text-white uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Sr.</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Phone</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($students as $index=>$student)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $index+1}}</td>
                    <td class="py-3 px-6 text-left">{{ $student->name }}</td>
                    <td class="py-3 px-6 text-left">{{ $student->phone_number }}</td>
                    <td class="py-3 px-6 text-left">{{ $student->email }}</td>
                    <td class="py-3 px-6 text-center">
                        @if ($student->status == 'active')
                            <span class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-xs me-4">Active</span>
                        @else
                            <span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Inactive</span>
                        @endif
                    </td>
                    <td class="py-3 px-6 text-center">
                        <!-- Edit Button -->
                        <a href="{{ route('students.edit', $student->id) }}" 
                           class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold py-1 px-3 rounded no-underline">
                            Edit
                        </a>
                        
                        <!-- Delete Form -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure?')"
                                    class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold py-1 px-3 rounded ms-2 no-underline">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  
    <div class="text-end">
        {{ $students->links() }}
    </div>
</div>
@endsection

<!-- Modal -->
{{-- <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title text-2xl font-bold text-gray-700 mb-6" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="">
                <form id="studentForm" method="POST" class="space-y-4">
                    @csrf
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full px-4 py-2 required border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                        @error('name') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <!-- Phone Field -->
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" class="mt-1 block w-full px-4 py-2 required border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phone_number') border-red-500 @enderror">
                        @error('phone_number') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full px-4 py-2 required border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                        @error('email') 
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <!-- Status Field -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-600">Status</label>
                        <select name="status" id="status" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
            
                    <!-- Submit Button -->
                    <div>
                        <button type="submit" id="studentbtn" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#studentForm').submit(function (e) {
            e.preventDefault();
            let isValid = true;
            $('.required').each(function () {
                if ($(this).val().trim() === "") {
                    $(this).css('border', '1px solid red !important');
                    const fieldName = $(this).attr('name');
                    if ($(this).next('.error-message').length === 0) {
                        $(this).after(`<div class="error-message" style="color: red; font-size: 14px;">The ${fieldName} field is required.</div>`);
                    }
                    isValid = false;
                }
            });

            $('.required').on('input', function () {
            $(this).css('border', '');
            $(this).next('.error-message').remove();
        });

            if (isValid) {
                let formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('#studentModal').modal('hide');
                            $('#studentForm')[0].reset();
                            alert('Student added successfully!');
                            location.reload();
                        } else {
                            alert('An error occurred, please try again.');
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong. Please try again later.');
                    }
                });
            }
        });

        $('#studentModal').on('hidden.bs.modal', function () {
            $(this).find('.required').css('border', '');
            $(this).find('.required').val('');
            $('.error-message').remove();
        });
    });
</script> --}}
