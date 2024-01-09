export default function Dropdown() {
    return (
        <>
            <div className="flex gap-4">
                <div>
                    <button
                        id="dropdownDefaultButton"
                        data-dropdown-toggle="dropdown"
                        className="bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-xl px-5 py-4 flex justify-center items-center"
                        type="button"
                    >
                        <i className="bx bx-dots-horizontal-rounded"></i>
                    </button>

                    <div
                        id="dropdown"
                        className="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                    >
                        <ul
                            className="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton"
                        >
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b"
                                >
                                    My plan
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b"
                                >
                                    Account
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b"
                                >
                                    Getting started
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b"
                                >
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-b-slate-400 border-b"
                                >
                                    Support
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <button
                        id="dropdownDefaultButton"
                        data-dropdown-toggle="dropdown1"
                        className="bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-xl px-5 py-4 flex justify-center items-center"
                        type="button"
                    >
                        <i className="bx bx-bell"></i>
                    </button>

                    <div
                        id="dropdown1"
                        className="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-gray-700"
                    >
                        <ul
                            className="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton"
                        >
                            <li>
                                <div className="block px-4 py-2 text-[#999999] text-sm">
                                    <h3 className="font-semibold">
                                        Welcome to Delwathon
                                    </h3>
                                    <p className="mt-2">
                                        You're all set - start creating{" "}
                                        <a
                                            href="/notifications"
                                            className="underline"
                                        >
                                            instant notifications
                                        </a>{" "}
                                        for Web3 with the easiest to use builder
                                        out there.
                                    </p>
                                    <p className="mt-3">
                                        Check out our{" "}
                                        <a href="#" className="underline">
                                            documentation
                                        </a>{" "}
                                        or reach out if you have any questions
                                        or feedback.
                                    </p>
                                    <div className="flex flex-end text-[#999] text-xs mt-2">
                                        <p>Thu, Jan 4, 2024 at 12:49 PM</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </>
    );
}
