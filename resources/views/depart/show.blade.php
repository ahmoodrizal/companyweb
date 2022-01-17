<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Department Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid">
                        <table class=" w-full table-auto">
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Department ID</th>
                                <td class="px-4 py-2 border">{{ $depart->dept_id }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Department Name</th>
                                <td class="px-4 py-2 border">{{ $depart->dept_name }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Number of Employee</th>
                                <td class="px-4 py-2 border">{{ $depart->number_of_emp }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Email Department</th>
                                <td class="px-4 py-2 border">{{ $depart->dept_email }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Manager Name</th>
                                <td class="px-4 py-2 border">{{ $depart->manager_name }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('depart.index') }}">
                            <x-button>{{ 'Back to Menu' }}</x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>