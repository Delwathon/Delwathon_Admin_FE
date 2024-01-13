

<div class="mb-4 border-b border-gray-200 dark:border-gray-700 flex justify-between align-center">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg uppercase" id="charts-tab" data-tabs-target="#charts" type="button" role="tab" aria-controls="charts" aria-selected="false">Charts</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="uppercase inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="reports-tab" data-tabs-target="#reports" type="button" role="tab" aria-controls="reports" aria-selected="false">Reports</button>
        </li>
    </ul>
    
<div class="relative max-w-sm">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
      <svg class="w-4 -translate-y-2 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
      </svg>
    </div>
    <input datepicker type="text" inline-datepicker data-date="01/13/2024" datepicker-autohide datepicker-orientation="bottom right" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
  </div>
  
</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="charts" role="tabpanel" aria-labelledby="charts-tab">
        <div>
            <div>
                <div class="flex gap-2">
                    <span class="text-gray-400 font-medium text-xl">
                        Overview
                    </span>
                    <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                </div>
            </div>
            <div class="space-y-2">
                <div class="space-y-1">
                    <div id="chartOverview"></div>
                </div>
            </div>
        
            <div>
                <div class="flex gap-2">
                    <span class="text-gray-400 font-medium text-xl">
                        Chains
                    </span>
                    <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                </div>
            </div>
            <div class="space-y-2">
                <div class="space-y-1">
                    <div id="chartChains"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="hidden" id="reports" role="tabpanel" aria-labelledby="reports-tab">
        <div class="relative shadow-md sm:rounded-lg mt-6 border overflow-hidden">
            <div class="w-full">
                <div class="p-4 flex justify-between align-center bg-[#F9FAFB]">
                    <form class="w-1/2">
                        <div class="relative max-w-sm">
                            <label
                                for="countries"
                                class="absolute top-1 left-4 block mb-2 text-xs font-medium text-gray-900 dark:text-white"
                            >
                                Select API Key
                            </label>
                            <select
                                id="countries"
                                class="bg-gray-50 border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 pt-5 pb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-semibold"
                            >
                                <option>All</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </form>
                    <div class="w-50 flex gap-6 align-center justify-center p-4">
                        <button
                            class="border bg-gray-200 rounded-[8px]"
                            disabled
                        >
                            <div class="p-2">
                                <i class="bx bxs-file text-lg"></i>
                                <span>Download CSV</span>
                            </div>
                        </button>
                        <p class="text-gray-400">
                            <i class="bx bxs-filter-alt"></i> Filters
                        </p>
                        <span class="border-r"></span>
                        <p>Clear All</p>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-center bg-white p-8">
                    <div>
                        <a
                            href="#"
                            class="text-gray-400 text-sm font-medium"
                        >
                            No data available
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>



<script>
    const optionsOverview = {
        chart: {
            id: 'overview-chart',
            type: 'bar',
            height: 400,
        },
        xaxis: {
            categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
        }
    };

    const seriesOverview = [
        {
            name: 'Sales',
            data: [30, 40, 45, 50, 49, 60, 70, 91, 40]
        }
    ];

    const chartOverview = new ApexCharts(document.getElementById('chartOverview'), {
        ...optionsOverview,
        series: seriesOverview,
    });

    chartOverview.render();

    // Similarly, create another chart for "Chains" with unique IDs
    const optionsChains = {
        chart: {
            id: 'chains-chart',
            type: 'bar',
            height: 400,
        },
        xaxis: {
            categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
        }
    };

    const seriesChains = [
        {
            name: 'Sales',
            data: [20, 35, 40, 60, 70, 80, 65, 50, 45]
        }
    ];

    const chartChains = new ApexCharts(document.getElementById('chartChains'), {
        ...optionsChains,
        series: seriesChains,
    });

    chartChains.render();
</script>

