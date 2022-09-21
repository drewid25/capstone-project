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
    <div class="text-center text-large"> <h2 class="mt-5  text-red-400 ">{{session('message')}}</h2></div>
   
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
         Employee Id Number
          </label>
          <input 
            type="text"
            name="id_number"
            id="id_number"
            placeholder="id_number"
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
      <div class="flex justify-center mt-4">
        <div class="lg:w-full md:w-2/3 w-full">
        <label 
        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
        htmlFor="usertype"
        >
          UserType
        </label>
        <select name="usertype" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
        py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
      
        <option value="admin">
              Admin

          </option>
          <option value="employee">
            Employee
  
        </option>  
       
        </select>
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
        
    </form>
    
  </div>
</div>
</div>

@include('partials.footer')