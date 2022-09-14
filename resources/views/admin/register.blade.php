@include('partials.header')
<div>
    <div class="flex flex-col justify-center mt-20">
      <div class="w-full p-10 m-auto bg-white rounded-md shadow-xl ring-2 ring-accent-blue lg:max-w-xl">
        <h1
          class="text-center text-3xl leading-9 
        font-extrabold text-gray-text"
        >
         
        Sign Up
        </h1>
        <form action="/store" method="POST" enctype="multipart/form-data" class="mt-6">
          @csrf
          <div class="mb-2">
            <label
              for="company_name"
              class="block text-sm font-semibold text-gray-text"
            >
              Company Name:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                name="company_name" value="{{ old('company_name') }}"
              required
            />
            @error('company_name')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>  
           @enderror
          </div>
           <div class="mb-2">
            <label for="company_logo" class="block text-sm font-semibold text-gray-text">
              Company Logo:
            </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
  
            <input type="file" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="company_logo"   value="{{ old('company_logo') }}" />
  
            @error('company_logo')
            <p class="text-red-500 text-xs p-1">
              {{$message}}
            </p>
            @enderror
          </div>
          <div class="mb-2">
            <label
              for="email"
              class="block text-sm font-semibold text-gray-text"
            >
              Email
            </label>
            <input
              type="email"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                name="email" value="{{ old('email') }}"
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
              class="block text-sm font-semibold text-gray-text"
            >
              Admin Name:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                name="admin_name" value="{{ old('admin_name') }}"
              required
            />
            @error('admin_name')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mb-2">
            <label for="admin_image" class="block text-sm font-semibold text-gray-text ">
              User Photo:
            </label>
            <input type="file" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="admin_image"  value="{{ old('admin_image') }}" required />
            @error('admin_image')
            <p class="text-red-500 text-xs p-1">
              {{$message}}
            </p>
            @enderror
          </div>
          <div class="mb-2">
            <label
              for="password"
              class="block text-sm font-semibold text-gray-text"
            >
              Password
            </label>
            <input
              type="password"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
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
              class="block text-sm font-semibold text-gray-text"
            >
              Confirm Password
            </label>
            <input
              type="password"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
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
            <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-button-blue rounded-md hover:bg-accent-blue focus:outline-none focus:bg-accent-blue">
             Submit
            </button>
          </div>
        </form>

        <p class="mt-8 text-xs font-light text-center text-gray-700">
          Already have an account?
          <a href="/login" class="font-medium hover:underline text-accent-blue"> Sign in </a>
        </p>
      </div>
    </div>
  </div>
@include('partials.footer')