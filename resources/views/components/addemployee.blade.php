<div class="bg-gray-text col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter h-full shadow-2xl py-6 px-3  ">
    <h1 class="text-letter font-bold text-2xl  mb-3 text-center">Add Employee</h1>
    <div class="bg-white h-8/12 p-6 w-8/12 mx-auto shadow-2xl rounded-lg py-4 px-4">
        <form action="/user" method="POST" enctype="multipart/form-data" type="submit"
            class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-12/12 mx-auto shadow-2xl">
            @csrf

          
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="id_number" class="text-letter  font-semibold mr-3">Employee Id Number</label>
                    <input type="text" name="id_number"    value="Type Here"  onfocus="this.value=''"
                   class="focus-border-accent-blue"
                        value="{{ old('id_number') }}" required />
                         @error('id_number')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="name" class="text-letter font-semibold mr-3">Employee Name</label>
                    <input type="text" name="name" class="focus-border-accent-blue" value="{{ old('name') }}"
                        required />
                    @error('name')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="email" class="text-letter font-semibold mr-3">Email </label>
                    <input type="email" name="email" class="focus-border-accent-blue" value="{{ old('email') }}"
                        required />
                    @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="employee_image" class="text-letter font-semibold mr-3">Upload Image</label>
                    <input type="file" name="employee_image" class="focus-border-accent-blue"
                        value="{{ old('employee_image') }}" required />
                    @error('employee_image')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>






                <div class="p-3 flex flex-col bg-accent-blue">
                    <label for="department" class="text-letter font-semibold mr-3">Department/Office</label>
                    <select name="department" id="" class="w-50">
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
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="usertype" class="block text-sm font-semibold text-letter ">
                        User Type:
                    </label>
                    <select name="usertype"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                              px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                        required>
                        <option value="admin">Admin</option>
                        <option value='employee'>Employee</option>
                    </select>
                    @error('usertype')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="password" class="block text-sm font-semibold text-gray-text">
                        Password
                    </label>
                    <input type="password"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                        name="password" required />
                    @error('password')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-text">
                        Confirm Password
                    </label>
                    <input type="password"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                        py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                        name="password_confirmation" required />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs p-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

    </div>

    <div class="text-center mt-5">
        <button
            class="text-lg rounded-full font-bold hover:bg-gray-text bg-letter text-accent-blue  hover:text-letter w-24 h-15 text-center"
            type="submit">Add</button>
    </div>
  </form>

</div>




