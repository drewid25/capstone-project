<div
    class="bg-accent-blue col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter h-full shadow-2xl py-6 px-3 col-span-7 ">
    <h1 class="text-letter font-bold text-2xl  mb-3 text-center">Update Employee Info</h1>
    <div class="bg-white h-8/12 p-6 w-8/12 mx-auto shadow-2xl rounded-lg py-4 px-4">
        <form action="{{ route('updateemployee') }}" method="POST" enctype="multipart/form-data" type="submit"
            class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-12/12 mx-auto shadow-2xl">
            @csrf

            <div class="flex flex-col">
                <input type="hidden" value="{{ $employee->id }}" name="id" />

                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="employee_name" class="text-letter mr-3">Employee Name</label>
                    <input type="text" name="name" class="focus-border-accent-blue" value={{ $employee->name }}>
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="login_password" class="text-letter mr-3">Email Address</label>
                    <input type="email" name="email" class="focus-border-accent-blue" value={{ $employee->email }}>
                </div>

               


            </div>


            <div class="p-3 flex flex-col bg-accent-blue">
                <label for="department" class="text-letter mr-3">Department/Office</label>
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
            </div>
            <div class="p-3 flex flex-col bg-accent-blue w-50">
              <label for="usertype" class="block text-sm font-semibold text-letter ">
                User Type:
               </label>
               <select name="usertype" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full 
                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"   required >
             <option value="admin">Admin</option>
             <option value='employee'>Employee</option>
                   </select>
               @error('usertype')
               <p class="text-red-500 text-xs p-1">
                 {{$message}}
               </p>
               @enderror
            </div>

            <div class="text-center">
                <button
                    class=" bg-letter text-accent-blue hover:bg-button-blue hover:text-letter  text-center rounded-lg w-18 px-3"
                    type="submit">Update</button>
            </div>






        </form>
    </div>

</div>
