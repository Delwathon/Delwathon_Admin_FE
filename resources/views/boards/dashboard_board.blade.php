<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-8">
            <div class="h-fit w-full p-4">
                <div class="h-full flex justify-between align-center">
                    <p class="text-2xl font-semibold">Overview</p>
                    <div class="">
                        @include('layouts.dropdown')
                    </div>
                </div>
                <div class="relative shadow-md sm:rounded-lg border mt-4">
                    <div class="flex items-center justify-between w-full p-4 addgradient">
                        <div>
                            <h3 class="text-2xl font-semibold">Let's Get Started!</h3>
                            <p class="font-normal mt-3">Explore on your own or follow our docs and tutorials.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 items-center">
                            <button
                                class="bg-white transition hover:bg-black hover:text-white px-3 border outline-none text-sm py-2">Documentation
                                <i class='bx bxs-right-arrow-alt translate-y-1.5 text-2xl'></i></button>
                            <button
                                class="bg-white transition hover:bg-black hover:text-white px-3 border outline-none text-sm py-2"><i
                                    class='bx bxl-discord translate-y-1.5 text-2xl'></i> Discord</button>
                            <button
                                class="bg-white transition hover:bg-black hover:text-white px-3 border outline-none text-sm py-2">Tutorials
                                <i class='bx bxs-right-arrow-alt translate-y-1.5 text-2xl'></i></button>
                            <button
                                class="bg-white transition hover:bg-black hover:text-white px-3 border outline-none text-sm py-2 "><i
                                    class='bx bxl-youtube translate-y-1.5 text-2xl'></i> Youtube</button>
                        </div>
                    </div>
                </div>
                <div class="relative shadow-md sm:rounded-lg mt-6 border">
                    <div class="w-full ">
                        <div class="p-4">
                            <h3 class="text-2xl font-semibold">Free Account</h3>
                            <p class="font-semibold uppercase text-[#003399] mt-2">Current Plan</p>
                        </div>
                        <div class="mt-2 flex items-center justify-between bg-white ">
                            <div class="border-r flex gap-4 lg:w-1/2 w-full p-4">
                                <div>
                                    <p class="flex gap-2 items-center">
                                        <span class="text-gray-400 uppercase">Limit Reset</span>
                                        <i
                                            class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                    </p>
                                    <p>2/4/2024</p>
                                </div>
                                <div class="">
                                    <p class="flex gap-2">
                                        <span class="text-gray-400 uppercase">Account ID</span>
                                        <i
                                            class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                    </p>
                                    <p>
                                        <span>65969b485982fa001c6482af</span>
                                        <i class='bx bx-copy border border-gray-400 p-2 rounded-md'></i>
                                    </p>
                                </div>
                            </div>
                            <div class="lg:w-1/2 w-full px-4">
                                <button
                                    class="bg-[#003399] hover:bg-[#003399d6] transition rounded-md text-white py-2 px-3 w-full">Upgrade
                                    plan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative mt-6">
                    <p class="text-xl font-semibold">Usage</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center mt-2">
                        <div class="bg-white border rounded-md p-4 flex gap-4">
                            <p
                                class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                <i class='bx bx-wallet-alt'></i>
                            </p>
                            <div>
                                <p class="flex gap-2">
                                    <span class="text-gray-400">Cost</span>
                                    <i
                                        class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                </p>
                                <p class="font-semibold">$ 0</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-md p-4 flex gap-4">
                            <p
                                class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                <i class='bx bx-envelope'></i>
                            </p>
                            <div>
                                <p class="flex gap-2">
                                    <span class="text-gray-400">Sent Notifications</span>
                                    <i
                                        class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                </p>
                                <p class="font-semibold">0</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-md p-4 flex gap-4">
                            <p
                                class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                <i class='bx bx-send'></i>
                            </p>
                            <div>
                                <p class="flex gap-2">
                                    <span class="text-gray-400">API Calls</span>
                                    <i
                                        class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                </p>
                                <p class="font-semibold">0</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-md p-4 flex gap-4">
                            <p
                                class="p-3 bg-gray-400 text-[#003399] text-2xl rounded-md flex justify-center items-center">
                                <i class='bx bx-cloud-upload'></i>
                            </p>
                            <div>
                                <p class="flex gap-2">
                                    <span class="text-gray-400">Deployments</span>
                                    <i
                                        class='bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]'></i>
                                </p>
                                <p class="font-semibold">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mt-4">
                        <a href="/usage" class="underline text-sm font-medium text-[#003399]">View more</a>
                    </div>
                </div>
                <div class="relative mt-6">
                    <p class="text-xl font-semibold">Modules</p>
                    <div class="mt-3">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Secret Key
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                           School
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Purchase key
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            School Url
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <i class='bx bx-edit text-blue-600'></i>
                                             Mainnet API key
                                        </th>
                                        <td class="px-6 py-4">
                                            Silver
                                        </td>
                                        <td class="px-6 py-4">
                                            t-6596****01b62d
                                        <i class='bx bx-copy border border-gray-400 p-2 rounded-md'></i>
                                        </td>
                                        <td class="px-6 py-4">
                                            Silver@gmail.com
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="flex gap-4">
                                                <a href="#"
                                                class="font-medium text-blue-600 hover:underline">Edit</a>
                                                <a href="#"
                                                class="font-medium text-red-600 hover:underline">Delete</a>
                                                <a href="#"
                                                class="font-medium text-green-600 hover:underline">Revoke</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-16"></div>
    @include('layouts.footer')
</div>
