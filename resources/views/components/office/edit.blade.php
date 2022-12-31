<div class="bg-blue-400 border-r-2 border-l-2 border-r-letter border-l-letter h-full shadow-2xl py-10 px-3 col-span-10 ">
    <h1 class="text-gray-800 font-bold text-2xl  mb-3 text-center">Update Employee Info</h1>

    <form action="{{ route('updateoffice') }}" method="POST" enctype="multipart/form-data" type="submit"
        class="py-8 px-8 bg-gray-100  flex flex-col w-4/12 mx-auto shadow-2xl">
        @csrf
        @dd($office);
        <div class="flex flex-col">
            <input type="hidden" value="{{ $office->id }}" name="id" />

            <div class="p-2 flex flex-col  w-50">
                <label for="office_name" class="text-gray-800 mr-3">Office Name</label>
                <input type="text" name="office_name"
                    class="bg-white border-2 border-gray-200 rounded w-full 
                    py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                    value={{ $office->name }}>
            </div>
            <div class="p-2 flex flex-col  w-50">
                <label for="login_password" class="text-gray-800 mr-3">Office Email</label>
                <input type="email" name="office_email"
                    class="bg-white border-2 border-gray-200 rounded w-full 
                    py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                    value={{ $office->email }}>
            </div>




        </div>

        <div class="flex flex-col">

            <div class="p-2 flex flex-col  w-50">
                <label for="login_password" class="text-gray-800 mr-3">Contact Number</label>
                <input type="text" name="contact_number"
                    class="bg-white border-2 border-gray-200 rounded w-full 
                    py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue"
                    value={{ $office->contact_number }}>
            </div>
        </div>
        <div class="text-center mt-5">
            <button
                class=" text-lg font-bold hover:bg-gray-100 text-gray-100 bg-gray-800 hover:text-gray-800 hover:border-gray-300  hover:border w-24 rounded"
                type="submit">UPDATE</button>

        </div>






    </form>


</div>
