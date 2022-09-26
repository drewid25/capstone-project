<div class="bg-gray-300 border-r-2 border-l-2 border-r-letter border-l-letter h-full shadow-2xl py-10 px-3 col-span-10 ">
    <h1 class="text-gray-800 font-bold text-2xl  mb-3 text-center">Update Employee Info</h1>
    
        <form action="{{ route('updateemployee') }}" method="POST" enctype="multipart/form-data" type="submit" class="py-8 px-8 bg-gray-100  flex flex-col w-4/12 mx-auto shadow-2xl">
            @csrf

            <div class="flex flex-col">
                <input type="hidden" value="{{ $employee->id }}" name="id" />

                <div class="p-2 flex flex-col  w-50">
                    <label for="employee_name" class="text-gray-800 mr-3">Employee Name</label>
                    <input type="text" name="name" class="bg-white border-2 border-gray-200 rounded w-full 
                    py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" value={{ $employee->name }}>
                </div>
                <div class="p-2 flex flex-col  w-50">
                    <label for="login_password" class="text-gray-800 mr-3">Email Address</label>
                    <input type="email" name="email" class="bg-white border-2 border-gray-200 rounded w-full 
                    py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" value={{ $employee->email }}>
                </div>




            </div>

          <div class="flex flex-col">
            <div class="p-3 flex flex-col ">
                <label for="department" class="text-gray-800 mr-3">Department/Office</label>
                <select name="department" id="" class="bg-white border-2 border-gray-200 rounded w-full 
                     py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
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
            </div>
            <div class="p-3 flex flex-col  w-50">
                <label for="usertype" class="block text-gray-800 ">
                    User Type
                </label>
                <select name="usertype" class="bg-white border-2 border-gray-200 rounded w-full 
                     py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" required>
                    <option value="admin">Admin</option>
                    <option value='employee'>Employee</option>
                </select>
                @error('usertype')
                <p class="text-red-500 text-xs p-1">
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
            <div class="text-center mt-5">
                <button class=" text-lg font-bold hover:bg-gray-100 text-gray-100 bg-gray-800 hover:text-gray-800 hover:border-gray-300  hover:border w-24 rounded" type="submit">UPDATE</button>

            </div>






        </form>
   

</div>
