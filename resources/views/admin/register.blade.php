@include('partials.header')
<div>
    <div class="flex flex-col justify-center mt-20">
      <div class="w-full p-10 m-auto bg-white rounded-md shadow-xl ring-2 ring-indigo-600 lg:max-w-xl">
        <h1
          class="text-center text-3xl leading-9 
        font-extrabold text-gray-800"
        >
         
        Sign Up
        </h1>
        <form action="/store" method="POST" enctype="multipart/form-data" class="mt-6">
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
            <label for="company_logo" class="block text-sm font-semibold text-gray-800">
              Company Logo:
            </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
  
            <input type="file" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" name="company_logo" />
  
            @error('company_logo')
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
              for="admin_name"
              class="block text-sm font-semibold text-gray-800"
            >
              Admin Name:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="admin_name"
              required
            />
            @error('admin_name')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mb-2">
            <label for="admin_image" class="block text-sm font-semibold text-gray-800">
              User Photo:
            </label>
            <input type="file" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" name="admin_image" required />
            @error('admin_image')
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
          <div class="mb-2">
            <label
              for="password_confirmation"
              class="block text-sm font-semibold text-gray-800"
            >
              Confirm Password
            </label>
            <input
              type="password"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                name="password_confirmation"
              required
            />
            @error('password_confirmation')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mt-6">
            <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-teal-500 rounded-md hover:bg-teal-400 focus:outline-none focus:bg-teal-400">
             Submit
            </button>
          </div>
        </form>

        <p class="mt-8 text-xs font-light text-center text-gray-700">
          Already have an account?
          <a href="/login" class="font-medium hover:underline"> Sign in </a>
        </p>
      </div>
    </div>
  </div>
@include('partials.footer')