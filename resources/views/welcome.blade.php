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
                    <div class="relative z-0 w-full mb-6 group">
                        <div class="mb-[10px]">
                            <x-span :value="__('Bedrijfsnaam')" />
                        </div>
                        <input type="text" name="bedrijf_naam_uc" id="bedrijf_naam_uc" value="{{ old('bedrijf_naam_uc') }}" class="block p-[18px] pr-[20px] pb-[18px] pl-[20px] gap-[10px] w-full text-sm bg-[#F6F7F9] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Bedrijfsnaam"/>
                        <div id="bedrijf_naam_ucErrorContainer" class="text-sm text-red-600 space-y-1"></div>
                    </div>
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
