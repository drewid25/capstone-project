<nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-accent-blue text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg ">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <div class="container-fluid">
            @foreach($company as $companies)
          
            <div class="flex items-center ml-5">
                <img  class="h-14  w-14 rounded-full mr-3" src="{{asset('images/'. $companies->company_logo)}}" alt="">
                <div class="flex flex-col ">
                <h2 class="text-xl font-bold text-gray-800">{{$companies->company_name}}</h2>
                <h3 class="text-sm font-bold text-gray-800">Property Management System</h3>
                </div>
               </div>
                @endforeach
            
            {{-- <a class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="#">
                <i class="fa-solid fa-users-gear mx-3 text-3xl" loading="lazy"></i>
            
               
            </a> --}}
        </div>


        <div class="flex space-x-2 justify-center items-center">
            <div>
                <a href="/register" class="items-center px-6 p-2.5 bg-gray-text text-white text-xs leading-normal uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex align-center">
                    <i class="fa-solid fa-right-to-bracket mr-2.5"></i>
                    Register
                </a>
            </div>
        </div>

    </div>
</nav>
