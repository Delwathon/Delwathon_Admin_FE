import Dropdown from "@/Layouts/Dropdown";
import Footer from "@/Layouts/Footer";
import Box from "@/Layouts/BoxLayout";
import TabBox from "@/Components/shared/TabBox";
export default function UsageBoard() {
    const boxArray = [
        { id: 1, icon: "bx-envelope", name: "Sent notifications" },
        { id: 2, icon: "bx-send", name: "API Calls" },
        { id: 3, icon: "bx-cloud-upload", name: "Deployments" },
        { id: 4, icon: "bxs-flask", name: "RPC Call usage" },
        { id: 5, icon: "bx-landscape", name: "NFT Express" },
        { id: 6, icon: "bxs-truck", name: "Gas Pump" },
        { id: 7, icon: "bxs-briefcase", name: "Custodial Wallet" },
        { id: 8, icon: "bx-dollar-circle", name: "Other Fee Covering" },
    ];
    return (
        <div class="sm:ml-64">
            <div class="p-4 pb-0">
                <div class="mt-8">
                    <div class="h-fit w-full p-4">
                        <div class="h-full flex justify-between align-center">
                            <p class="text-2xl font-semibold">Usage</p>
                            <div class="">
                                <Dropdown />
                            </div>
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
                            {boxArray.map((index, id) => (
                                <Box
                                    icon={index.icon}
                                    name={index.name}
                                    key={id}
                                />
                            ))}
                        </div>
                    </div>
                    <div class="relative mt-4">
                        <TabBox />
                    </div>
                </div>
            </div>
            <Footer />
        </div>
    );
}
