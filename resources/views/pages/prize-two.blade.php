<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-black leading-tight">
            <span class="flex justify-center items-center mb-2">Upload</span>10s message video
        </h2>
    </x-slot>
    <div class="py-24">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="px-6 text-gray-900">
                    <div class="flex justify-center items-center">
                        <h2 class="text-xl font-bold text-center">They will get displayed behind the dj screen for the crowd</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center absolute bottom-0 left-0 right-0 pb-6 space-x-2">
        <a href="{{ route('prize-3') }}">
            <x-primary-button>
                Upload
            </x-primary-button>
        </a>
        <div class="bg-secondary w-12 h-10 text-center p-2 rounded-md">
            <i class="fa-solid fa-arrow-up text-primary"></i>
        </div>
    </div>
</x-guest-layout>
