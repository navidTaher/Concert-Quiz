<x-app-layout>
    <div class="mt-16 space-y-8">
        <div class="flex justify-center">
            <h2 class="font-bold text-lg">here comes some text about the questions</h2>
        </div>

        <div class="grid grid-cols-2 gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 1:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 2:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 3:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 4:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 5:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary p-4 space-y-3 rounded-md">
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Question 6:')" />
                    </div>
                    <input type="text" name="question" id="question" value="{{ old('question') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Question..."/>
                </div>
                <div>
                    <div class="mb-[10px]">
                        <x-span :value="__('Answers:')" />
                    </div>
                    <div class="mt-2 flex items-center">

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>

                        <div class="h-[48px] w-[48px] border border-1 border-secondary flex items-center justify-center rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M13 13L1 1M13 1L1 13L13 1Z" stroke="#247291" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="p-2">
                            <input type="text" name="Answer" id="Answer" value="{{ old('Answer') }}" class="block p-[10px] pr-[20px] pb-[10px] pl-[20px] gap-[10px] w-full text-sm bg-[#8a8f98] rounded-lg border-2 border-[#E9ECEF] appearance-none text-black focus:border-primary-300 focus:outline-none focus:ring-0 peer" placeholder="Answer..."/>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-col items-center absolute bottom-8 left-0 right-0 pb-32">
            <a href="#">
                <x-primary-button>
                    Submit
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
