<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid">
                        <table class=" w-full table-auto">
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Title</th>
                                <td class="px-4 py-2 border">{{ $project->title }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Leader</th>
                                <td class="px-4 py-2 border">{{ $project->leader }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Language </th>
                                <td class="px-4 py-2 border">{{ $project->language }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Link Repository </th>
                                <td class="px-4 py-2 border">{{ $project->link }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Started at</th>
                                <td class="px-4 py-2 border">{{ $project->created_at }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Project Finished at</th>
                                <td class="px-4 py-2 border">{{ $project->updated_at }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('project.index') }}">
                            <x-button>{{ 'Back to Menu' }}</x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
