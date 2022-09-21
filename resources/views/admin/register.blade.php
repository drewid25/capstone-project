@include('partials.header')
<div>
    <div class="flex flex-col justify-center mt-20">
      <div class="w-full p-10 m-auto bg-white rounded-md shadow-xl ring-2 ring-accent-blue lg:max-w-xl">
        <h1
          class="text-center text-3xl leading-9 
        font-extrabold text-gray-text"
        >
         
      Register
        </h1>
        <form action="/user" method="POST" enctype="multipart/form-data" class="mt-6">
          @csrf
          <div class="mb-2">
            <label
              for="id_number"
              class="block text-sm font-semibold text-gray-text"
            >
             Employee Id Number:
            </label>
            <input
              type="text"
              onfocus="this.value=''"
              value="Type Here"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                name="id_number" value="{{ old('id_number') }}"
              required
            />
            @error('id_number')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
            @enderror  
          </div>
          <div class="mb-2">
            <label
              for="name"
              class="block text-sm font-semibold text-gray-text"
            >
              Employee Name:
            </label>
            <input
              type="text"
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                name="name" value="{{ old('name') }}"
              required
            />
            @error('name')
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
            <label for="employee_image" class="block text-sm font-semibold text-gray-text ">
              Upload Image
            </label>
            <input type="file" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="employee_image"  value="{{ old('employee_image') }}" required />
            @error('employee_image')
            <p class="text-red-500 text-xs p-1">
              {{$message}}
            </p>
            @enderror
          </div>
          <div class="mb-2">
            <label for="employee_position" class="block text-sm font-semibold text-gray-text ">
              Position/Title
            </label>
            <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="employee_position"  value="{{ old('employee_position') }}" required />
            @error('employee_position')
            <p class="text-red-500 text-xs p-1">
              {{$message}}
            </p>
            @enderror
          </div>
          <div class="mb-2">
            <label for="department" class="block text-sm font-semibold text-gray-text">Department/Office</label>
            <select name="department"
             id="department" class="w-50 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
             py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue form-select bg-no-repeat">
            <option value="IT Department" class="text-gray-600">IT Department</option>
            <option value="Property Division">Property Division</option>
            <option value="Accounting Division">Accounting Department</option>
            <option value="Finance Division">Finance Division</option>
            <option value="Personnel Division">Personnel</option>
            <option value="Records Division">Records Division</option>
            <option value="Training Division">Training Department</option>
            <option value="Maintenance Division">Maintenance Division</option>
            <option value="Leave Division">Leave Division</option>
            </select>
            @error('department')
            <p class="text-red-500 text-xs p-1">
              {{$message}}
            </p>
            @enderror
        </div>
          <div class="mb-2">
            <label for="usertype" class="block text-sm font-semibold text-gray-text ">
             User Type:
            </label>
            <select name="usertype" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue form-select bg-no-repeat"   required >
          <option value="admin">Admin</option>
          <option value='employee'>Employee</option>
                </select>
            @error('usertype')
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
          Already registred?
          <a href="/login" class="font-medium hover:underline text-accent-blue"> Log in </a>
        </p>
      </div>
    </div>
  </div>
@include('partials.footer')