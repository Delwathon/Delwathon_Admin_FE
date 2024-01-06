<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-8">
            <div class="h-fit w-full p-4">
                <div class="h-full flex justify-between align-center">
                    <p class="text-2xl font-semibold">Notifications</p>
                    <div class="">
                        @include('layouts.button_drop')
                    </div>
                </div>
            </div>
            <div class="relative mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                    <div class="border rounded-md">
                        <div class="bg-white p-6 flex justify-between">
                            <div class="flex gap-4">
                                <p
                                    class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                    <i class='bx bx-repost'></i>
                                </p>
                                <div>
                                    <p class="flex gap-2">
                                        <span class="text-gray-400 font-medium">Subscriptions</span>
                                        <i
                                            class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                    </p>
                                    <p class="font-semibold text-lg">0 <span class="text-gray-400">/ 5</span></p>
                                </div>
                            </div>
                            <div>
                                <button class="hover:bg-[#003399d6] text-white bg-[#003399] transition p-3 rounded-md">
                                    <span class="text-sm">Upgrade plan</span>
                                </button>
                            </div>
                        </div>
                        <div class="bg-[#F9FAFB] py-4 px-6">
                            <a href="/notifications/subscriptions"
                                class="text-sm text-[#003399] font-medium hover:text-[#003399d6]">View subscriptions</a>
                        </div>
                    </div>
                    <div class="border rounded-md">
                        <div class="bg-white p-6 flex justify-between">
                            <div class="flex gap-4">
                                <p
                                    class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                    <i class='bx bx-repost'></i>
                                </p>
                                <div>
                                    <p class="flex gap-2">
                                        <span class="text-gray-400 font-medium">Sent notifications</span>
                                        <i
                                            class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                    </p>
                                    <p class="font-semibold text-lg">0 <span class="text-gray-400">/ 100</span></p>
                                </div>
                            </div>
                            <div class='font-semibold'>
                                <p class="text-gray-400">Success Rate</p>
                                <h3 class="text-xl">0.0 %</h3>
                            </div>
                        </div>
                        <div class="bg-[#F9FAFB] py-4 px-6">
                            <a href="/notifications/notifications"
                                class="text-sm text-[#003399] font-medium hover:text-[#003399d6]">View sent
                                notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative rounded-lg mt-6 border">
                <div class="w-full">
                    <form class="w-full bg-white p-6">
                        <div class="relative shadow">
                            <label for="countries"
                                class="absolute top-1 left-4 block mb-2 text-xs font-medium text-gray-900 dark:text-white">Filter
                                by
                                API Key</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 pt-5 pb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-semibold">
                                <option>All</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </form>
                    <div class="bg-[#F9FAFB] py-4 px-6">
                        <div>
                            <a href="/dashboard" class='text-[#003399] font-medium text-sm hover:text-[#003399d6]'>View
                                API keys</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-6 p-4">
                <p class="text-xl font-semibold">Sent notications</p>
                <div class="mt-5 relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-400 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    CHAIN
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    tYPE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    SENT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    SUCCESS
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    URL
                                </th>
                            </tr>
                        </thead>
                    </table>
                        <div>
                            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-10 flex justify-center items-center text-sm text-gray-400">
                                <p>No notifications sent. Create a subscription to start receiving notifications.</p>
                            </div>
                            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-4 flex justify-center items-center text-sm text-gray-400">
                                <a class='text-[#003399] font-medium text-sm hover:text-[#003399d6]' href="/notifications/notifications">View sent notifications</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="relative mt-6 p-4">
                <p class="text-xl font-semibold">Your subscriptions</p>
                <div class="mt-5 relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-400 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    CHAIN
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    tYPE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ADDRESS / EVENT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    URL
                                </th>
                            </tr>
                        </thead>
                    </table>
                        <div>
                            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-10 flex justify-center items-center text-sm text-gray-400">
                                <p>No subscriptions sent. Create a subscription to start receiving notifications.</p>
                            </div>
                            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-4 flex justify-center items-center text-sm text-gray-400">
                                <a class='text-[#003399] font-medium text-sm hover:text-[#003399d6]' href="/notifications/subscriptions">View sent subscriptions</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
