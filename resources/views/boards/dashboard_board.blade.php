<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-14">
            <div class="h-fit w-full p-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="bg-rd-blue h-full">
                        <div class="w-full px-6 pt-4 pb-8">
                            <div class="flex flex-col gap-4">
                                <p class="text-white font-bold">All Check In's</p>
                                <hr class="border-white w-full">
                                <div class="flex w-full justify-between">
                                    <div class="flex text-white gap-3">
                                        <p>Show</p>
                                        <select name="number" id=""
                                            class="border bg-transparent border-white text-xs outline-none py-1.5 px-1 rounded-md text-white font-medium">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected>3</option>
                                        </select>
                                        <p>entries</p>
                                    </div>
                                    <div class="flex text-white gap-3">
                                        <p>Search</p>
                                        <input class="outline-none border border-white rounded w-32 bg-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-rd-blue pb-4">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Guest
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Check-In-Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Lodge ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Room Occupied
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Check-out Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Paid with
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 6; $i++)
                                <tr class="odd:bg-white even:bg-gray-50 shadow-md rounded-md">
                                    <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                        <div class="flex gap-3">
                                            <img src="{{ asset('assets/user1.png') }}" alt="User"
                                                class="h-8 w-8 rounded-full">
                                            <p class="font-semibold text-rd-dark">Solomon King<br><small>Business
                                                    Man</small></p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        21-Feb-2022
                                    </td>
                                    <td class="px-6 py-4">
                                        97316718
                                    </td>
                                    <td class="px-6 py-4">
                                        Cherry - Room 104
                                    </td>
                                    <td class="px-6 py-4">
                                        23-Feb-2022
                                    </td>
                                    <td class="px-6 py-4">
                                        #49,800
                                    </td>
                                    <td class="px-6 py-4">
                                        Bank Transfer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-3 items-center">
                                            <button class="relative">
                                                <div class="h-6 w-6">
                                                    <img src="{{ asset('assets/eye.png') }}" alt=""
                                                        class="rounded">
                                                </div>
                                            </button>
                                            <button class="relative">
                                                <div class="h-6 w-6">
                                                    <img src="{{ asset('assets/download.png') }}" alt=""
                                                        class="rounded">
                                                </div>
                                            </button>
                                            <button class="relative">
                                                <div class="h-6 w-6">
                                                    <img src="{{ asset('assets/edit1.png') }}" alt=""
                                                        class="rounded">
                                                </div>
                                            </button>
                                            <button class="relative">
                                                <div class="h-6 w-6">
                                                    <img src="{{ asset('assets/share.png') }}" alt=""
                                                        class="rounded">
                                                </div>
                                            </button>
                                            <button class="relative">
                                                <div class="h-6 w-6">
                                                    <img src="{{ asset('assets/delete.png') }}" alt=""
                                                        class="rounded">
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
                    aria-label="Table navigation">
                    <span
                        class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                        <span class="font-semibold text-gray-900">1 to 3</span> of <span
                            class="font-semibold text-gray-900">3</span></span>
                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-rd-blue bg-transparent border border-rd-blue rounded-s-lg hover:bg-rd-blue hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-8 leading-tight text-white bg-rd-blue border border-rd-blue hover:bg-transparent hover:text-rd-blue">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-rd-blue bg-transparent border border-rd-blue rounded-e-lg hover:bg-rd-blue hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="h-16"></div>
    @include('layouts.footer')
</div>
