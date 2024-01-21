<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-black leading-tight">
            {{ __('Prize page') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900 space-y-2">
                    <h2 class="font-bold text-gray-500 text-xl">Choose your prize</h2>

                    <div class="flex items-center mb-4">
                        <input type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                        <label for="country-option-1" class="text-lg font-medium text-gray-900 ml-2 block">
                            Foto with the lead singer
                        </label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                        <label for="country-option-1" class="text-lg font-medium text-gray-900 ml-2 block">
                            10s video behind the dj
                        </label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                        <label for="country-option-1" class="text-lg font-medium text-gray-900 ml-2 block">
                            Get exclusive backstage content
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center mt-12">
        <x-primary-button>
            Submit
        </x-primary-button>
    </div>

    <div class="flex justify-center items-center w-full h-12 border-t-4 border-gray-900 absolute bottom-10 right-0">
        <div class="flex items-center mt-10 space-x-2">
            <i class="fa-solid fa-clock"></i>
            <h2>Time reaming</h2>
            <div class="bg-secondary text-white rounded-md p-1">
                10s
            </div>
        </div>
    </div>

</x-guest-layout>
