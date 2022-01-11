<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid">
                        <table class=" w-full table-auto">
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Employee ID</th>
                                <td class="px-4 py-2 border">{{ $employee->emp_id }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Employee Fullname</th>
                                <td class="px-4 py-2 border">{{ $employee->emp_fullname }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Employee Department</th>
                                <td class="px-4 py-2 border">{{ $employee->emp_department }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Employee Email</th>
                                <td class="px-4 py-2 border">{{ $employee->emp_email }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Employee Address</th>
                                <td class="px-4 py-2 border">{{ $employee->emp_address }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Gender</th>
                                <td class="px-4 py-2 border">{{ $employee->gender }}</td>
                            </tr>
                            <tr class="font-semibold">
                                <th class="px-4 py-2 border text-left">Salary</th>
                                <td class="px-4 py-2 border">{{ $employee->salary }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('employee.index') }}">
                            <x-button>{{ 'Back to Menu' }}</x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
