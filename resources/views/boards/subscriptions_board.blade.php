<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-8">
            <div class="h-fit w-full p-4">
                <div class="h-full flex justify-between align-center">
                    <p class="text-2xl font-semibold">Subscriptions</p>
                    <div class="">
                        @include('layouts.button_drop')
                    </div>
                </div>
            </div>
            <div class="relative shadow-md sm:rounded-lg mt-6 border">
                <div class="w-full">
                    <div class="p-4 flex justify-between align-center bg-[#F9FAFB]">
                        <form class="w-1/2">
                            <div class="relative max-w-sm">
                                <label for="countries"
                                    class="absolute top-1 left-4 block mb-2 text-xs font-medium text-gray-900 dark:text-white">Select
                                    API Key</label>
                                <select id="countries"
                                    class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 pt-5 pb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-semibold">
                                    <option>t-65...b62d - Mainnet API key</option>
                                    <option>t-65...b62d - Mainnet API key</option>
                                </select>
                            </div>
                        </form>
                        <div class="w-50 flex gap-6 align-center p-4">
                            <p class="text-gray-400"><i class='bx bxs-filter-alt'></i> Filters</p>
                            <span class="border-r"></span>
                            <p>Clear All</p>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-sm text-gray-400 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        CHAIN
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        TYPE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        SUBSCRIPTION
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ADDRESS / EVENT
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        URL
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <div>
                            <div
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-10 flex justify-center items-center text-sm text-gray-400">
                                <p>No subscriptions sent. Create a subscription to start receiving notifications.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-16"></div>
    @include('layouts.footer')
</div>
