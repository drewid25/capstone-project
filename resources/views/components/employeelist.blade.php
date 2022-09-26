<div class="bg-gray-300 py-6 px-3 h-full col-span-10 border-r-2 border-l-2 border-r-letter overflow-auto">

    <h1 class="text-2xl font-bold text-center mb-3 text-gray-800">LIST OF EMPLOYEES</h1>

    
        <table class="container border-2 border-border-gray ">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray bg-gray-600 text-letter text-sm mr-2 w-12">
                        No.
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600 text-letter text-sm mr-2 w-40">
                        ID number
                    </th>
                    <th class="border-2 border-border-gray  bg-gray-600  text-letter text-sm mr-2 w-40">
                        Employee Name
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600  text-letter  text-sm mr-2 w-40">
                        Department/Office
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600  text-letter text-sm  mr-2 w-40">
                        Email Address
                    </th>

                    <th class="border-2 border-border-gray bg-gray-600  text-letter text-sm  mr-2 w-40">
                        Property Accountability
                    </th>
                    <th class="border-2 border-border-gray bg-gray-600  text-letter text-sm  mr-2 w-40">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($users as $employee)
              
                    <tr>
                        <th scope="row" class='border-2 border-border-gray text-gray-800 font-medium capitalize text-left text-sm'>{{$i++}}</th>
                        <td class='border-2 border-border-gray text-gray-800 font-medium capitalize text-left text-sm'>{{ $employee->id_number }}
                        </td>
                        <td class='border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm'>{{ $employee->name }}</td>
                        <td class='border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm'>{{ $employee->department }}
                        </td>
                        <td class='border-2 border-border-gray text-gray-800 font-medium  apitalize text-left text-sm'>{{ $employee->email }}</td>
                        <td class='border-2 border-border-gray text-gray-800 font-medium  capitalize text-center text-sm'>
                            <button type="button"
                                class="viewProperties px-6
                    
                    bg-gray-600
                    text-white
                    font-medium
                    text-xs
                    text-center
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    hover:bg-gray-100
                    hover:text-gray-800
                    hover:border
                    hover:border-gray-600
                    hover:shadow-lg
                    focus:bg-gray-600 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-gray-600 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out
                    py-2"
                                employeeid="{{ $employee->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-eye mr-2"></i> View
                            </button>
                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog relative w-auto pointer-events-none">
                                    <div
                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-bold leading-normal text-text-gray text-center"
                                                id="exampleModalLabel">Property Accountabilities</h5>
                                            <button type="button"
                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            <table class=" border-2 border-border-gray i ">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="border-2 border-border-gray bg-gray-600 text-letter text-sm mr-2 w-40">
                                                            Property Number
                                                        </th>
                                                        <th
                                                            class="border-2 border-border-gray  bg-gray-600  text-letter text-sm mr-2 w-40">
                                                            Property Name
                                                        </th>
                                                        <th
                                                            class="border-2 border-border-gray bg-gray-600  text-letter  text-sm mr-2 w-40">
                                                            Description
                                                        </th>
                                                        <th
                                                            class="border-2 border-border-gray bg-gray-600  text-letter text-sm  mr-2 w-40">
                                                            Date Acquired
                                                        </th>
                                                        <th
                                                            class="border-2 border-border-gray bg-gray-600  text-letter text-sm  mr-2 w-40">
                                                            Price
                                                        </th>



                                                    </tr>
                                                </thead>
                                                <tbody id="subjectarea">



                                                </tbody>





                                            </table>
                        </td>










                        </td>


                        <td class='border-2 border-border-gray text-grey text-left text-sm'>
                            <form onsubmit="return confirm('Do you really want to update this employee')"
                                class="text-center rounded-lg p-3">
                                @csrf
                                <a href="{{ url('employeeupdate/' . $employee->id) }}"
                                    class=" bg-  bg-gray-600
                    text-white
                    font-medium
                    text-xs
                    text-center
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    py-2
                    px-3
                    hover:bg-gray-100
                    hover:text-gray-800
                    hover:border
                    hover:border-gray-600
                     hover:shadow-lg
                    focus:bg-gray-600 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-gray-600 active:shadow-lg">

                    <i class="fa-solid fa-pen mr-2"></i>   update
                                </a>


                            </form>
                        </td>
                @endforeach


            </tbody>

        </table>
        
     
   

    <div class="text-center mt-10">

        <a href="/addemployee"
            class="text-lg font-bold hover:bg-gray-100 bg-gray-800 text-gray-100 p-2 hover:text-gray-800 hover:border hover:border-gray-600 rounded"><i class="fa-solid fa-address-book   mr-2 "></i>ADD
            NEW EMPLOYEE</a>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $('.viewProperties').click(function(e) {
            e.preventDefault();
            $('#subjectarea').empty();
            $('#subjectarea').append('<h3>Fetching data...</h3>');
            let button = $(this);
            button.text('Fetching data...');
            const formData = {
                id: $(this).attr('employeeid')
            };
            console.log(formData)
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: formData,
                url: "{{ url('getproperties') }}",
                dataType: "json",
               
                success: function(data){
            
                     $('#subjectarea').empty();
                     data.forEach(function(property){
                           $('#subjectarea').append(
                                '<tr class="border-2 border-border-gray text-grey text-left text-sm"><td class="border-2 border-border-gray text-grey text-left text-sm" >' +
                                property.property_number + '</td><td class="border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm" >' +
                                property.property_name + '</td><td class="border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm" >' +
                                property.description + '</td><td class="border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm" >' +
                                property.date_acquired + '</td><td class="border-2 border-border-gray text-gray-800 font-medium  capitalize text-left text-sm" >' +
                                property.price + '</td></tr>')
                            });
                            button.text('View Properties');
                },
                error: function(data) {
                    alert("There's an error.")
                }
            });
        })
    </script>
</div>