<div class="bg-gray-text h-full col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter shadow-2xl px-3">
    <h1 class="text-letter font-bold text-2xl my-5 text-center">Add Employee</h1>
    <div class="bg-white h-fit w-8/12 p-4 mx-auto shadow-2xl rounded-lg">
        <form action="/user" method="POST" enctype="multipart/form-data" type="submit" class="p-2 bg-accent-blue h-full flex flex-col w-full mx-auto shadow-2xl">
            @csrf

            <div class="p-3 flex flex-col w-50">
                <label for="id_number" class="text-letter  mr-3">Employee Id Number</label>
                <input type="text" name="id_number" value="" onfocus="this.value=''" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" value="{{ old('id_number') }}" required />
                @error('id_number')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="name" class="text-letter mr-3">Employee Name</label>
                <input type="text" name="name" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" value="{{ old('name') }}" required />
                @error('name')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="email" class="text-letter  mr-3">Email </label>
                <input type="email" name="email" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" value="{{ old('email') }}" required />
                @error('email')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="employee_image" class="text-letter  mr-3">Upload Profile Image</label>
                <input type="file" name="employee_image" class="focus-border-accent-blue" value="{{ old('employee_image') }}" required />
                @error('employee_image')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="employee_position" class=" text-letter"> Position/Title </label>
                <input type="text" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="employee_position" value="{{ old('employee_position') }}" required />
                @error('employee_position')
                <p class="text-red-500 text-xs p-1">
                    {{$message}}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col bg-accent-blue">
                <label for="department" class="text-letter  mr-3">Department/Office</label>
                <select name="department" id="" class="bg-text-letter border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
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

            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="usertype" class="block   text-letter ">
                    User Type:
                </label>
                <select name="usertype" required class="bg-text-letter border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
                    <option value="admin">Admin</option>
                    <option value='employee'>Employee</option>
                </select>
                @error('usertype')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col bg-accent-blue w-50">
                <label for="password" class="block  text-letter">
                    Password
                </label>
                <input type="password" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="password" required />
                @error('password')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="py-2 px-3 flex flex-col w-50 mb-4">
                <label for="password_confirmation" class="block text-letter">
                    Confirm Password
                </label>
                <input type="password" class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue" name="password_confirmation" required />
                @error('password_confirmation')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
                @enderror
            </div>


    </div>

    <div class="text-center my-8">
        <button class="text-lg rounded-full font-bold hover:bg-button-blue bg-letter text-accent-blue  hover:text-letter w-24 h-15 text-center" type="submit">ADD</button>
    </div>
    </form>
</div>
