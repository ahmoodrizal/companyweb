<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 px-6 py-4 mb-4">
                            <div class="">
                                <label for="emp_fullname" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Name</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_fullname" value="{{ $employee->emp_fullname }}">
                                @error('emp_fullname') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="grid grid-cols-2 mt-4 mb-4 gap-8">
                                <div class="grid grid-cols-1">
                                    <label for="emp_id" class="block mb-2 text-md font-bold text-gray-700">Employee
                                        ID</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_id" value="{{ $employee->emp_id }}">
                                    @error('emp_id') <span class=" text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label for="emp_department"
                                        class="block mb-2 text-md font-bold text-gray-700">Employee Department</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_department" value="{{ $employee->emp_department }}">
                                    @error('emp_department') <span class=" text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="emp_email" class="block mb-2 text-md font-bold text-gray-700">Email</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_email" value="{{ $employee->emp_email }}">
                                @error('emp_email') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="emp_address"
                                    class="block mb-2 text-md font-bold text-gray-700">Address</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_address" value="{{ $employee->emp_address }}">
                                @error('emp_address') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="block mb-2 text-md font-bold text-gray-700">Gender</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="gender" value="{{ $employee->gender }}">
                                @error('gender') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="salary" class="block mb-2 text-md font-bold text-gray-700">Salary</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="salary" value="{{ $employee->salary }}">
                                @error('salary') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                <x-button type="reset">
                                    <a href="{{ route('employee.index') }}">{{ 'Cancel' }}</a>
                                </x-button>
                                <x-button>
                                    {{ 'Submit Data' }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function previewImage() {
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.classList.add("h-36");
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
