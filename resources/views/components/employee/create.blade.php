<div class="bg-gray-300 h-full col-span-10 border-2 border-t-gray-400 py-6 px-12">
    <h1 class="text-gray-800 font-bold text-2xl my-5 text-center">Add Employee</h1>

    <form action="/user" method="POST" enctype="multipart/form-data" type="submit"
        class="py-8 px-8 bg-gray-100  flex flex-col w-full mx-auto shadow-2xl">
        @csrf
        <div class="flex flex-row items-center gap-1">
            <div class="p-2 flex flex-col w-4/12">
                <label for="id_number" class="text-gray-800 mr-3">Employee Id Number</label>
                <input type="text" name="id_number" value="" onfocus="this.value='Id Number'"
                    class="bg-text-letter py-1 appearance-none border-2 border-gray-200 rounded w-full  px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                    value="{{ old('id_number') }}" required />
                @error('id_number')
                    <p class="text-red-500 text-xs p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class=" p-2 flex flex-col w-4/12">
                <label for="name" class="text-gray-800   mr-3">Employee Name</label>
                <input type="text" name="name"
                    class="bg-text-letter text-sm appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                    value="{{ old('name') }}" required />
                @error('name')
                    <p class="text-red-500 text-xs p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="p-2 flex flex-col w-4/12">
                <label for="email" class="text-gray-800 mr-3">Email </label>
                <input type="email" name="email"
                    class="bg-text-letter text-sm appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                    value="{{ old('email') }}" required />
                @error('email')
                    <p class="text-red-500 text-xs p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="flex flex-row items-center  gap-1">

            <div class="p-2 flex flex-col w-4/12">
                <label for="employee_position" class=" text-gray-800"> Position/Title </label>
                <input type="text"
                    class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                    name="employee_position" value="{{ old('employee_position') }}" required />
                @error('employee_position')
                    <p class="text-red-500 text-xs p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="p-2 flex flex-col w-4/12">
                <label for="department" class="text-gray-800 mr-3">Department/Office</label>
                <select name="department" id=""
                    class="bg-text-letter border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
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
            <div class="py-2 flex flex-col w-4/12">
                <label for="usertype" class="block   text-gray-800 ">
                    User Type:
                </label>
                <select name="usertype" required
                    class="bg-text-letter border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
                    <option value="admin">Admin</option>
                    <option value='employee'>Employee</option>
                </select>
                @error('usertype')
                    <p class="text-red-500 text-xs p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="py-2 px-3 flex flex-col  w-50">
            <label for="employee_image" class="text-gray-800  mr-3">Upload Profile Image</label>
            <input type="file" name="employee_image" class="focus-border-gray-800"
                value="{{ old('employee_image') }}" required />
            @error('employee_image')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
            @enderror
        </div>







        <div class="py-2 px-3 flex flex-col  w-4/12">
            <label for="password" class="block  text-gray-800">
                Password
            </label>
            <input type="password"
                class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                name="password" required />
            @error('password')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="py-2 px-3 flex flex-col w-4/12 mb-4">
            <label for="password_confirmation" class="block text-gray-800">
                Confirm Password
            </label>
            <input type="password"
                class="bg-text-letter appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800"
                name="password_confirmation" required />
            @error('password_confirmation')
                <p class="text-red-500 text-xs p-1">
                    {{ $message }}
                </p>
            @enderror
        </div>




        <div class=" ml-5">
            <button
                class="text-lg py-1 rounded font-bold hover:bg-gray-100 bg-gray-800 text-gray-100 hover:text-gray-800  hover:border hover:border-gray-600 w-24 h-15 "
                type="submit">Submit</button>
        </div>
    </form>
</div>
