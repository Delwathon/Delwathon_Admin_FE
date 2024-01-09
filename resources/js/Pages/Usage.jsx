import { Head } from "@inertiajs/react";
import Sidebar from '@/Layouts/Sidebar';
import UsageBoard from "@/Layouts/Boards/UsageBoard";
export default function Usage() {
    return (
        <div className="bg-[#F3F4F6] w-full min-h-screen">
            <Head title="Usage" />
            <Sidebar />
            <UsageBoard />
        </div>
    );
}
