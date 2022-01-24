<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7pxl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('project.create') }}">
                            <x-button>{{ 'Add Project Data' }}</x-button>
                        </a>
                        <div class="inline-block">
                            <div class="inline-block">
                                <a href="#">
                                    <x-button class="ml-3 bg-indigo-500 hover:bg-indigo-400">
                                        <i class="fa fa-print mr-2"></i>
                                        {{ 'Print to PDF' }}
                                    </x-button>
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">No.</th>
                                <th class="px-4 py-2 border">Project Title</th>
                                <th class="px-4 py-2 border">Project Language</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @if (!@empty($projects))
                                @foreach ($projects as $project)
                                    <tr>
                                        <td class="px-4 py-2 border text-center">{{ $i++ }}</td>
                                        <td class=" px-4 py-2 w-4/12 border font-semibold">{{ $project->title }}
                                        </td>
                                        <td class=" px-4 py-2 border font-semibold">{{ $project->language }}</td>
                                        <td class="px-4 py-2 border w-2/12 text-left md:text-center">
                                            <div class="py-2 inline-flex">
                                                <a href="{{ route('project.show', $project->id) }}">
                                                    <x-button
                                                        class="rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-green-600">
                                                        <i class="fa fa-eye"></i>
                                                    </x-button>
                                                </a>
                                            </div>
                                            <div class="py-2 inline-flex">
                                                <a href="{{ route('project.edit', $project->id) }}">
                                                    <x-button
                                                        class=" rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-yellow-600">
                                                        <i class="fa fa-edit"></i>
                                                    </x-button>
                                                </a>
                                            </div>
                                            <div class="py-2 inline-flex">
                                                <form action="{{ route('project.destroy', $project->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-button type="submit"
                                                        class=" rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-red-600"
                                                        id="remove" onclick="return confirm('Yakin?')">
                                                        <i class="fa fa-trash"></i>
                                                    </x-button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="px-4 py-2 border text-red-500 font-semibold text-xl text-center"
                                        colspan="4">No Project Data found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success',
            text: "{!! $message !!}"
        })
    </script>
@endif
<script>
    function confirm_alert() {
        Swal.fire({
            title: 'Apa anda yakin?',
            text: "Data Buku akan terhapus permanen",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
</script>
