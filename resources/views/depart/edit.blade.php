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
                    <form action="{{ route('depart.update', $depart->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 px-6 py-4 mb-4">
                            <div>
                                <label for="dept_name" class="block mb-2 text-md font-bold text-gray-700">Department
                                    Name</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="dept_name" value="{{ $depart->dept_name }}">
                                @error('dept_name') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="grid grid-cols-2 mt-4 mb-4 gap-8">
                                <div class="grid grid-cols-1">
                                    <label for="dept_id" class="block mb-2 text-md font-bold text-gray-700">Department
                                        ID</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="dept_id" value="{{ $depart->dept_id }}">
                                    @error('dept_id') <span class=" text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                                <div class="grid grid-cols-1">
                                    <label for="number_of_emp"
                                        class="block mb-2 text-md font-bold text-gray-700">Number of Employee</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="number_of_emp" value="{{ $depart->number_of_emp }}">
                                    @error('number_of_emp') <span class=" text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="dept_email" class="block mb-2 text-md font-bold text-gray-700">Email Department</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="dept_email" value="{{ $depart->dept_email }}">
                                @error('dept_email') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="manager_name"
                                    class="block mb-2 text-md font-bold text-gray-700">Manager Name</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="manager_name" value="{{ $depart->manager_name }}">
                                @error('manager_name') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                <x-button type="reset">
                                    <a href="{{ route('depart.index') }}">{{ 'Cancel' }}</a>
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