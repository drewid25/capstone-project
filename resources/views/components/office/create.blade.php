<div class=" bg-gray-300 h-full col-span-10 border-2 border-t-gray-400 py-6 px-12">
    <h1 class="text-gray-800 font-bold text-2xl my-5 text-center">Add Office</h1>

    <form action="{{ route('office') }}" method="POST" type="submit"
        class="py-6 px-6 bg-gray-100 h-50 flex flex-col w-10/12 mx-auto shadow-2xl">
        @csrf
        <div class="flex flex-row p-2">
            <div class="p-2 flex flex-col w-3/12">


                <label for="" class="text-gray-800 mr-3">Office Name</label>
                <input type="text" name="office_name"
                    class="bg-white appearance-none border-2 text-lg border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>

            <div class="p-3 flex flex-col  w-3/12">
                <label for="" class="text-gray-800  mr-3">Office Email</label>
                <input type="text" name="office_email"
                    class="bg-white appearance-none  text-lg border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>
            <div class="p-3 flex flex-col  w-3/12">
                <label for="" class="text-gray-800  mr-3">Contact number</label>
                <input type="text" name="contact_number"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>

        </div>










        <div class="text-center mt-5">
            <button
                class=" text-lg font-bold hover:bg-gray-100 text-gray-100 bg-gray-800 hover:text-gray-800 hover:border hover:border-gray-600 w-24 rounded  py-1"
                type="submit"> <i class="fa-solid fa-window-maximize fa-sm text-gray-100  mr-2 "></i>ADD</button>

        </div>

    </form>



</div>
