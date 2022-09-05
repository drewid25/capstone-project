@include('partials.header')
<x-nav/>
<div>
    <div class="flex flex-col justify-center mt-20">
      <div class="w-full p-10 m-auto bg-white rounded-md shadow-xl ring-2 ring-indigo-600 lg:max-w-xl">
        <h1
          class="text-center text-3xl leading-9 
        font-extrabold text-gray-800"
        >
         
        Sign Up
        </h1>
        <form action="/store" method="POST" class="mt-6">
          @csrf
          <div class="mb-2">
            <label
              for="company_name"
              class="block text-sm font-semibold text-gray-800"
            >
              Company Name:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="company_name"
              required
            />
            @error('company_name')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>  
        @enderror
          </div>
          <div class="mb-2">
            <label
              for="owner"
              class="block text-sm font-semibold text-gray-800"
            >
              Owner:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="owner"
              required
            />
            @error('owner')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>  
        @enderror
          </div>
          <div class="mb-2">
            <label
              for="contact_number"
              class="block text-sm font-semibold text-gray-800"
            >
              Contact numbers:
            </label>
            <input
              type="Text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="contact_numbers"
              required
            />
            @error('contact_number')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>  
        @enderror
          </div>
          <div class="mb-2">
            <label
              for="email"
              class="block text-sm font-semibold text-gray-800"
            >
              Email
            </label>
            <input
              type="email"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="email"
              required
            />
            @error('email')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>  
        @enderror
          </div>
          <div class="mb-2">
            <label
              for="user_name"
              class="block text-sm font-semibold text-gray-800"
            >
              UserName:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="user_name"
              required
            />
            @error('user_name')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mb-2">
            <label
              for="password"
              class="block text-sm font-semibold text-gray-800"
            >
              Password
            </label>
            <input
              type="password"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="password"
              required
            />
            @error('password')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mt-6">
            <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-teal-400 focus:outline-none focus:bg-teal-400">
              Login
            </button>
          </div>
        </form>

        <p class="mt-8 text-xs font-light text-center text-gray-700">
          Already have an account?
          <a href="#" class="font-medium hover:underline"> Sign in </a>
        </p>
      </div>
    </div>
  </div>
@include('partials.footer')