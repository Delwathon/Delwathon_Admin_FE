<div class="sm:ml-64">
    <div class="p-4 pb-0">
        <div class="mt-8">
            <div class="h-fit w-full p-4">
                <div class="h-full flex justify-between align-center">
                    <p class="text-2xl font-semibold">Usage</p>
                    <div class="">
                        @include('layouts.dropdown')
                    </div>
                </div>
                <div class="relative mt-4">
                    <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4 items-center">
                        <div class="border rounded-[10px] overflow-hidden">
                            <div class="bg-white p-6 flex justify-between">
                                <div class="flex gap-4">
                                    <p class="p-3 bg-blue-200 text-[#003399] text-2xl rounded-[10px] flex justify-center items-center">
                                        <i class="bx bx-wallet-alt"></i>
                                    </p>
                                    <div>
                                        <p class="flex gap-2">
                                            <span class="text-gray-400 font-medium">
                                                Cost
                                            </span>
                                            <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                                        </p>
                                        <p class="font-semibold text-xl">
                                            $ 0
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($boxArray as $box)
                        <div class="border rounded-[10px] overflow-hidden">
                            <div class="bg-white p-6 flex justify-between">
                                <div class="flex gap-4">
                                    <p class="p-3 text-2xl bg-blue-200 text-[#003399] rounded-[10px] flex justify-center items-center">
                                        <i class="bx {{ $box['icon'] }}"></i>
                                    </p>
                                    <div>
                                        <p class="flex gap-2">
                                            <span class="text-gray-400 font-medium">
                                                {{ $box['name'] }}
                                            </span>
                                            <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                                        </p>
                                        <p class="font-semibold text-xl">0</p>
                                    </div>
                                </div>
                                <div>
                                    <button class="hover:bg-[#003399d6] text-white bg-[#003399] transition p-2 rounded-[8px]">
                                        <i class="bx bx-signal-5 border rounded border-white p-0.5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
                <div class="relative mt-4">
                <div class="w-full">
                    @include('layouts.tabs')
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
