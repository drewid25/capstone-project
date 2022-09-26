<div class="bg-gray-300  py-6 px-3 h-full col-span-10 border ">
    <h1 class="text-2xl font-bold text-center mb-3 text-gray-800">Inventory List</h1>
    
        <table class="table-auto border-2 border-border-gray mx-auto">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray  bg-gray-600 text-letter text-sm mr-2 w-40">
                        Property Number
                    </th>
                    <th class="border-2 border-border-gray  bg-gray-600 text-letter text-sm   mr-2 w-40">
                        Qty
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600 bg-gray-600  text-letter text-sm   mr-2 w-40">
                        Item
                    </th>
                    <th class="border-2 border-border-gray  bg-gray-600  text-letter text-sm   mr-2 w-6/12">
                        Description
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600  text-letter text-sm   mr-2 w-32 ">
                        Issued to
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600  text-letter text-sm   mr-2 w-32 ">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($inventories as $inventory)
                <tr>



                    <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->property_number}}</td>
                    <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->quantity}}</td>
                    <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->property_name}}</td>
                    <td class='border-2 border-border-gray text-grey ml-2 text-sm '>{{$inventory->description}}</td>
                    <td class='border-2 border-border-gray  text-grey text-center text-sm '>{{App\Models\User::find($inventory->user_id)->name}}
                    <td class='border-2 border-border-gray  text-grey text-center text-sm '>
                        <div class="flex flex-row justify-center p-1">

                            <form onsubmit="return confirm('Do you really want to update this property')">
                                @csrf
                            </form>
                            <a href="{{ url('propertyupdate/' . $inventory->id) }}" class='bg-gray-800 hover:bg-gray-100 hover:text-gray-800 hover:border hover:border-gray-600 px-4 py-1 rounded text-letter'><i class="mr-2 fa-regular fa-pen-to-square"></i>Edit</a>
                        </div>


                    </td>

                </tr>
                @endforeach


            </tbody>

        </table>

  
</div>
