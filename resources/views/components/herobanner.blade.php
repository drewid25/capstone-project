<!-- Container for demo purpose -->
<div class="relative top-10 right-0 bottom-0 left-0 w-full h-screen p-4 mx-auto mt-5">
  @foreach($company as $companies)
  <!-- Section: Design Block -->
  <section class="mb-20 mx-8">
    <div class="px-12 py-12 md:px-12 bg-gray-100 text-gray-800 text-center lg:text-left">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="mt-12 lg:mt-0">
            <h1 class="text-4xl font-bold text-gray-800">{{$companies->company_name}}</h1>
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Property Management  <br /><span class="text-600 text-accent-blue">System</span></h1>
            <p class="text-gray-600">
            A system software that facilitates inventory or assets of a company,  is responsible for the effective purchase, use, and disposal of property investment and equipment. It also entails keeping detailed records of these assets' ownership, inventory, storage, and insurance.
            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <div class="block rounded-lg shadow-lg bg-gray-text px-6 py-12 md:px-12">

              <h2 class="text-center text-3xl leading-9 
                font-extrabold text-white"
              >
                Sign In 
              </h2>
              @if(session()->has('message'))
              <h2 class="mt-5 text-red-400">{{session('message')}}</h2>
              @endif
              <br />
              <br />
              <form action="/login/process" method="POST">
                @csrf
                <div class="flex justify-center">
                  <div class="lg:w-full md:w-2/3 w-full">
                    <label 
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    htmlFor="text"
                    >
                 Employee Id Number
                    </label>
                    <input 
                      type="text"
                      onfocus="this.value=''"
                      value="ID Number"
                      name="id_number"
                      id="pd_number"
                      placeholder="ID NUMBER"
                      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full  
                        py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                      required
                    />
                  </div>
                </div>
          
                <div class="flex justify-center mt-4">
                  <div class="lg:w-full md:w-2/3 w-full">
                    <label 
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    htmlFor="password"
                    >
                      Password
                    </label>
                    <input 
                      type="password"
                      name="password"
                      onfocus="this.value=''"
                      value="Password"
                      id="password"
                      placeholder="Password"
                      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                        py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                      required
                    />
                  </div>
                </div>
                <div class="flex justify-center mt-4">
                  <div class="lg:w-full md:w-2/3 w-full">
                  <label 
                  class="block uppercase tracking-wide text-xs text-letter font-bold mb-2"
                  htmlFor="usertype"
                  >
                    UserType
                  </label>
                  <select name="usertype" id="usertype" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
                  <option value="employee">
                    Employee
      
                   </option>  
                  <option value="admin">
                        Admin
          
                    </option>
                    
                  </select>
                </div>
                </div>
                <div class="mt-4 flex justify-center">
                  <button 
                    type="submit"
                    class="group w-full lg:w-1/3 md:w-2/3 py-2 px-4 mb-2  border border-transparent text-md leading-5 font-medium 
                      rounded-md text-letter bg-accent-blue hover:bg-button-blue focus:outline-none focus:border-teal-400 
                      focus:shadow-outline-teal active:bg-teal-400 active:outline-none transition duration-150 ease-in-out"
                  >
                    Log In
                  </button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->


