<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-black leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center absolute bottom-0 left-0 right-0 pb-32">
        <x-primary-button>
            Next
        </x-primary-button>
    </div>
</x-guest-layout>
