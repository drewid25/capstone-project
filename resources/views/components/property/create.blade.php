<div class=" bg-gray-300 h-full col-span-10 border-2 border-t-gray-400 py-6 px-12">
    <h1 class="text-gray-800 font-bold text-2xl my-5 text-center">Add Property</h1>

    <form action="{{ route('createproperty') }}" method="POST" type="submit"
        class="py-6 px-6 bg-gray-100 h-50 flex flex-col w-10/12 mx-auto shadow-2xl">
        @csrf
        <div class="flex flex-row p-2">
            <div class="p-2 flex flex-col w-3/12">


                <label for="" class="text-gray-800 mr-3">Supplier Name</label>
                <input type="text" name="supplier_name"
                    class="bg-white appearance-none border-2 text-lg border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>

            <div class="p-3 flex flex-col  w-3/12">
                <label for="" class="text-gray-800  mr-3">Invoice Number</label>
                <input type="text" name="invoice_number"
                    class="bg-white appearance-none  text-lg border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>
            <div class="p-3 flex flex-col  w-3/12">
                <label for="" class="text-gray-800  mr-3">Date Acquired</label>
                <input type="date" name="date_acquired"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>

        </div>
        <div class="flex flex-row">



            <div class="p-3 flex flex-col w-1/12">
                <label for="" class="text-gray-800  mr-3">Quantity</label>
                <input type="number" name="quantity"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
            </div>
            <div class="p-3 flex flex-col  w-2/12">
                <label for="" class="text-gray-800  mr-3">Price</label>
                <input type="text" name="price"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-800">
            </div>


        </div>

        <div class="flex flex-row">
            <div class="p-3 flex flex-col w-6/12 ">
                <label for="" class="text-gray-800  mr-3">Classification</label>
                <select name="classification" id=""
                    class="bg-white border-2 border-gray-200 rounded w-full py-0 px-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
                    <option value="IT AND COMMUNICATIONS EQUIPMENT" class="text-gray-600">IT AND COMMUNICATIONS
                        EQUIPMENTS</option>
                    <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENTS</option>
                    <option value="FURNITURES AND FIXTURES">FURNITURES AND FIXTURES</option>
                    <option value="MOTOR VEHICLE">MOTOR VEHICLE</option>
                </select>
            </div>
            <div class="p-3 flex flex-col w-6/12">
                <label for="" class="text-gray-800  mr-3">Category

                </label>
                <select name="category" id=""
                    class="bg-white border-2 border-gray-200 rounded w-full py-0 px-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
                    <option value="CHAIR" class="text-gray-600">CHAIR</option>
                    <option value="TABLES" class="text-gray-600">TABLES</option>
                    <option value="SOFA" class="text-gray-600">SOFA</option>
                    <option value="CABINET">CABINET</option>
                    <option value="COMPUTER">COMPUTER</option>
                    <option value="TABLET">TABLET</option>
                    <option value="CELLPHONE">CELLPHONE</option>
                    <option value="AIRCONDITIONER">AIRCON</option>
                    <option value="VEHICLE">VEHICLE</option>
                </select>
            </div>
        </div>



        <div class="flex flex-row">
            <div class="p-3 flex flex-col w-3/12">
                <label for="" class="text-gray-800 mr-3">Property Number</label>
                <input type="text" name="property_number"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
            </div>
            <div class="p-3 flex flex-col w-9/12 ">
                <label for="" class="text-gray-800  mr-3">Property Name</label>
                <input type="text" name="property_name"
                    class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
            </div>


        </div>


        <div class="flex p-3">
            <div class="mb-3 w-full">
                <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-800 ">
                    Description

                </label>
                <textarea
                    class="
                           form-control
                           block
                           w-full
                           px-3
                           py-1.5
                           font-normal
                           text-gray-700
                           bg-white bg-clip-padding
                           border border-solid border-gray-300
                           rounded
                           transition
                           ease-in-out
                           m-0
                           focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleFormControlTextarea1" rows="3" name="description">
                      </textarea>
            </div>
        </div>
        <div class="block relative mb-5 px-3">
            <span class="text-xs font-medium text-letter">Select Employee</span>
            <select id="user" required name="user_id"
                class="bg-white border-2 border-gray-200 rounded w-full py-0 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-accent-blue">
                @foreach ($users as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->id_number }} - {{ $employee->name }} -
                        {{ $employee->department }} </option>
                @endforeach
            </select>
        </div>

        <div class="text-center mt-5">
            <button
                class=" text-lg font-bold hover:bg-gray-100 text-gray-100 bg-gray-800 hover:text-gray-800 hover:border hover:border-gray-600 w-24 rounded  py-1"
                type="submit"> <i class="fa-solid fa-window-maximize fa-sm text-gray-100  mr-2 "></i>ADD</button>

        </div>

    </form>



</div>
