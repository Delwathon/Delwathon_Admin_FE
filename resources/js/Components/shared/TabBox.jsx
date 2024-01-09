import { Button } from "@/components/ui/button";
import {
    Card,
    CardContent,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card";
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs";
import CalBox from "./CalBox";
import ChartBox from "./ChartBox";
export default function TabBox() {
    return (
        <Tabs defaultValue="charts" className="w-full">
            <div class="flex justify-between align-center">
                <TabsList className="grid grid-cols-2 w-[400px]">
                    <TabsTrigger value="charts">Charts</TabsTrigger>
                    <TabsTrigger value="report">Report</TabsTrigger>
                </TabsList>
                <div>
                    <CalBox />
                </div>
            </div>
            <TabsContent value="charts">
                <Card>
                    <CardHeader>
                        <CardTitle class="flex gap-2">
                            <span class="text-gray-400 font-medium text-xl">
                                Overview
                            </span>
                            <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                        </CardTitle>
                    </CardHeader>
                    <CardContent className="space-y-2">
                        <div className="space-y-1">
                            <ChartBox />
                        </div>
                    </CardContent>
                    <CardHeader>
                        <CardTitle class="flex gap-2">
                            <span class="text-gray-400 font-medium text-xl">
                                Chains
                            </span>
                            <i class="bx bx-question-mark border border-[#003399] p-1 rounded-full text-[#003399]"></i>
                        </CardTitle>
                    </CardHeader>
                    <CardContent className="space-y-2">
                        <div className="space-y-1">
                            <ChartBox />
                        </div>
                    </CardContent>
                </Card>
            </TabsContent>
            <TabsContent value="report">
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
            </TabsContent>
        </Tabs>
    );
}
