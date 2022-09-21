<div class="bg-gray-text shadow-2xl py-6 px-3 h-full col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter">
    <h1 class="text-2xl font-bold text-center mb-3 text-letter">Inventory List</h1>
    <div class="bg-letter rounded-lg py-6 px-3 h-96">
        <table class=" border-2 border-border-gray">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm mr-2 w-40">
                        Property Number
                    </th>
                    <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm   mr-2 w-40">
                        Qty
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-40">
                        Item
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-96">
                        Description
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-32 ">
                        Issued to
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-32 ">
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
                    <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->description}}</td>
                    <td class='border-2 border-border-gray  text-grey text-center text-sm '>{{App\Models\User::find($inventory->user_id)->name}}
                    <td class='border-2 border-border-gray  text-grey text-center text-sm '>
                        <div class="flex flex-row justify-center p-1">

                            <form onsubmit="return confirm('Do you really want to update this property')">
                                @csrf
                            </form>
                            <a href="{{ url('propertyupdate/' . $inventory->id) }}" class='bg-button-blue hover:bg-accent-blue px-2 rounded-lg text-letter'>edit</a>
                        </div>


                    </td>

                </tr>
                @endforeach


            </tbody>

        </table>

    </div>
</div>
