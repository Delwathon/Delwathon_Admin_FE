@extends('layouts.app')
@section('content')
    <div class="bg-[#F8F8F8] w-full min-h-screen">
        <div class="flex w-full">
            <div class="w-full lg:w-[60%] h-full flex justify-center items-center">
                <div class="w-1/2 mt-12">
                    <form action="/dashboard">
                        <h4 class="text-xl mb-4"><span class="font-bold">Sign in</span> to your Dashboard.</h4>
                        <div class="mb-5 relative">
                            <label for="base-input" class="absolute top-1 left-4 block mb-2 text-xs font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 pt-5 pb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-semibold" placeholder="your@email.com">
                        </div>
                        <div class="mb-5 relative">
                            <label for="password" class="absolute top-1 left-4 block mb-2 text-xs font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 pt-5 pb-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-semibold" placeholder="******">
                            <i class="bx bx-show absolute cursor-pointer text-2xl right-4 top-1/2 -translate-y-1/2" id="toggle"></i>
                        </div>
                        <div class="mb-5 relative">
                            <button class="bg-blue-700 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg w-full transition">Sign in</button>
                        </div>
                        <div class="flex justify-between mb-5 relative">
                            <p class="text-gray-500">Forgot Password?</p>
                            <p>Don't have an account? <a href="" class="text-blue-700">Sign up</a></p>
                        </div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="border-b border-gray-300 w-1/5 lg:w-1/2"></div>
                            <span class="text-gray-500 text-lg font-medium mx-4">OR</span>
                            <div class="border-b border-gray-300 w-1/5 lg:w-1/2"></div>
                        </div>
                    </form>
                    <div>
                        <button class="flex justify-center items-center gap-4 border border-black hover:bg-slate-200 font-semibold py-2 px-4 rounded-lg w-full transition mb-4"><i class="bx bxl-google cursor-pointer text-lg"></i> Sign in with Google</button>
                        <button class="flex justify-center items-center gap-4 border border-black hover:bg-slate-200 font-semibold py-2 px-4 rounded-lg w-full transition mb-4"><i class="bx bxl-github cursor-pointer text-lg"></i> Sign in with Github</button>
                        <button class="flex justify-center items-center gap-4 border border-black hover:bg-slate-200 font-semibold py-2 px-4 rounded-lg w-full transition mb-4"><i class="bx bxl-linkedin cursor-pointer text-lg"></i> Sign in with Linkedin</button>
                        <button class="flex justify-center items-center gap-4 border border-black hover:bg-slate-200 font-semibold py-2 px-4 rounded-lg w-full transition"><i class="bx bxl-facebook-square cursor-pointer text-lg"></i> Sign in with Facebook</button>
                    </div>
                    <div class="fixed bottom-0 lg:left-1/3 left-1/2 -translate-x-1/2 w-full text-gray-600 mt-6">
                        <p class="text-xs font-semibold text-center">© 2024 Delwathon IT Solutions | Terms of Use • Privacy Policy</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-[40%] lg:flex justify-center items-center min-h-screen w-0 hidden bg-gradient-to-b from-[#07b4638a] to-[#003399d6]">
                <div class="text-white text-xl ml-12">
                    <div class="flex items-center my-8">
                        <img src="assets/delwathon_dark.png" class="w-16 h-16 invert" style="">
                        <p class="text-3xl text-white uppercase">Delwathon</p>
                    </div>
                    <div class="">
                        <p class="text-4xl w-4/5">Easily Track, Measure, and Scale.</p>
                        <p>Explore your Delwathon <b>Dashboard</b> today.</p>
                    </div>
                    <div class="my-4">
                        <ul class="list-disc">
                            <li>Instantly understand app usage</li>
                            <li>Get access to convenient debugging tools</li>
                            <li>Manage payments and scale your app</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const toggle = document.getElementById('toggle');
        const password = document.getElementById('password');
        toggle.onclick = function(){
            if(password.type == 'password'){
                password.type = 'text';
                toggle.classList.remove('bx-show');
                toggle.classList.add('bx-hide');
            }else{
                password.type = 'password';
                toggle.classList.add('bx-show');
                toggle.classList.remove('bx-hide');
            }
        }
    </script>
@endsection
