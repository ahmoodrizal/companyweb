<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 px-6 py-4 mb-4">
                            <div class="">
                                <label for="emp_id" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    ID</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_id">
                                @error('emp_id') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="emp_fullname" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Full Name</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_fullname">
                                @error('emp_fullname') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="emp_department" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Department</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_department">
                                @error('emp_department') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="emp_email" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Email</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_email">
                                @error('emp_email') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="gender" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Gender</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="gender">
                                @error('gender') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="emp_address" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Address</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_address">
                                @error('emp_address') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class="mt-2">
                                <label for="salary" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Salary</label>
                                <input type="text" class="w-full px-3 py-2 mt-2 text-gray-700 rounded-xl font-semibold"
                                    name="salary">
                                @error('salary') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>

                            <div class='flex items-center justify-center mt-4 md:gap-8 gap-4 pt-5 pb-5'>
                                <x-button type="reset">
                                    <a href="{{ route('employee.index') }}">{{ 'Cancel' }}</a>
                                </x-button>
                                <x-button class="ml-3">
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
