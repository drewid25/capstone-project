@include('partials.header')
<div>
    <div class="flex flex-wrap justify-center mt-48 ">
      
  <br />
  <br />
  <div class="p-10 bg-white">
    <h2 class="text-center text-3xl leading-9 
      font-extrabold text-gray-800"
    >
      Sign In to your account
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
          class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
          htmlFor="text"
          >
           User name
          </label>
          <input 
            type="text"
            name="admin_name"
            id="admin_name"
            placeholder="admin_name"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full  
              py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
            required
          />
        </div>
      </div>

      <div class="flex justify-center mt-4">
        <div class="lg:w-full md:w-2/3 w-full">
          <label 
          class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
          htmlFor="password"
          >
            Password
          </label>
          <input 
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
              py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
            required
          />
        </div>
      </div>
    
      <div class="mt-4 flex justify-center">
        <button 
          type="submit"
          class="group w-full lg:w-1/3 md:w-2/3 py-2 px-4 mb-2  border border-transparent text-sm leading-5 font-medium 
            rounded-md text-white bg-button-blue hover:bg-accent-blue focus:outline-none focus:border-teal-400 
            focus:shadow-outline-teal active:bg-teal-400 active:outline-none transition duration-150 ease-in-out"
        >
          Sign In
        </button>
      </div>
        <div class="form-check">
          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-black checked:border-black focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
              Admin User
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-black checked:border-black focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                Employee User
              </label>
        </div>
    </form>
    
  </div>
</div>
</div>
@include('partials.footer')