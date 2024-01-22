<x-app-layout>
    <div class="mt-16 space-y-24">
        <div class="flex justify-center">
            <h2 class="font-bold text-lg">Here comes some text about the winners</h2>
        </div>
        <div class="flex flex-col justify-center items-center max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <div class="overflow-x-auto shadow-md sm:rounded-lg w-3/4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-900">
                    <thead class="text-xs text-gray-900 uppercase bg-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-1/3 border-r border-gray-900">
                                Name participent
                            </th>
                            <th scope="col" class="px-6 py-3 w-1/3 border-r border-gray-900">
                                Score
                            </th>
                            <th scope="col" class="px-6 py-3 w-1/3">
                                Prize
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-white border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-900 border-r border-gray-900">
                                John
                            </th>
                            <td class="px-6 py-4 border-r border-gray-900">
                                6/10
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-white border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-900 border-r border-gray-900">
                                Jane
                            </th>
                            <td class="px-6 py-4 border-r border-gray-900">
                                5/10
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-white even:bg-gray-50 even:dark:bg-white border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-900 border-r border-gray-900">
                                Rocky
                            </th>
                            <td class="px-6 py-4 border-r border-gray-900">
                                4/10
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
