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
                    <div class="relative z-0 w-full mb-6 group">
                        <div class="mb-[10px]">
                            <x-spanNR :value="__('Question 1:')" />
                        </div>
                        <div class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#F6F7F9] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer">
                            <p class="p-0 text-base font-bold">Who is the lead artist tonight?</p>
                        </div>
                        <div id="pr-naamErrorContainer" class="text-sm text-red-600 space-y-1"></div>
                    </div>
                    <div class="mb-[10px]">
                        <x-spanNR :value="__('Answer:')" />
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                        <label for="country-option-1" class="text-lg font-bold text-black ml-2 block">
                            Justin bieber
                        </label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                        <label for="country-option-1" class="text-lg font-bold text-black ml-2 block">
                            Dua lipa
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center absolute bottom-0 left-0 right-0 pb-32">
        <a href="{{ route('results') }}">
            <x-primary-button>
                Next
            </x-primary-button>
        </a>
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
