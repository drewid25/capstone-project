<div class="bg-gray-300  py-6 px-3 h-full col-span-10 border ">
    <h1 class="text-2xl font-bold text-center mb-3 text-gray-800">Office Directory</h1>

    <table class="table-auto border-2 border-border-gray mx-auto">
        <thead>
            <tr>
                <th class="border-2 border-border-gray  bg-gray-600 text-letter text-sm mr-2 w-12">
                    N0.
                </th>
                <th class="border-2 border-border-gray  bg-gray-600 text-letter text-sm mr-2 w-60">
                    Office Name
                </th>
                <th class="border-2 border-border-gray  bg-gray-600 text-letter text-sm   mr-2 w-60">
                    Office Email
                </th>
                <th class="border-2 border-border-gray bg-gray-600 bg-gray-600  text-letter text-sm   mr-2 w-60">
                    Contact Number
                </th>

                <th class="border-2
                    border-border-gray bg-gray-600 text-letter text-sm mr-2 w-32 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($offices as $office)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">


                    <th scope="row"
                        class='border-2 border-border-gray text-gray-800 font-medium capitalize text-left  text-sm '>
                        {{ $offices->firstItem() + $loop->index }}.</th>
                    <td class='border-2 border-border-gray text-grey text-left text-sm '>
                        {{ $office->office_name }}</td>
                    <td class='border-2 border-border-gray text-grey  text-sm '>{{ $office->office_email }}
                    </td>
                    <td class='border-2 border-border-gray text-grey text-left text-sm '>{{ $office->contact_number }}
                    </td>
                    <td>
                        <div class="flex flex-row justify-center p-1">

                            <form onsubmit="return confirm('Do you really want to update this property')">
                                @csrf
                            </form>
                            <a href="{{ url('updateoffice/' . $office->id) }}"
                                class='bg-gray-800 hover:bg-gray-100 hover:text-gray-800 hover:border hover:border-gray-600 px-4 py-1 rounded text-letter'><i
                                    class="mr-2 fa-regular fa-pen-to-square"></i>Edit</a>
                        </div>
                    </td>


                    </td>

                </tr>
            @endforeach


        </tbody>

    </table>
    <div class="flex justify-end mr-2 mt-2">
        {{ $offices->links() }}

    </div>
</div>
