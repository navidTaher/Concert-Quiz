<x-dj-layout>
    <x-slot name="header">
        <h1 class="font-bold text-5xl text-gray-800 leading-tight">
            {{ __('10s video message from one of the participants') }}
        </h1>
    </x-slot>

    <div class="">
        <div class="overflow-hidden">
            <div class="text-gray-900">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('img/message.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-dj-layout>
