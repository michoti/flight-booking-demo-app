<main class="flex h-screen bg-gray-100 font-sans">

    <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">

        <div class="h-40 lg:h-20 w-full flex flex-wrap">
            <nav id="header"
                class="bg-gray-200 w-full lg:max-w-sm flex items-center border-b-1 border-gray-300 order-2 lg:order-1">

                <div class="px-2 w-full">
                    <select name=""
                        class="bg-gray-300 border-2 border-gray-200 rounded-full w-full py-3 px-4 text-gray-500 font-bold leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                        id="form-field2">
                        <option value="Default">default</option>
                        <option value="A">report a</option>
                        <option value="B">report b</option>
                        <option value="C">report c</option>
                    </select>
                </div>

            </nav>
            <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">
                <form>
                    <div class="flex h-full justify-start items-center">

                        <!--Search-->
                        <div class="relative max-w-3xl px-6">
                            <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                                <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </div>

                            <input id="search-toggle" type="search" placeholder="search"
                                class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3">

                        </div>
                        <!-- / Search-->

                        <!--Date-->
                        <div class="relative max-w-3xl px-6">
                            <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>

                            <input id="search-toggle" type="date"
                                class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3">

                        </div>
                        <!-- / date-->

                        <div class="px-6">
                            <button>submit</button>
                        </div>

                    </div>
                </form>

            </nav>
        </div>

        <!--Dash Content -->
        <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">

            <div class="w-1/2 lg:w-full">
                <div
                    class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i
                                    class="fa fa-wallet fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i
                                        class="fas fa-caret-up"></i></span></h3>
                            <h5 class="font-bold text-gray-500">Total Revenue</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i
                                    class="fas fa-users fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">249 <span class="text-orange-500"><i
                                        class="fas fa-exchange-alt"></i></span></h3>
                            <h5 class="font-bold text-gray-500">Total Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i
                                    class="fas fa-user-plus fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i
                                        class="fas fa-caret-up"></i></span></h3>
                            <h5 class="font-bold text-gray-500">New Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div
                    class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i
                                    class="fas fa-server fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">152 days</h3>
                            <h5 class="font-bold text-gray-500">Server Uptime</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Graph Content -->
        <div id="main-content" class="w-full flex-1">

            <div class="flex flex-1 flex-wrap">

                <div class="w-full xl:w-2/3 p-6 xl:max-w-6xl">

                    <!--"Container" for the graphs"-->
                    <div class="max-w-full lg:max-w-3xl xl:max-w-5xl">

                        <!--Table Card-->
                        <div class="p-3">
                            <div class="border-b p-3">
                                <h5 class="font-bold text-black">Flights available</h5>
                            </div>
                            <div class="p-5">
                                @foreach ($flights as $flight)
                                <div class="p-3">
                                    <p class="font-bold text-2xl">{{ $flight->flight_detail->departure_time}} - {{
                                        $flight->flight_detail->arrival_time}}</p>
                                    <p>{{ $flight->flight_detail->flight_source}} to {{
                                        $flight->flight_detail->flight_destination}}</p>
                                    <span>
                                        <i class="fa fa-plane" aria-hidden="true"></i> {{ $flight->airline->name}}
                                    </span>
                                </div>
                                @endforeach

                                <p class="py-2"><a href="#">See More issues...</a></p>

                            </div>
                        </div>
                        <!--/table Card-->

                    </div>

                </div>

                <div class="w-full xl:w-1/3 p-6 xl:max-w-4xl border-l-1 border-gray-300">

                    <!--"Container" for the graphs"-->
                    <div class="max-w-sm lg:max-w-3xl xl:max-w-5xl">
                        Display content

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>