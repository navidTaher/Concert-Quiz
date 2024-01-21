<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-black leading-tight">
            <span class="flex justify-center items-center mb-2 font-bold text-3xl">Download</span>Exclusive backstage content
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="px-6 text-gray-900">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('img/download-exclusive-backstage-content.png') }}" alt="">
                        <div class="flex justify-center items-center space-x-2 mt-4 text-white">
                            <div class="bg-secondary px-2 rounded-full text-xm">
                                1
                            </div>
                            <div class="bg-secondary px-2 rounded-full text-xm">
                                2
                            </div>
                            <div class="bg-secondary px-2 rounded-full text-xm">
                                3
                            </div>
                            <div class="bg-secondary px-2 rounded-full text-xm">
                                4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center absolute bottom-0 left-0 right-0 pb-12 space-x-2">
        <a href="#">
            <x-primary-button>
                Download
            </x-primary-button>
        </a>
        <div class="bg-secondary w-12 h-10 text-center p-2 rounded-md">
            <i class="fa-solid fa-arrow-down text-primary"></i>
        </div>
    </div>
</x-guest-layout>
