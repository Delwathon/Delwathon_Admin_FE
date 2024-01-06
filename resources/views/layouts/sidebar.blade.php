<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-4 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 custom-scrollbar">
        <div class="flex items-center mb-4">
            <img src="{{asset('assets/delwathon_dark.png')}}"  class="w-12 h-12" style="">
            <p class="text-2xl uppercase">Delwathon</p>
        </div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class='bx bx-home text-2xl'></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Overview</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                    <i class='bx bx-bell text-2xl'></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Notifications</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/notifications"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Notifications</a>
                    </li>
                    <li>
                        <a href="notifications"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Subscriptions</a>
                    </li>
                    <li>
                        <a href="/notifications/notifications"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sent notifications</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class='bx bx-cube-alt text-2xl'></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">RPC Nodes</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class='bx bx-gas-pump text-2xl'></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Faucets</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class='bx bx-bar-chart-alt text-2xl'></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Usage</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class='bx bx-list-ul text-2xl'></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Error Logs</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

