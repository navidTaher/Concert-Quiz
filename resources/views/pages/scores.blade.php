<x-dj-layout>
    <x-slot name="header">
        <h1 class="font-bold text-5xl text-gray-800 leading-tight">
            {{ __('These are the scores of the participants') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="overflow-hidden">
            <div class="p-6 text-gray-900">
                <table class="w-[874px] border-collapse text-4xl font-bold">
                    <thead>
                        <tr class="bg-[#FF0000] text-white">
                            <th class="h-16 border-none p-2 text-center">Name</th>
                            <th class="h-16 border-none p-2 text-center">Scores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="h-16 border-none p-2 text-center bg-primary text-secondary pt-10">John</td>
                            <td class="h-16 border-none p-2 text-center bg-secondary text-primary pt-10">6/10</td>
                        </tr>
                        <tr>
                            <td class="h-16 border-none p-2 text-center bg-primary text-secondary pt-10 pb-10">Jane</td>
                            <td class="h-16 border-none p-2 text-center bg-secondary text-primary pt-10 pb-10">5/10</td>
                        </tr>
                        <tr>
                            <td class="h-16 border-none p-2 text-center bg-primary text-secondary pb-10">Rocky</td>
                            <td class="h-16 border-none p-2 text-center bg-secondary text-primary pb-10">4/10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dj-layout>
