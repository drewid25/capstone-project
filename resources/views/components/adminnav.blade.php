<div class="min-h-full container mx-auto py-6">
  <nav class="bg-accent-blue">
    <div class="  px-4 sm:px-6 lg:px-8 ">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0 text-letter font-bold items-center justify-center">
        
      
     
           <div class="flex items-center gap-2 ">
            <a href="/dashboard">
           <img class="w-10 h-10 rounded-full"src="{{asset('images/'. auth()->user()->company_logo)}}" alt="">
          </a> 
           <h2 class="ml-3"> {{auth()->user()->company_name}}</h2>
           </div>
           
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/dashboard" class="bg-button-blue text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

              <a href="/employeelist" class="text-letter hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 transform">Employees</a>

              

              
              
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          
             
            </button>
            
            <!-- Profile dropdown -->
            <div class=" ml-3">
              <div class="flex items-center">
            
                  <img class="h-8 w-8 rounded-full" src="{{asset('images/'. auth()->user()->admin_image)}}" alt="">
        
                </button>
                <h3 class="text-letter ml-3 items-center">{{auth()->user()->admin_name}}</h3>
                <form action="/logout" method="post">
                  @csrf
                  <button class="text-letter ml-3  hover:bg-letter hover:text-accent-blue bg-button-blue transition-colors duration-200 transform px-3 py-2 rounded-md text-sm font-medium">logout</button>
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