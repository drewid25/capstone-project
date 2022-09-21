<div class="min-h-full container mx-auto ">
    <nav class="bg-accent-blue">
        <div class="px-4 py-4">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-letter font-bold items-center justify-center">
                        <div class="flex flex-col items-center gap-2 ">
                            @foreach($companies as $company)
                            <a href="/dashboard">
                                <div class="flex items-center ml-5">
                                    <img class="h-14  w-14 rounded-full mr-3" src="{{asset('images/'. $company->company_logo)}}" alt="">
                                    <div class="flex flex-col ">
                                        <h2 class="text-xl font-bold text-gray-800">{{$company->company_name}}</h2>
                                        <h3 class="text-sm font-bold text-gray-800">Property Management System</h3>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/dashboard" class="bg-button-blue text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                            <a href="/employeelist" class="text-letter hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Employees</a>
                        </div>
                    </div> --}}
                </div>
                <div class="hidden md:block">
                  
                    <!-- Profile dropdown -->
                    <div class=" ml-3">
                        <div class="flex flex-row justify-center items-center">
                            <img class="h-8 w-8 rounded-full" src="{{asset('images/'. auth()->user()->employee_image)}}" alt="">
                           
                            <h4 class="text-letter ml-3 items-center">{{auth()->user()->name}}</h4>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="text-letter ml-2  hover:bg-letter hover:text-accent-blue bg-button-blued px-3 py-2 rounded-md text-sm font-medium">logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
              Heroicon name: outline/bars-3
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Heroicon name: outline/x-mark
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
</div>
</nav>
</div>
