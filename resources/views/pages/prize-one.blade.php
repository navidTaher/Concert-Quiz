<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-black leading-tight">
            <span class="flex justify-center items-center mb-2">Phote</span>with the lead singer
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="px-6 text-gray-900">
                    <div class="flex flex-col justify-center items-center space-y-8">
                        <img src="{{ asset('img/photo-with-lead-singer.png') }}" alt="">
                        <h2 class="text-xl font-bold ">Time and Location</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center absolute bottom-0 left-0 right-0 pb-6">
        <a href="{{ route('prize-2') }}">
            <x-primary-button>
                Home
            </x-primary-button>
        </a>
    </div>
</x-guest-layout>
