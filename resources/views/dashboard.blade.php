<x-app-layout>
    <div class="px-20">
        <x-slot name="header" class="text-2xl leading-8">
            {{ __('Welcome, ' ) }} {{ auth()->user()->full_name }}!
            <p class="text-base font-normal">Here’s an overview of your transactions.</p>
        </x-slot>

        <div class="mt-5 flex justify-between ">
            <div class="p-4 bg-gray-200 w-full mr-5 rounded-lg shadow-xs">
                {!! $chart->container() !!}
            </div>

            <div>
                <div class="p-4 bg-orange-600 rounded-lg shadow-xs text-white">
                    <div class="flex items-center px-3">
                        <div class="flex-shrink-0 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 " viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                        </div>
                        <div class=" text-base">
                            <div class="ml-3 font-medium leading-5">
                                Pending Users
                            </div>
                            <div class="text-9xl">
                                00
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 mt-5 bg-green-600 rounded-lg shadow-xs text-white">
                    <div class="flex items-center px-3">
                        <div class="flex-shrink-0 ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                            </svg>
                        </div>
                        <div class=" text-base">
                            <div class="ml-3 font-medium leading-5">
                                Todays Entry
                            </div>
                            <div class="text-9xl">
                                03
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-6 text-2xl font-semibold text-gray-700 mt-14">
        <p class="text-2xl leading-8">
            Latest Entries
        </p>

        <p class="text-base font-normal">Here’s an overview of the latest entries
        </p>

        <div class="px-20 ">


            <div class="mt-5 flex justify-between ">
                <div class="p-4 bg-gray-200 w-full mr-5 rounded-lg shadow-xs">
                    {!! $chart->container() !!}
                </div>

                <div>
                    <div class="p-4 bg-orange-600 rounded-lg shadow-xs text-white">
                        <div class="flex items-center px-3">
                            <div class="flex-shrink-0 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 " viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                            </div>
                            <div class=" text-base">
                                <div class="ml-3 font-medium leading-5">
                                    Pending Users
                                </div>
                                <div class="text-9xl">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 mt-5 bg-green-600 rounded-lg shadow-xs text-white">
                        <div class="flex items-center px-3">
                            <div class="flex-shrink-0 ">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                    <path
                                        d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                                </svg>
                            </div>
                            <div class=" text-base">
                                <div class="ml-3 font-medium leading-5">
                                    Todays Entry
                                </div>
                                <div class="text-9xl">
                                    03
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-app-layout>