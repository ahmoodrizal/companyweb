<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('project.update', $project->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 px-6 py-4 mb-4">
                            <div class="mb-4">
                                <label for="title" class="block mb-2 text-md font-bold text-gray-700">Project
                                    Title</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="title" value="{{ $project->title }}">
                                @error('title') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="leader" class="block mb-2 text-md font-bold text-gray-700">Project Leader
                                </label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="leader" value="{{ $project->leader }}">
                                @error('leader') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="language" class="block mb-2 text-md font-bold text-gray-700">Project
                                    Language</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="language" value="{{ $project->language }}">
                                @error('language') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="mb-4">
                                <label for="link" class="block mb-2 text-md font-bold text-gray-700">Project Link
                                    Repository</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="link" value="{{ $project->link }}">
                                @error('link') <span class=" text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                <x-button type="reset">
                                    <a href="{{ route('project.index') }}">{{ 'Cancel' }}</a>
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
