<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-8">
            <div class="h-fit w-full p-4">
                <div class="h-full flex justify-between align-center">
                    <p class="text-2xl font-semibold">Clients</p>
                    <div class="">
                        <div class="flex gap-4">
                            <div>
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                    class="flex p-3 justify-center align-center hover:bg-[#003399d6] text-white bg-[#003399] transition rounded-md gap-2"
                                    type="button">
                                    <i class='bx bx-plus-circle text-xl translate-y-1'></i>
                                    <span class="text-xl">Create client</span>
                                </button>
                            </div>
                            <div>
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-xl px-5 py-4 flex justify-center items-center"
                                    type="button"><i class='bx bx-dots-horizontal-rounded'></i></button>

                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b">My
                                                plan</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b">Account</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b">Getting
                                                started</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b">Documentation</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b">Support</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1"
                                    class="bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-xl px-5 py-4 flex justify-center items-center"
                                    type="button"><i class='bx bx-bell'></i></button>

                                <!-- Dropdown menu -->
                                <div id="dropdown1"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <div class="block px-4 py-2 text-[#999999] text-sm">
                                                <h3 class="font-semibold">Welcome to Delwathon</h3>
                                                <p class="mt-2">You're all set - start creating <a
                                                        href="/notifications" class="underline">instant
                                                        notifications</a> for Web3 with the easiest to use builder
                                                    out there.</p>
                                                <p class="mt-3">
                                                    Check out our <a href="#" class="underline">documentation</a>
                                                    or reach out if you
                                                    have any questions or feedback.
                                                </p>
                                                <div class="flex flex-end text-[#999] text-xs mt-2">
                                                    <p>Thu, Jan 4, 2024 at 12:49 PM</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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
                                        S/N
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       FULL NAME
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        EMAIL
                                     </th>
                                    <th scope="col" class="px-6 py-3">
                                        SCHOOL NAME
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        SECRET KEY
                                     </th>
                                    <th scope="col" class="px-6 py-3">
                                        PURCHASE CODE
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        URL
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            @if(count($tableArray) > 0)
                           <tbody>
                            @foreach($tableArray as $index => $table)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 whitespace-wrap">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $index + 1 }}
                                </th>
                                <td class="px-6 py-4 break-all">
                                    {{ $table['fullname'] }}
                                </td>
                                <td class="px-6 py-4 break-all">
                                    {{ $table['email'] }}
                                </td>
                                <td class="px-6 py-4 break-all">
                                    {{ $table['school_name'] }}
                                </td>
                                <td class="px-6 py-4 break-all">
                                    {{ $table['secret_key'] }}
                                </td>
                                <td class="px-6 py- break-all">
                                    {{ $table['purchase_code'] }}
                                </td>
                                <td class="px-6 py-4 break-all">
                                    {{ $table['url'] }}
                                </td>
                                <td class="px-6 py-4">
                                    delete
                                </td>
                            </tr>
                            @endforeach
                           </tbody>
                            @endif
                        </table>
                        @if(count($tableArray) < 0)
                        <div>
                            <div
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative p-10 flex justify-center items-center text-sm text-gray-400">
                                <p>No clients available. Create a client to start sending notifications.</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-16"></div>
    @include('layouts.footer')
</div>
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Client
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter the first name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter the last name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="schoolname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School Name</label>
                        <input type="text" name="schoolname" id="schoolname" placeholder="Enter the school name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Client</button>
                </form>
            </div>
        </div>
    </div>
</div> 