<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Data - QR-Code') }}
        </h2>
    </x-slot>

    <section
        class="h-full w-full border-box sm:pt-20 pt-16 sm:pb-16 pb-8 lg:px-24 md:px-16 sm:px-8 px-8 transition-all duration-500 linear">
        <div class="container mx-auto flex items-center justify-center flex-col">
            <div class="row mt-5 text-center">
                {{ $qrcode }}
            </div>
            <div class="mt-4">
                <a href="{{ route('employee.index') }}">
                    <x-button>
                        {{ 'Back To Index' }}
                    </x-button>
                </a>
            </div>
        </div>

    </section>

</x-app-layout>
