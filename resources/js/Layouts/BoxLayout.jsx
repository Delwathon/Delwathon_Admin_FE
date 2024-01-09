export default function Box({ icon, name }) {
    return (
        <div class="border rounded-[10px] overflow-hidden">
            <div class="bg-white p-6 flex justify-between">
                <div class="flex gap-4">
                    <p class="p-3 text-2xl bg-blue-200 text-[#003399] rounded-[10px] flex justify-center items-center">
                        <i class={`bx ${icon}`}></i>
                    </p>
                    <div>
                        <p class="flex gap-2">
                            <span class="text-gray-400 font-medium">
                                {name}
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
    );
}
